<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'api/Okay.php';
require_once 'reader/library/SimpleXMLReader.php';
include_once('lib/Slugify.class.php');

class ExampleXmlReader1 extends SimpleXMLReader
{
    public $arr = array();

    public $okay;

    public function __construct()
    {        
        $this->okay = new Okay();
        $this->okay->db->query("TRUNCATE TABLE __data");
        
        $this->registerCallback("category", array($this, "callbackCategories"));
        $this->registerCallback("offer", array($this, "callbackOffers"));
    }
    
    protected function callbackCategories($reader)
    {
        $xml = $reader->expandSimpleXml();
        $attributes = $xml->attributes();

        $myarr1 = $this->arr;

        $external_id = $attributes['id'];
        $id = (int) $attributes['id'];
        $parent_id = (int) $attributes['parentId'];
        $name = (string) $xml;

        $myarr['id'] = $id;
        $myarr['external_id'] = $id;
        $myarr['parent_id'] = $parent_id;
        $myarr['name'] = $name;

        $myarr1[$id] = $myarr;
        $this->arr = $myarr1;

        if(php_sapi_name()=='cli'){
            echo "Parsing of categories: " . $attributes['id'] . "\r";        
        }
        usleep(10000);

//system('clear');
        return true;
    }

    protected function callbackOffers($reader)
    {
        $xml = $reader->expandSimpleXml();
        $attributes = $xml->attributes();

//print_r($xml);
        $categor = (array) $xml->categoryId;
        $category_id = $categor[0];

        $price1 = (array) $xml->price;
        $price = $price1[0];

        $currencyId1 = (array) $xml->currencyId;
        $currencyId = $currencyId1[0];

        $vendor1 = (array) $xml->vendor;
        $vendor = $vendor1[0];

        $vendorCode1 = (array) $xml->vendorCode;
        $vendorCode = $vendorCode1[0];

        $model1 = (array) $xml->model;
        $model = $model1[0];

        $description1 = (array) $xml->description;
        $description = $description1[0];

        $name1 = (array) $xml->name;
        $name = $name1[0];
        
        $id = (int) $attributes->{"id"};

        $param1 = (array) $xml->param;
        $param = $param1;
        
        //$attributes2 = $param1['attributes'];
        $paramName = $param['@attributes']['name'];

        $picture1 = (array) $xml->picture;
        $picture = $picture1;

            $data = $this->arr_offer;

            $data1['id'] = $id;
            $data1['name'] = $name;
            $data1['model'] = $model;
            $data1['category_id'] = (int)$category_id;
            $data1['price'] = $price;
            $data1['currencyId'] = $currencyId;
            $data1['vendor'] = $vendor;
            $data1['vendorCode'] = $vendorCode;
            $data1['description'] = $description;
            $data1['picture'] = $picture;
            $data1['paramName'] = $paramName;
            $data1['param'] = $param;
            $data[$id] = $data1;
            $this->arr_offer = $data;

        if(php_sapi_name()=='cli'){
            echo "Parsing of products: " . $attributes->{"id"} . "\r";
        }
        
        $datas['data'] = json_encode($data1);
//        $datas['data'] = base64_encode(serialize($data1));
        $this->okay->db->query("INSERT INTO __data SET ?%", $datas);
        
//        $datas['data'] = serialize($data1);      
//$retrieved_value = unserialize(base64_decode($row['src']);

        
//        usleep(1000);

        return true;
    }
}


class ImportCron extends Okay {

    public $categories_external = array();
    public $root_dir;
    
    protected $token;
    protected $chatid;
    protected $chatid2;

    public function __construct(){
        $this->root_dir = $this->config->root_dir;

        $this->token = "727519516:AAGqpt7lCes1Xg-wstX98k6-XD0SFt12MFM";
        $this->chatid = "311962084";
        $this->chatid2 = "477857019";

    }
    
    public function fetch() {

        $root_dir = $this->config->root_dir;
        $filename = $this->request->get("filename");

        return $root_dir . $filename;
    }

    public function currentProcess() {
        if($this->settings->cron_current_process == 0){
            $this->settings->update('cron_current_process', 1);
        }
        else{
            exit();
        }
    }

    public function send($mess) {

        if(php_sapi_name()=='cli'){
            print($mess . "\n");
        }
        else{
            $tbot = file_get_contents("https://api.telegram.org/bot" . $this->token . "/sendMessage?chat_id=" . $this->chatid . "&text=".urlencode($mess));
//          $tbot = file_get_contents("https://api.telegram.org/bot" . $this->token . "/sendMessage?chat_id=" . $this->chatid2 . "&text=".urlencode($mess));
        
        }
        sleep(1);
    }

    public function import_categories($item) {
            $this->db->query('SELECT id FROM __categories WHERE external_id=?', $item['external_id']);
            $category_id = $this->db->result('id');

            if(empty($category_id)) {
                $url = SlugifyClass::Slugify($item['name']);
                $category_id = $this->categories->add_category(array(
                    'id'=>$item['id'], 
                    'parent_id'=>$item['parent_id'], 
                    'external_id'=>$item['external_id'], 
                    'url'=>$url, 
                    'name'=>$item['name'], 
                    'meta_title'=>$item['name'], 
                    'meta_keywords'=>$item['name'], 
                    'meta_description'=>$item['name'] 
                ));
                
            }

            $categories_external = $this->categories_external;
            $categories_external[$item['external_id']] = $category_id;
            $this->categories_external = $categories_external;
    }

    function import_product($item) {
    
        $url = SlugifyClass::Slugify($item['name']);
        
        if(empty($url)){
            $url = $this->generatePassword(32);
        }
        
        $description = isset($item['description']) ? $item['description'] : '';
        
        $product_id = $this->products->add_product(array(
            'external_id'       =>  $item['id'],
            'url'               =>  $url,
            'name'              =>  $item['name'],
            'meta_title'        =>  $item['name'],
            'meta_keywords'     =>  $item['name'],
            'meta_description'  =>  $description,
            'annotation'        =>  $description,
            'description'       =>  $description,
            'visible'           =>  1
        ));
        
        //$categories_external = $this->categories_external;
        //$category_id = $categories_external[$item['category_id']];

        $category_id = $item['category_id'];
        $this->categories->add_product_category($product_id, $category_id);
        
//Variants
        $variant = new stdClass;
        $variant->product_id = $product_id;
        $variant->stock = 100;
        $variant->price = $item['price'];
        $this->variants->add_variant($variant);

        foreach($item['picture'] as $k=>$img) {

            $array = explode('.', $img);
            $extension = end($array);
            $image = $item['id']. '_' . $k . '.' . $extension;

            $ch = curl_init($img);
            $fp = fopen('./images3/' . $image, 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);

            if(!empty($img) && is_file($this->config->root_dir . 'images3/' . $image)) {
                rename($this->config->root_dir . 'images3/' . $image, $this->config->original_images_dir . $image);
                $this->products->add_image($product_id, $image);
            }
            
        }
        
        return $product_id;
    }

    public function delete()
    {

        // Удаление данных во временной таблицы парсинга
        // $this->db->query('TRUNCATE TABLE __data');
    
        // Удаление товаров    
        $query = $this->db->placehold('SELECT * FROM __products');
        $products = $this->db->query($query);

        // Удаление картинок
        $this->db->query("SET SQL_BIG_SELECTS=1");
        $this->db->query(" SELECT * FROM __products ");
        $products = $this->db->results();
        foreach($products as $product){
            $current_images = $this->products->get_images(array('product_id'=>$product->id));
            foreach($current_images as $image) {
                if(!in_array($image->id, $images)) {
                    $this->products->delete_image($image->id);
                }
            }
        }


        $this->db->query("TRUNCATE TABLE __categories");
        $this->db->query("TRUNCATE TABLE __lang_categories");
        $this->db->query("TRUNCATE TABLE __products");
        $this->db->query("TRUNCATE TABLE __lang_products");
        $this->db->query("TRUNCATE TABLE __products_categories");
        $this->db->query("TRUNCATE TABLE __variants");
        $this->db->query("TRUNCATE TABLE __lang_variants");
    
        // Очищаем свойства и свойства товара
        $this->db->query('TRUNCATE TABLE __features');
        $this->db->query('TRUNCATE TABLE __options');
        return true;
    }

    private function generatePassword($length = 16){
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }    
}
