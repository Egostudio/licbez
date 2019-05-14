<?php
session_start();
require_once(dirname(dirname(__DIR__)).'/api/Okay.php');
$okay = new Okay();

$request = array(
    "apiKey" => $okay->settings->newpost_key,
    "modelName" => "Address",
    "calledMethod" => "getCities",
    "methodProperties" => array(
        "Page" => 1
    )
);
$response = $okay->np->request_novaposhta($request);

$result = array('success'=>$response->success);
$result['cities'] = '<option value=""></option>';
foreach ($response->data as $i=>$city) {
    $result['cities'] .= '<option value="'.$city->Ref.'">'.$city->DescriptionRu.'</option>';
}
die(json_encode($result));

?>
