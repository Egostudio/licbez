<?php

require_once('api/Okay.php');

class SuppliersAdmin extends Okay {
    
    public function fetch() {

        $filter = array();
        $filter['page'] = max(1, $this->request->get('page', 'integer'));

        if ($filter['limit'] = $this->request->get('limit', 'integer')) {
            $filter['limit'] = max(5, $filter['limit']);
            $filter['limit'] = min(100, $filter['limit']);
            $_SESSION['suppliers_num_admin'] = $filter['limit'];
        } elseif (!empty($_SESSION['suppliers_num_admin'])) {
            $filter['limit'] = $_SESSION['suppliers_num_admin'];
        } else {
            $filter['limit'] = 25;
        }
        $this->design->assign('current_limit', $filter['limit']);

        // Обработка действий
        if($this->request->method('post')) {
            // Действия с выбранными
            $ids = $this->request->post('check');
            
            if(is_array($ids)) {
                switch($this->request->post('action')) {
                    case 'delete': {
                        /*Удаление брендов*/
                        foreach($ids as $id) {
                            $this->suppliers->delete_supplier($id);
                        }
                        break;
                    }
                    case 'in_feed': {
                        /*Выгрузка товаров бренда в файл feed.xml*/
                        foreach($ids as $id) {
                            $q = $this->db->placehold("SELECT v.id FROM __products p LEFT JOIN __variants v ON v.product_id=p.id WHERE p.supplier_id =?", $id);
                            $this->db->query($q);
                            $v_ids = $this->db->results('id');
                            if (count($v_ids) > 0) {
                                $q = $this->db->placehold("UPDATE __variants SET feed=1 WHERE id in(?@)", $v_ids);
                                $this->db->query($q);
                            }
                        }
                        break;
                    }
                    case 'out_feed': {
                        /*Снятие товаров бренда с выгрузки файла feed.xml*/
                        foreach($ids as $id) {
                            $q = $this->db->placehold("SELECT v.id FROM __products p LEFT JOIN __variants v ON v.product_id=p.id WHERE p.supplier_id =?", $id);
                            $this->db->query($q);
                            $v_ids = $this->db->results('id');
                            if (count($v_ids) > 0) {
                                $q = $this->db->placehold("UPDATE __variants SET feed=0 WHERE id in(?@)", $v_ids);
                                $this->db->query($q);
                            }
                        }
                        break;
                    }
                }
            }

            // Сортировка
            $positions = $this->request->post('positions');
            $ids = array_keys($positions);
            sort($positions);
            foreach($positions as $i=>$position) {
                $this->suppliers->update_supplier($ids[$i], array('position'=>$position));
            }
        }

        $suppliers_count = $this->suppliers->count_suppliers($filter);
        // Показать все страницы сразу
        if($this->request->get('page') == 'all') {
            $filter['limit'] = $suppliers_count;
        }

        if($filter['limit']>0) {
            $pages_count = ceil($suppliers_count/$filter['limit']);
        } else {
            $pages_count = 0;
        }
        $filter['page'] = min($filter['page'], $pages_count);
        $this->design->assign('suppliers_count', $suppliers_count);
        $this->design->assign('pages_count', $pages_count);
        $this->design->assign('current_page', $filter['page']);

        $suppliers = $this->suppliers->get_suppliers($filter);
        
        $this->design->assign('suppliers', $suppliers);
        return $this->body = $this->design->fetch('suppliers.tpl');
    }
    
}
