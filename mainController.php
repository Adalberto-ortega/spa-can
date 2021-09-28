<?php

$module = "";

if(isset($_REQUEST['module']))
    $module = $_REQUEST['module'];

if($module == "persona" && loginMiddleware::requiredLogin())
{
    include_once("controllers/personaController.php");
    personaController::procesar();
}
else
{
	include_once("controllers/homeController.php");  
	homeController::procesar();
}
?>