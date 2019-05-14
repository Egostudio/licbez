<?php

require_once('api/Okay.php');

class SettingsGeneralAdmin extends Okay {

    private $allow_img = array('png','gif','jpg','jpeg');
    /*Настройки сайта*/
    public function fetch() {
        if($this->request->method('POST')) {
            /*novaposhta_ttn*/
            $this->settings->newpost_key = $this->request->post('newpost_key');
            $this->settings->np_sender_city = $this->request->post('np_sender_city');
            $this->settings->np_sender_warehouse = $this->request->post('np_sender_warehouse');
            $this->settings->np_sender_phone = $this->request->post('np_sender_phone');
            $this->settings->np_time_today_date = $this->request->post('np_time_today_date');
            $this->settings->np_payer_type = $this->request->post('np_payer_type');
            $this->settings->np_back_payer_type = $this->request->post('np_back_payer_type');
            $this->settings->np_payment_method = $this->request->post('np_payment_method');
            $this->settings->np_volume_general = str_replace(',', '.', $this->request->post('np_volume_general'));
            $this->settings->np_weight = str_replace(',', '.', $this->request->post('np_weight'));
            $this->settings->np_volumetric_volume = str_replace(',', '.', $this->request->post('np_volumetric_volume'));
            $this->settings->np_volumetric_width = str_replace(',', '.', $this->request->post('np_volumetric_width'));
            $this->settings->np_volumetric_length = str_replace(',', '.', $this->request->post('np_volumetric_length'));
            $this->settings->np_volumetric_height = str_replace(',', '.', $this->request->post('np_volumetric_height'));
            $this->settings->np_volumetric_weight = str_replace(',', '.', $this->request->post('np_volumetric_weight'));
            /*/novaposhta_ttn*/
            $this->settings->update('site_name', $this->request->post('site_name'));
            $this->settings->date_format = $this->request->post('date_format');
            $this->settings->admin_email = $this->request->post('admin_email');
            $this->settings->site_work = $this->request->post('site_work');
            $this->settings->update('site_annotation', $this->request->post('site_annotation'));
            $this->settings->captcha_product = $this->request->post('captcha_product', 'boolean');
            $this->settings->captcha_post = $this->request->post('captcha_post', 'boolean');
            $this->settings->captcha_cart = $this->request->post('captcha_cart', 'boolean');
            $this->settings->captcha_register = $this->request->post('captcha_register', 'boolean');
            $this->settings->captcha_feedback = $this->request->post('captcha_feedback', 'boolean');
            $this->settings->captcha_callback = $this->request->post('captcha_callback', 'boolean');
            $this->settings->gather_enabled = $this->request->post('gather_enabled', 'boolean');
            if(is_null($this->request->post('site_logo'))) {
               if(file_exists($this->config->root_dir .'/design/'. $this->settings->theme . '/images/'.$this->settings->site_logo)) {
                   @unlink($this->config->root_dir .'/design/'. $this->settings->theme . '/images/'.$this->settings->site_logo);
                   $this->settings->site_logo = '';
               }
            } else {
                $this->settings->site_logo = $this->request->post('site_logo');
            }

            if(!empty($_FILES['site_logo']['tmp_name']) && !empty($_FILES['site_logo']['name'])) {
                $tmp_name = $_FILES['site_logo']['tmp_name'];
                $site_logo_name = $_FILES['site_logo']['name'];
                $ext = pathinfo($site_logo_name,PATHINFO_EXTENSION);
                if(in_array($ext,$this->allow_img)) {
                    if(move_uploaded_file($tmp_name, $this->config->root_dir .'/design/'. $this->settings->theme . '/images/' . $site_logo_name)) {
                        $this->settings->site_logo = $site_logo_name;
                    }
                } else {
                    $this->design->assign('message_error', 'wrong_ext');
                }
            }
            $this->design->assign('message_success', 'saved');
        }
        $this->design->assign('allow_ext', $this->allow_img);

        return $this->design->fetch('settings_general.tpl');
    }

}
