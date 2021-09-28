<?php
class loginMiddleware
{
   public static function init()
   {     
      if (isset($_REQUEST['module']) && $_REQUEST['module'] == 'login') 
         loginMiddleware::procesar();
   }

   public static function isLogin()
   {
      $sesion = false;
      if (isset($_SESSION['usuario']))
         $sesion = true;

      return $sesion;
   }

   public static function procesar()
	{
		$action = "";
		if(isset($_REQUEST['action']))
			$action = $_REQUEST['action'];

		if($action == "login")
         loginMiddleware::loginUser();
		else if($action == "logout")
         loginMiddleware::logoutUser();
      
	}

	/* Si no está logueado el usuario, se carga la página de login */
	public static function requiredLogin()
	{
		if(!isset($_SESSION['usuario']))
      {
			include_once("views/login/login.php");
         exit();
      }
      else
        return true;
	}

	/* Función empleada para loguear */
	public static function loginUser()
	{
		$usuario = $_REQUEST['usuario'];
		$clave = $_REQUEST['clave'];

		if($usuario == "admin" && $clave == "123")
		{
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
		}
		else
		{
			$error = true;
			include_once("views/login/login.php");
		}
	}
   
   public static function logoutUser()
	{
      $_SESSION = array();
      session_destroy();
	}
}
