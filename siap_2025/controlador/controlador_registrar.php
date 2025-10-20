<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["clave"])) {
        echo '<div class="alerta">Uno de los campos está vacío</div>';
    } else {

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $sql=$conexion ->query("insert into usuarios_prov(nombres,apellidos,usuario,clave)values('$nombre','$apellido','$usuario','$clave') ");
        if ($sql==1) {
            echo '<div class="success">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="alerta">Error al registraR usuario</div>';
    

        }
   }
}


?>