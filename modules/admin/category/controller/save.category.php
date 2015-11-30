<?php
session_start();
require '../../../../Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$db = new modules\admin\category\model\DBCategory;
$fn = new \libs\functions;

if($db->insertCategory($fn->prepareArrayDoublePointer($_POST,false)))
    print true;


