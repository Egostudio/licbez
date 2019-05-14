<?php
include_once('lib/Slugify.class.php');

class ImportAjax extends Okay {

    public $categories_external = array();
    
    public function fetch() {

        $root_dir = $this->config->root_dir;
        $filename = $this->request->get("filename");

        return $root_dir . $filename;
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

        $product_id = $this->products->add_product(array(
            'external_id'       =>  $item['id'],
            'url'               =>  $url,
            'name'              =>  $item['name'],
            'meta_title'        =>  $item['name'],
            'meta_keywords'     =>  $item['name'],
            'meta_description'  =>  $item['description'],
            'annotation'        =>  $item['description'],
            'description'       =>  $item['description'],
            'visible'           =>  1
        ));
        
        $categories_external = $this->categories_external;
        $category_id = $categories_external[$item['category_id']];
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

    }

}




$root_dir = $okay->config->root_dir;

require_once $root_dir . "reader/library/SimpleXMLReader.php";

class ExampleXmlReader1 extends SimpleXMLReader
{
    public $arr = array();

    public function __construct()
    {
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

            $myarr1 = $this->arr_offer;

            $myarr['id'] = $id;
            $myarr['name'] = $name;
            $myarr['model'] = $model;
            $myarr['category_id'] = (int)$category_id;
            $myarr['price'] = $price;
            $myarr['currencyId'] = $currencyId;
            $myarr['vendor'] = $vendor;
            $myarr['vendorCode'] = $vendorCode;
            $myarr['description'] = $description;
            $myarr['picture'] = $picture;
            $myarr['paramName'] = $paramName;
            $myarr['param'] = $param;
            $myarr1[$id] = $myarr;
            $this->arr_offer = $myarr1;

        return true;
    }
}


$import_ajax = new ImportAjax();

$filename = $okay->request->get("filename");
$file = $root_dir . $filename;

//Truncate categories



$query = $okay->db->placehold('SELECT * FROM __products');
$products = $okay->db->query($query);


// Удаление картинок
$okay->db->query("SET SQL_BIG_SELECTS=1");
$okay->db->query(" SELECT * FROM __products ");
$products = $okay->db->results();
foreach($products as $product){
    $current_images = $okay->products->get_images(array('product_id'=>$product->id));
    foreach($current_images as $image) {
        if(!in_array($image->id, $images)) {
            $okay->products->delete_image($image->id);
        }
    }
}

    $okay->db->query("TRUNCATE TABLE __categories");
    $okay->db->query("TRUNCATE TABLE __lang_categories");
    $okay->db->query("TRUNCATE TABLE __products");
    $okay->db->query("TRUNCATE TABLE __lang_products");
    $okay->db->query("TRUNCATE TABLE __products_categories");
    $okay->db->query("TRUNCATE TABLE __variants");
    $okay->db->query("TRUNCATE TABLE __lang_variants");
    
    // Очищаем свойства и свойства товара
    $okay->db->query('TRUNCATE TABLE __features');
    $okay->db->query('TRUNCATE TABLE __options');

$reader = new ExampleXmlReader1;
$reader->open($file);
$reader->parse();

$count_items = count($reader->arr);


//Categories
$string = '';
foreach($reader->arr as $item)
{
    //$string .= 'id - ' . $item['id']. '<br />';
    //$string .= 'parent_id - ' . $item['parent_id']. '<br />';
    //$string .= $item['name'] . '<br />';
    //$string .= '<br />';

    $import_ajax->import_categories($item);
}

//Products
foreach($reader->arr_offer as $item)
{
    $string .= 'id - ' . $item['id']. '<br />';
    $string .= 'model - ' . $item['model']. '<br />';
    $string .= 'category_id - ' . $item['category_id']. '<br />';
    $string .= 'price - ' . $item['price']. '<br />';
    $string .= 'currencyId - ' . $item['currencyId']. '<br />';
    $string .= 'vendor - ' . $item['vendor']. '<br />';
    $string .= 'vendorCode - ' . $item['vendorCode']. '<br />';
    $string .= 'description - ' . $item['description']. '<br />';
    $string .= 'paramName - ' . $item['paramName']. '<br />';
    $string .= $item['name'] . '<br />';
    $string .= '<br />';

    $import_ajax->import_product($item);
}

$result['success'] =   $string ;

    if ( file_exists($file) ) { 
        if( @unlink($file) !== true )
            throw new Exception('Could not delete file: ' . $file . ' Please close all applications that are using it.');
    } 


$reader->close();



header("Content-type: application/json; charset=UTF-8");
header("Cache-Control: must-revalidate");
header("Pragma: no-cache");
header("Expires: -1");
print json_encode($result);




//$export_ajax = new ExportAjax();
//$data = $export_ajax->fetch();
//$result['success'] =  dirname(__FILE__);
//$result['success'] = $filename;
