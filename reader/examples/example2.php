<?php

header ("Content-type: text/html, charset=utf-8;");
require_once dirname(__FILE__). "/../library/SimpleXMLReader.php";

class ExampleXmlReader1 extends SimpleXMLReader
{

    public function __construct()
    {
        $this->registerCallback("category", array($this, "callbackPrice"));
    }

    protected function callbackPrice($reader)
    {
        $xml = $reader->expandSimpleXml();
        $attributes = $xml->attributes();
        //$ref = (string) $attributes->{"Номенклатура"};
       // if ($ref) {
            $price = floatval((string)$xml);

            $id = $attributes['id'];
            $parentId = $attributes['parentId'];
            $name = (string)$xml;
            echo $parentId[0] . '<br />';
            echo $id[0] . '<br />';
            echo $name;
            //echo iconv('UTF-8', 'windows-1251', $name) . '<br />';
            echo '<br />';
       // }
        return true;
    }
}

echo "<pre>";
$file = dirname(__FILE__) . "/000006062.yml";
//$file = dirname(__FILE__) . "/example1.xml";
$reader = new ExampleXmlReader1;
$reader->open($file);
$reader->parse();
$reader->close();


/*
$reader = new XMLReader();
if (!$reader->open($file))
{
    die("Failed to open 'data.xml'");
}
while($reader->read())
{
           if($reader->nodeType == XMLReader::ELEMENT) {
            $nodeName = $reader->name;
            echo $nodeName . '<br />';
        }        
}
$reader->close();
*/
//https://github.com/dkrnl/SimpleXMLReader
//https://stackoverflow.com/questions/1835177/how-to-use-xmlreader-in-php
//http://xandeadx.ru/blog/php/157
