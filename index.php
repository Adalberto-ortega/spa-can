<?php
   session_start();
   require_once('libraries/loginMiddleware.php');
   loginMiddleware::init();

?>

<html>

<head>
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/login.css">
</head>

<body>
   <a href='index.php'>Home</a> | 
   <a href='index.php?module=persona'>Persona</a>
   
   <?php
   if (loginMiddleware::isLogin()) {
      echo " | <a style='float:rigth' href='index.php?module=login&action=logout'>Cerrar sesión</a>";
   }

   ?>
   <hr />
   <?php include_once("mainController.php"); ?>

</body>

</html>