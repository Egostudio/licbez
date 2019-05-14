<?php

require_once('api/Okay.php');

class OrderAdmin extends Okay {
    
    public function fetch() {
        $order = new stdClass;
        /*Прием информации о заказе*/
        if($this->request->method('post')) {
            $order->id = $this->request->post('id', 'integer');
            $order->name = $this->request->post('name');
            /*novaposhta_ttn*/
            $order->lastname = $this->request->post('lastname');
            $order->city = $this->request->post('city');
            $order->np_warehouse = $this->request->post('np_warehouse');
            /*/novaposhta_ttn*/
            $order->email = $this->request->post('email');
            $order->phone = $this->request->post('phone');
            $order->address = $this->request->post('address');
            $order->comment = $this->request->post('comment');
            $order->note = $this->request->post('note');
            $order->discount = $this->request->post('discount', 'floatr');
            $order->coupon_discount = $this->request->post('coupon_discount', 'floatr');
            $order->delivery_id = $this->request->post('delivery_id', 'integer');
            $order->delivery_price = $this->request->post('delivery_price', 'float');
            $order->payment_method_id = $this->request->post('payment_method_id', 'integer');
            $order->paid = $this->request->post('paid', 'integer');
            $order->user_id = $this->request->post('user_id', 'integer');
            $order->lang_id = $this->request->post('entity_lang_id', 'integer');
            
            if(!$order_labels = $this->request->post('order_labels')) {
                $order_labels = array();
            }

            $purchases = array();
            if ($this->request->post('purchases')) {
                foreach ($this->request->post('purchases') as $n => $va) foreach ($va as $i => $v) {
                    if (empty($purchases[$i])) {
                        $purchases[$i] = new stdClass;
                    }
                    $purchases[$i]->$n = $v;
                }
            }

            if (empty($purchases)) {
                $this->design->assign('message_error', 'empty_purchase');
            } else {
                /*Добавление/Обновление заказа*/
                if(empty($order->id)) {
                    $order->id = $this->orders->add_order($order);
                    $this->design->assign('message_success', 'added');
                } else {
                    $this->orders->update_order($order->id, $order);
                    $this->design->assign('message_success', 'updated');
                }

                $this->orderlabels->update_order_labels($order->id, $order_labels);

                if($order->id) {
                    /*Работа с покупками заказа*/
                    $posted_purchases_ids = array();
                    foreach ($purchases as $purchase) {
                        $variant = $this->variants->get_variant($purchase->variant_id);

                        if (!empty($purchase->id)) {
                            if (!empty($variant)) {
                                $this->orders->update_purchase($purchase->id, array('variant_id' => $purchase->variant_id, 'variant_name' => $variant->name, 'sku' => $variant->sku, 'price' => $purchase->price, 'amount' => $purchase->amount));
                            } else {
                                $this->orders->update_purchase($purchase->id, array('price' => $purchase->price, 'amount' => $purchase->amount));
                            }
                        } elseif (!$purchase->id = $this->orders->add_purchase(array('order_id' => $order->id, 'variant_id' => $purchase->variant_id, 'price' => $purchase->price, 'amount' => $purchase->amount))) {
                            $this->design->assign('message_error', 'error_closing');
                        }

                        $posted_purchases_ids[] = $purchase->id;
                    }

                    // Удалить непереданные товары
                    foreach ($this->orders->get_purchases(array('order_id' => $order->id)) as $p) {
                        if (!in_array($p->id, $posted_purchases_ids)) {
                            $this->orders->delete_purchase($p->id);
                        }
                    }

                    $new_status_id = $this->request->post('status_id', 'integer');
                    $new_status_info = $this->orderstatus->get_status(array("status" => intval($new_status_id)));

                    if ($new_status_info[0]->is_close == 1) {
                        if (!$this->orders->close(intval($order->id))) {
                            $this->design->assign('message_error', 'error_closing');
                        } else {
                            $this->orders->update_order($order->id, array('status_id' => $new_status_id));
                        }
                    } else {
                        if ($this->orders->open(intval($order->id))) {
                            $this->orders->update_order($order->id, array('status_id' => $new_status_id));
                        }
                    }
                    $order = $this->orders->get_order($order->id);

                    // Отправляем письмо пользователю
                    if ($this->request->post('notify_user')) {
                        $this->notify->email_order_user($order->id);
                    }
                }
            }
        } else {
            $order->id = $this->request->get('id', 'integer');
            $order = $this->orders->get_order(intval($order->id));
            // Метки заказа
            $order_labels = array();
            if(isset($order->id)) {
                $order_labels = $this->orderlabels->get_order_labels($order->id);
                if($order_labels) {
                    foreach ($order_labels as $order_label) {
                        $order_labels[] = $order_label->id;
                    }
                }
            }
        }
        
        
        $subtotal = 0;
        $purchases_count = 0;
        if($order->id && $purchases = $this->orders->get_purchases(array('order_id'=>$order->id))) {
            // Покупки
            $products_ids = array();
            $variants_ids = array();
            foreach($purchases as $purchase) {
                $products_ids[] = $purchase->product_id;
                $variants_ids[] = $purchase->variant_id;
            }
            
            $products = array();
            foreach($this->products->get_products(array('id'=>$products_ids, 'limit' => count($products_ids))) as $p) {
                $products[$p->id] = $p;
            }
            
            $images = $this->products->get_images(array('product_id'=>$products_ids));
            foreach($images as $image) {
                $products[$image->product_id]->images[] = $image;
            }
            
            $variants = array();
            foreach($this->variants->get_variants(array('product_id'=>$products_ids)) as $v) {
                if ($v->rate_from != $v->rate_to && $v->currency_id) {
                    $v->price = number_format($v->price*$v->rate_to/$v->rate_from, 2, '.', '');
                    $v->compare_price = number_format($v->compare_price*$v->rate_to/$v->rate_from, 2, '.', '');
                }
                $v->units = $v->units ? $v->units : $this->settings->units;
                $variants[$v->id] = $v;
            }
            
            foreach($variants as $variant) {
                if(!empty($products[$variant->product_id])) {
                    $products[$variant->product_id]->variants[] = $variant;
                }
            }

            /*Определение, есть ли товары с количеством 0*/
            $hasVariantNotInStock = false;
            foreach($purchases as $purchase) {
                if(!empty($products[$purchase->product_id])) {
                    $purchase->product = $products[$purchase->product_id];
                }
                if(!empty($variants[$purchase->variant_id])) {
                    $purchase->variant = $variants[$purchase->variant_id];
                }
                if (($purchase->amount > $purchase->variant->stock || !$purchase->variant->stock) && !$hasVariantNotInStock) {
                    $hasVariantNotInStock = true;
                }
                $subtotal += $purchase->price*$purchase->amount;
                $purchases_count += $purchase->amount;
            }
            $this->design->assign('hasVariantNotInStock', $hasVariantNotInStock);
        } else {
            $purchases = array();
        }
        
        // Если новый заказ и передали get параметры
        if(empty($order->id)) {
            $order = new stdClass;
            if(empty($order->phone)) {
                $order->phone = $this->request->get('phone', 'string');
            }
            if(empty($order->name)) {
                $order->name = $this->request->get('name', 'string');
            }
            if(empty($order->address)) {
                $order->address = $this->request->get('address', 'string');
            }
            if(empty($order->email)) {
                $order->email = $this->request->get('email', 'string');
            }
        }
        
        $this->design->assign('purchases', $purchases);
        $this->design->assign('purchases_count', $purchases_count);
        $this->design->assign('subtotal', $subtotal);
        $this->design->assign('order', $order);
        
        if(!empty($order->id)) {
            // Способ доставки
            $delivery = $this->delivery->get_delivery($order->delivery_id);
            $this->design->assign('delivery', $delivery);
            
            // Способ оплаты
            $payment_method = $this->payment->get_payment_method($order->payment_method_id);
            
            if(!empty($payment_method)) {
                $this->design->assign('payment_method', $payment_method);
                // Валюта оплаты
                $payment_currency = $this->money->get_currency(intval($payment_method->currency_id));
                $this->design->assign('payment_currency', $payment_currency);
            }
            // Пользователь
            if($order->user_id) {
                $order_user = $this->users->get_user(intval($order->user_id));
                $order_user->group = $this->users->get_group(intval($order_user->group_id));
                $this->design->assign('user', $order_user);
            }
        }

        if (!empty($order->id)) {
            $neighbors_filter = array();
            $neighbors_filter['id'] = $order->id;
            $neighbors_filter['status'] = $this->request->get('status');
            $neighbors_filter['label'] = $this->request->get('label');
            $this->design->assign('neighbors_orders', $this->orders->get_neighbors_orders($neighbors_filter));
        }

        //все статусы
        $all_status = $this->orderstatus->get_status();
        $this->design->assign('all_status', $all_status);
        // Все способы доставки
        $deliveries = $this->delivery->get_deliveries();
        $this->design->assign('deliveries', $deliveries);
        
        // Все способы оплаты
        $payment_methods = $this->payment->get_payment_methods();
        $this->design->assign('payment_methods', $payment_methods);
        
        // Метки заказов
        $labels = $this->orderlabels->get_labels();
        $this->design->assign('labels', $labels);
        
        $this->design->assign('order_labels', $order_labels);
        
        /*novaposhta_ttn*/
        if ($this->request->get('ttn') == 1 && empty($order->ttn)) {
            $sender = $this->np->get_counterparties(array('cp_property'=>'Sender'));
            if (!$sender || count($sender->data) < 1) {
                $this->design->assign('message_error', 'error_sender_not_found');
            } else {
                $sender = $sender->data[0];
                $sender_contact_person = $this->np->get_contact_person_by_cp($sender->Ref);
                if (!$sender_contact_person || count($sender_contact_person->data) < 1) {
                    $this->design->assign('message_error', 'error_contact_person_not_found');
                } else {
                    $sender_contact_person = $sender_contact_person->data[0];
                    $recipient = $this->np->add_counterparty($order);
                    /*print_r($recipient);
                    die();*/
                    if (!empty($recipient->data)) {
                        $recipient = $recipient->data[0];
                        $s = strtotime($this->settings->np_time_today_date);
                        if (time() > $s) {
                            $date = date('d.m.Y', time()+86400);
                        } else {
                            $date = date('d.m.Y');
                        }
                        $total_weight = 0;
                        unset($purchase);
                        foreach ($purchases as $purchase) {
                            $total_weight += (!empty($purchase->variant->weight) ? $purchase->variant->weight : $this->settings->np_weight)*$purchase->amount;
                        }
                        $request = array(
                            "apiKey" => $this->settings->newpost_key,
                            "modelName" => "InternetDocument",
                            "calledMethod" => "save",
                            "methodProperties" => array(
                                "PayerType" => (!empty($_GET['payer_type']) ? $_GET['payer_type'] : $this->settings->np_payer_type),
                                "PaymentMethod" => $this->settings->np_payment_method,
                                "DateTime" => $date,
                                "CargoType" => 'Cargo',
                                "OptionsSeat" => array(array(
                                    "volumetricVolume" => $this->settings->np_volumetric_volume,
                                    "volumetricWidth" => $this->settings->np_volumetric_width,
                                    "volumetricLength" => $this->settings->np_volumetric_length,
                                    "volumetricHeight" => $this->settings->np_volumetric_height,
                                    "VolumeGeneral" => $this->settings->np_volume_general,
                                    "weight" => $this->settings->np_volumetric_weight
                                )),
                                "VolumeGeneral" => $this->settings->np_volume_general,
                                "Weight" => $total_weight,
                                "ServiceType" => 'WarehouseWarehouse',
                                "SeatsAmount" => '1',
                                "Description" => 'Заказ №'.$order->id,
                                "Cost" => $order->total_price,
                                "CitySender" => $this->settings->np_sender_city,
                                "Sender" => $sender->Ref,
                                "SenderAddress" => $this->settings->np_sender_warehouse,
                                "ContactSender" => $sender_contact_person->Ref,
                                "SendersPhone" => $this->settings->np_sender_phone,
                                "CityRecipient" => $order->city,
                                "Recipient" => $recipient->Ref,
                                "RecipientAddress" => $order->np_warehouse,
                                "ContactRecipient" => $recipient->ContactPerson->data[0]->Ref,
                                "RecipientsPhone" => $order->phone
                            )
                        );
                        if ($this->request->get('back_delivery')) {
                            $request['methodProperties']['BackwardDeliveryData'][] = array(
                                "PayerType" => $this->settings->np_back_payer_type,
                                "CargoType" => 'Documents',
                                "RedeliveryString" => ' '
                            );
                        }
                        $result = $this->np->request_novaposhta($request);
                        if ($result->success && count($result->data)) {
                            $result = $result->data[0];
                            $this->db->query('update __orders set ttn=? where id=?', $result->Ref.':'.$result->IntDocNumber, $order->id);
                            header('location: '.$this->config->root_url.'/backend/index.php?module=OrderAdmin&id='.$order->id);
                        } else {
                            $t = '';
                            foreach ($result->errors as $k=>$v) {
                                $t .= $k.'- '.$v.';';
                            }
                            $this->design->assign('message_error', '<error_ttn> '.$t);
                        }
                    } else {
                        $this->design->assign('message_error', 'error_counterparty');
                    }
                }
            }
        } elseif (!empty($order->ttn)) {
            $a = explode(':', $order->ttn);
            $order->ttn_ref = $a[0];
            $order->ttn_num = $a[1];
        }
        /*/novaposhta_ttn*/

        if($this->request->get('view') == 'print') {
            return $this->design->fetch('order_print.tpl');
        } else {
            return $this->design->fetch('order.tpl');
        }
    }
    
}
