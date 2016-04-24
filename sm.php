<?php

require_once './inc/smarty/libs/Smarty.class.php';



$sm = new Smarty;
//$sm->template_class = "view/";

$sm->setConfigDir("config");
$sm->setCompileDir("inc/smarty/templates_c");

//$sm->setTemplateDir("inc/smarty/template");
$sm->setTemplateDir("view");

