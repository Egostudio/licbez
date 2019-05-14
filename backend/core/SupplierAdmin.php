<?php

require_once('api/Okay.php');

class SupplierAdmin extends Okay {
    
    public function fetch() {
        $supplier = new stdClass;
        /*Принимаем инофмрацию о бренде*/
        if($this->request->method('post')) {
            $supplier->id = $this->request->post('id', 'integer');
            $supplier->name = $this->request->post('name');
            $supplier->visible = $this->request->post('visible', 'boolean');
            $supplier->url = trim($this->request->post('url', 'string'));
            $supplier->url = preg_replace("/[\s]+/ui", '', $supplier->url);
            $supplier->url = strtolower(preg_replace("/[^0-9a-z]+/ui", '', $supplier->url));
            if (empty($supplier->url)) {
                $supplier->url = $this->translit_alpha($supplier->name);
            }
            
            // Не допустить одинаковые URL разделов.
            if(($c = $this->suppliers->get_supplier($supplier->url)) && $c->id!=$supplier->id) {
                $this->design->assign('message_error', 'url_exists');
            } elseif(empty($supplier->name)) {
                $this->design->assign('message_error', 'empty_name');
            } elseif(empty($supplier->url)) {
                $this->design->assign('message_error', 'empty_url');
            } else {
                /*Добавляем/обновляем бренд*/
                if(empty($supplier->id)) {
                    $supplier->id = $this->suppliers->add_supplier($supplier);
                    $this->design->assign('message_success', 'added');
                } else {
                    $this->suppliers->update_supplier($supplier->id, $supplier);
                    $this->design->assign('message_success', 'updated');
                }
                
                // Удаление изображения
                if ($this->request->post('delete_image')) {
                    $this->image->delete_image($supplier->id, 'image', 'suppliers', $this->config->original_suppliers_dir, $this->config->resized_suppliers_dir);
                }
                // Загрузка изображения
                $image = $this->request->files('image');
                if (!empty($image['name']) && ($filename = $this->image->upload_image($image['tmp_name'], $image['name'], $this->config->original_suppliers_dir))) {
                    $this->image->delete_image($supplier->id, 'image', 'suppliers', $this->config->original_suppliers_dir, $this->config->resized_suppliers_dir);
                    $this->suppliers->update_supplier($supplier->id, array('image'=>$filename));
                }
                $supplier = $this->suppliers->get_supplier($supplier->id);
            }
        } else {
            $supplier->id = $this->request->get('id', 'integer');
            $supplier = $this->suppliers->get_supplier($supplier->id);
        }
        
        $this->design->assign('supplier', $supplier);
        return  $this->design->fetch('supplier.tpl');
    }
    
}
