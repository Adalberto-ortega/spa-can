<?php
    include_once("menu.php");
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/alumnosForm.css">
    <title>Practica_4</title>
</head>
<body>
    <div class="container"class="accordion-collapse collapse">
    </form>
        <div class="row">
            <div class="col-6 border d-flex aling-items-center justify-content-center vh-60" >
            
            <form method="POST" enctype="multipart/form-data"  class="formMargen">
            <input type="hidden" name="module" value="persona" />
           <input type="hidden" name="action" value="<?php echo $eventoFormulario; ?>" />
           <p>Id: <input type="number" name="id" value="<?php echo $personaActual->id; ?>"
            <?php if($eventoFormulario == "actualizarPersona") echo "readonly"; ?> /></p>
            <p class="formMargen">Placa:</p>
            <p> <input  type="text" name="placa" id="placa" size="10" maxlength="10" placeholder ="Ingrese la placa"  required  value="<?php echo $personaActual->placa; ?>" ></p>
            <p class="formMargen">Modelo:</p>
            <p> <input value="<?php echo $personaActual->modelo; ?>" type="text" name="modelo" id="modelo" size="20" maxlength="20" placeholder="Ingrese el modelo" required></p>
            <p class="formMargen">Marca</p>
            <p> <input value="<?php echo $personaActual->marca; ?>" type="text" name="marca" id="marca" size="20" maxlength="20" placeholder="Ingrese la marca" required></p>
            <p class="formMargen">Descripcion:</p>
            <p> <input value="<?php echo $personaActual->descripcion; ?>" type="text" name="descripcion" id="descripcion" size="50" placeholder="Ingrese la descripcion" required></p>
            <input type="submit" name="<?php echo $eventoFormulario; ?>" value="Guardar" />
            
            </div>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>

