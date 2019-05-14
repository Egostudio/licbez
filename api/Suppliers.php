<?php

require_once('Okay.php');

class Suppliers extends Okay {

    /*Выбираем всех поставщиков*/
    public function get_suppliers($filter = array()) {
        $limit = 100;
        $page = 1;
        $category_id_filter = '';
        $category_join = '';
        $visible_filter = '';
        $product_id_filter = '';
        $product_join = '';
        $visible_supplier_filter = '';
        $features_filter = '';

        if(isset($filter['limit'])) {
            $limit = max(1, intval($filter['limit']));
        }

        if(isset($filter['page'])) {
            $page = max(1, intval($filter['page']));
        }

        $sql_limit = $this->db->placehold(' LIMIT ?, ? ', ($page-1)*$limit, $limit);

        if(isset($filter['visible'])) {
            $visible_filter = $this->db->placehold('AND p.visible=?', intval($filter['visible']));
        }

        if(isset($filter['visible_supplier'])) {
            $visible_supplier_filter = $this->db->placehold('AND b.visible=?', intval($filter['visible_supplier']));
        }

        if(isset($filter['product_id'])) {
            $product_id_filter = $this->db->placehold('AND p.id in (?@)', (array)$filter['product_id']);
            $product_join = $this->db->placehold("LEFT JOIN __products p ON p.supplier_id=b.id");
        }

        // Выбираем всех поставщиков

        $query = $this->db->placehold("SELECT 
                DISTINCT s.id, 
                s.url, 
                s.name, 
                s.image, 
                s.filename, 
                s.last_modify,
                s.visible,
                s.position
            FROM __suppliers s
            $category_join
            $product_join
            WHERE 
                1 
                $category_id_filter
                $features_filter
                $visible_supplier_filter
                $product_id_filter
            ORDER BY s.position
            $sql_limit
        ");

//        echo $query;

        $this->db->query($query);
        return $this->db->results();
    }

    public function count_suppliers($filter = array()) {
        $category_id_filter = '';
        $category_join = '';
        $visible_filter = '';
        $product_id_filter = '';
        $product_join = '';
        $visible_supplier_filter = '';
        $features_filter = '';

        if(isset($filter['visible'])) {
            $visible_filter = $this->db->placehold('AND p.visible=?', intval($filter['visible']));
        }

        if(isset($filter['visible_supplier'])) {
            $visible_supplier_filter = $this->db->placehold('AND b.visible=?', intval($filter['visible_supplier']));
        }

        if(isset($filter['product_id'])) {
            $product_id_filter = $this->db->placehold('AND p.id in (?@)', (array)$filter['product_id']);
            $product_join = $this->db->placehold("LEFT JOIN __products p ON p.supplier_id=b.id");
        }

        if(!empty($filter['category_id'])) {
            $category_join = $this->db->placehold("LEFT JOIN __products p ON p.supplier_id=b.id LEFT JOIN __products_categories pc ON p.id = pc.product_id");
            $category_id_filter = $this->db->placehold("AND pc.category_id in(?@) $visible_filter", (array)$filter['category_id']);
        }

        if(!empty($filter['features'])) {
            foreach($filter['features'] as $feature=>$value) {
                $features_filter .= $this->db->placehold('AND p.id in (SELECT product_id FROM __options WHERE feature_id=? AND translit in(?@) ) ', $feature, (array)$value);
            }
            if (empty($category_join)) {
                $features_filter .= $visible_filter;
                $category_join = $this->db->placehold("LEFT JOIN __products p ON (p.supplier_id=b.id)");
            }
        }

        // Выбираем всех поставщиков
        $query = $this->db->placehold("SELECT
                count(distinct b.id) as count
            FROM __suppliers b
            $category_join
            $product_join
            WHERE
                1
                $category_id_filter
                $features_filter
                $visible_supplier_filter
                $product_id_filter
        ");
        $this->db->query($query);
        return $this->db->result('count');
    }

    /*Выбираем конкретного поставщика*/
    public function get_supplier($id,$visible=0) {
        if (empty($id)) {
            return false;
        }
        $visible = $visible==1 ? 'AND b.visible=1 ' : '';
        if(is_int($id)) {
            $filter = $this->db->placehold($visible . 'AND s.id = ?', intval($id));
        } else {
            $filter = $this->db->placehold($visible . 'AND s.url = ?', $id);
        }
        
        $query = "SELECT 
                s.id, 
                s.name,                
                s.url, 
                s.image, 
                s.filename, 
                s.last_modify,
                s.visible,
                s.position
            FROM __suppliers s
            WHERE 
                1 
                $filter
            LIMIT 1
        ";
        
        $this->db->query($query);
        return $this->db->result();
    }

    /*Добавление поставщика*/
    public function add_supplier($supplier) {

        $name = $supplier->name;

        //$supplier = (object)$supplier;
        $supplier->url = preg_replace("/[\s]+/ui", '', $supplier->url);
        $supplier->url = strtolower(preg_replace("/[^0-9a-z]+/ui", '', $supplier->url));
        if(empty($supplier->url)) {
            $supplier->url = $this->translit_alpha($supplier->name);
        }
        while($this->get_supplier((string)$supplier->url)) {
            if(preg_match('/(.+)([0-9]+)$/', $supplier->url, $parts)) {
                $supplier->url = $parts[1].''.($parts[2]+1);
            } else {
                $supplier->url = $supplier->url.'2';
            }
        }
        // Проверяем есть ли мультиязычность и забираем описания для перевода
       
//$message = $supplier;
//mail('iv.savchuk@gmail.com', 'the subject', $message);
        $supplier->last_modify = date("Y-m-d H:i:s");
        $this->db->query("INSERT INTO __suppliers SET ?%", $supplier);
        $id = $this->db->insert_id();


        
//echo $supplier;
        //exit;
        //$this->db->query("UPDATE __suppliers SET position=id WHERE id=? LIMIT 1", $id);

//savchuk
       // $this->db->query("UPDATE __suppliers SET name='" . $name . "' WHERE id=? LIMIT 1", $id, '889');
       
        // Если есть описание для перевода. Указываем язык для обновления
        return $id;
    }

    /*Обновление поставщика*/
    public function update_supplier($id, $supplier) {
        //$supplier = (object)$supplier;
        // Проверяем есть ли мультиязычность и забираем описания для перевода
        
        $supplier->last_modify = date("Y-m-d H:i:s");
        $query = $this->db->placehold("UPDATE __suppliers SET ?% WHERE id=? LIMIT 1", $supplier, intval($id));
        $this->db->query($query);
                
        return $id;
    }

    /*Удаление поставщика*/
    public function delete_supplier($id) {
        if(!empty($id)) {
            $this->image->delete_image($id, 'image', 'suppliers', $this->config->original_suppliers_dir, $this->config->resized_suppliers_dir);
            $query = $this->db->placehold("DELETE FROM __suppliers WHERE id=? LIMIT 1", $id);
            $this->db->query($query);
            $query = $this->db->placehold("UPDATE __products SET supplier_id=NULL WHERE supplier_id=?", $id);
            $this->db->query($query);
        }
    }
    
}
