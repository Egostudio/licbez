<?php

require_once('View.php');

class MainView extends View {

    /*Отображение контента главной страницы*/
    public function fetch() {
        if($this->page) {
            $this->design->assign('meta_title', $this->page->meta_title);
            $this->design->assign('meta_keywords', $this->page->meta_keywords);
            $this->design->assign('meta_description', $this->page->meta_description);
        }

        error_reporting(E_ALL);
ini_set('display_errors', 1);
        return $this->design->fetch('main.tpl');
    }
    
}
