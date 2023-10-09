<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fechanac"]) and !empty($_POST["correo"])) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fechanac=$_POST["fechanac"];
        $correo=$_POST["correo"];

        $sql=$conexion->query("insert into azael(nombres,apellidos,dni,fechanac,correo)values('$nombre','$apellido','$dni','$fechanac','$correo') ");
         if ($sql==1) {
            echo '<div class="alert alert-sucess">Persona registrado correctamente</div>';
         } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
         }
         
   }else{ 
    echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
   }
}

?>
