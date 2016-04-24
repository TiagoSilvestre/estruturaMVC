<?php
/**
 * Created by PhpStorm.
 * User: tiago
 * Date: 21/04/16
 * Time: 21:33
 */

include 'sm.php';
require_once './action/aAlunos.php';

$aluno = new aAlunos();

//SELECT
$select = array();
$select = $aluno->select();


$sm->assign("data", date("d/m/Y H:i:s"));

$sm->assign("lista", $select);



$sm->display("test.html");

?>


<link rel="stylesheet" type="text/css" href="css/menu.css"/>

