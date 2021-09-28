<?php
    include_once("menu.php");

    if(isset($message))
        echo "<p><b>$message</b></p>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Practica_4</title>
</head>
<body>
<h1>Listado de Autos</h1>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr><th>Placa</th><th>Modelo</th><th>Marca</th><th>Descripcion</th><th colspan="2">Acciones</th></tr>
    </thead>
    <?php
    foreach($listaPersonas as $arg){

        echo "<td>  $arg->placa  </td> " . 
        "<td>" . $arg->modelo . "</td>" . 
        "<td>" . $arg->marca . "</td>" . 
        "<td>" . $arg->descripcion . "</td>" . 
        "<td> <a href='?module=persona&action=editar&id=". $arg->id ."'>Editar</a>" . 
        "<a href='?module=persona&action=borrar&id=". $arg->id ."'>Borrar</a>" . 
        "</td></tr>";

    }?>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



