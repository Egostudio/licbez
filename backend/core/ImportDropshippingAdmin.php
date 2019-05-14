<?php

require_once('api/Import.php');

class ImportDropshippingAdmin extends Import {

    /*Импорт товаров*/
    public function fetch() {

        if($this->request->method('post')) {

        }
        
        return $this->design->fetch('import_dropshipping.tpl');
    }

}
