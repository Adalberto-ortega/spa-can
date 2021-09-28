<?php

class homeController
{
	public static function procesar()
	{
      homeController::homePage();
	}

	/* Si no está logueado el usuario, se carga la página de login */
	public static function homePage()
	{	
         include_once("views/home/principal.php");
	}
}

?>