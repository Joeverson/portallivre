<?php
/*
 * 1 = imagem do slider inicial do site
 *
 * */
session_start();
require '../../../../Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$db = new \modules\admin\colunista\model\DBColunista;
$fn = new \libs\functions;

$_POST['id_user'] = $_SESSION['user']['id_user'];

//caso de tudo certo ele fala lá que ta ok!!
if($db->insertColunista($fn->prepareArrayDoublePointer($_POST, false)))
    print true;