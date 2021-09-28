<?php

include_once("Connection.php");
include_once("Persona.php");

class PersonaDAL {

    public static function listAll()
    {
        $connection = new Connection();

        $result = $connection->db->query("select * from autos");

        $listaPersonas = array();

        for($i=0; $i < mysqli_num_rows($result); $i++)
        {
            $array_persona = $result->fetch_assoc();
            $listaPersonas[$i] = new Persona($array_persona['id'], $array_persona['placa'], $array_persona['modelo'], $array_persona['marca'], $array_persona['descripcion'] );
        }

        return $listaPersonas;

    }

    public static function findById($idPersona)
    {
        $connection = new Connection();
        $result = $connection->db->query("select * from autos where id = $idPersona");

        $personaActual = new Persona();

        if(mysqli_num_rows($result) > 0)
        {
            $array_persona = $result->fetch_assoc();
            $personaActual = new Persona($array_persona['id'], $array_persona['placa'], 
            $array_persona['modelo'], $array_persona['marca'], $array_persona['descripcion'] );
        }

        return $personaActual;
    }

    public static function insert($nuevaPersona)
    {
        $connection = new Connection();
        $stmt = "INSERT INTO autos(placa, modelo, marca, descripcion) VALUE ('$nuevaPersona->placa', '$nuevaPersona->modelo', '$nuevaPersona->marca', '$nuevaPersona->descripcion')";
        $resultado = $connection->db->query($stmt);
        echo ($nuevaPersona->placa);
        return $resultado;
    }

    public static function update($personaEditar)
    {
        $connection = new Connection();
        $stmt = "update autos set placa = '$personaEditar->placa', modelo = $personaEditar->modelo, 
                marca = '$personaEditar->marca' descripcion = '$personaEditar->descripcion' where id = $personaEditar->id";
        $resultado = $connection->db->query($stmt);
        return $resultado;
    }

    public static function delete($idPersona)
    {
        $connection = new Connection();
        $stmt = "delete from autos where id = $idPersona";
        $resultado = $connection->db->query($stmt);
        return $resultado;
    }  
}