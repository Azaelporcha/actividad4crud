<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fechanac"]) and !empty($_POST["correo"])) {
        $id=$_POST[ "id"];
        $nombre=$_POST[ "nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fechanac=$_POST["fechanac"];
        $correo=$_POST["correo"];
    }else{
        echo "<div class='alert alert-warning'>Campos Vacios</div>";
    }
}
?>