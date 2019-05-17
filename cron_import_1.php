#!/usr/local/bin/php
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


require_once('lib/import/Import.php');

$import = new ImportCron();

$import->send("Cron");


exit;

