<?php

class Persona {

    public $id;
    public $placa;
    public $modelo;
    public $marca;
    public $descripcion;


    function __construct($i=0, $p="", $m="", $mar="",$d="")
    {
        $this->id= $i;
        $this->placa = $p;
        $this->modelo = $m;
        $this->marca = $mar;
        $this->descripcion = $d;
    }
}

?>