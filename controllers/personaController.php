<?php

include_once('models/Persona.php');
include_once('models/PersonaDAL.php');

class personaController {
    
    public static function procesar()
    {
        $action = ""; 
        if(isset($_REQUEST['action']))
            $action = $_REQUEST['action'];
       
        /** Si se pulsó el botón agregar */
        if($action == "agregar") self::agregar();
        else if($action == "insertar") self::insertar();
        else if($action == "editar") self::editar();
        else if($action == "actualizar") self::actualizar();
        else if($action == "borrar") self::borrar();
        else self::listar();
    }

    public static function agregar()
    {
        $personaActual = new Persona();
        $eventoFormulario = "insertar";
        include_once("views/persona/agregarOeditar.php");
    }

    public static function insertar()
    {
        $nuevoPersona = new Persona((int)$_POST['id'], $_POST['placa'], $_POST['modelo'], $_POST['marca'], $_POST['descripcion']);      

        $resultado = PersonaDAL::insert($nuevoPersona);
                
        if($resultado)
            $message = "<p>Dato insertado correctamente</p>";
        else
            $message = "<p>Error al insertar el dato</p>";

        $listaPersonas = PersonaDAL::listAll();
        include_once("views/persona/listar.php");
    }

    public static function editar()
    {
        $idPersona = $_GET['id'];
        
        $personaActual = PersonaDAL::findById($idPersona);

        $eventoFormulario = "actualizar";
        include_once("views/persona/agregarOeditar.php");
    }
    
    /** Si se pulsó el botón actualizar */
    public static function actualizar()
    {
        $actualizarPersona = new Persona((int)$_POST['id'], $_POST['placa'], $_POST['modelo'], $_POST['marca'], $_POST['descripcion']);
            
        $resultado = PersonaDAL::update($actualizarPersona);
        
        if($resultado)
            $message = "<p>Dato actualizado correctamente</p>";
        else
            $message = "<p>Error al actualizar el dato</p>";
        
        $listaPersonas = PersonaDAL::listAll();
        include_once("views/persona/listar.php");
    }
        
        
    public static function borrar()
    {
        $id = $_GET['id'];
               
        $resultado = PersonaDAL::delete($id);
        
        if($resultado)
            $message = "<p>Dato borrado correctamente</p>";
        else
            $message = "<p>Error al borrar el dato</p>";

        $listaPersonas = PersonaDAL::listAll();
        include_once("views/persona/listar.php");
    }

    public static function listar()
    {
        $listaPersonas = PersonaDAL::listAll();
        include_once("views/persona/listar.php");
    }
}
    