#!/usr/local/bin/php
<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('lib/import/Import.php');
$token = "727519516:AAGqpt7lCes1Xg-wstX98k6-XD0SFt12MFM";
$chatid = "311962084";
$chatid2 = "477857019";


$import_ajax = new ImportAjax();


$limit = 35;
$query = $import_ajax->db->placehold("SELECT * FROM __data  limit ?  ", $limit);
if($import_ajax->db->query($query)) {
    foreach($import_ajax->db->results() as $item)
    {
        $item1 = (array)json_decode($item->data);
        $product_id = $import_ajax->import_product($item1);
        $import_ajax->db->query("DELETE FROM __data WHERE id=?", $item->id);
    }
}

exit;
