<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

.cabeza {
  /*background-image: url("../img/1.jpg");*/
  /*width: 100%;*/
  height: 100vh;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
label {
  min-width: 80px;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: rgb(218, 216, 216);
  font-family: 'Exo';
}
.container {
  width: 500px;
  padding: 20px;
  background: white;
  margin: auto;
  margin-top: 50px;
}

.titulo {
  text-align: center;
  border: solid rgb(176, 176, 209) 1px;
  border-style: dashed;
  padding: 15px;
  color: rgb(95, 93, 93);
}
.padre {
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 25px;
  color: rgb(128, 128, 128);
}
.nombre,
.apellido,
.usuario,
.clave {
  display: flex;
  flex-direction: column;
}
input {
  padding: 10px;
}
input:focus {
  outline: solid rgb(158, 158, 158) 2px;
}
.cuenta {
  display: flex;
  flex-direction: column;
}

.boton {
  width: 100%;
  background: rgb(0, 132, 255);
  border: none;
  color: white;
  padding: 15px 0;
  font-size: 18px;
}
.cuenta a{
  padding: 10px;
  color: blue;
  font-weight: bold;
}

.alerta{
  text-align: center;
  color: red;
}


.success{
  text-align: center;
  color: rgb(31, 156, 0);
}
    
    
    
    </style>
</head>
<body>
  <div class="container">
    <form action="" method="POST" class="formulario">
      <h2 class="titulo">Registrar</h2>
      <?php
      include("includes/conexion_bd.php");
      include("controlador/controlador_registrar.php");

      ?>
      <div class="padre">

        <div class="nombre">
          <label for="">Nombres</label>
          <input type="text" name="nombre">
        </div>

        <div class="apellido">
          <label for="">Apellidos</label>
          <input type="text" name="apellido">
        </div>

        <div class="usuario">
          <label for="">usuario</label>
          <input type="text" name="usuario">
        </div>

        <div class="clave">
          <label for="">Contraseña</label>
          <input type="text" name="clave">
        </div>

        <div class="cuenta">
           <input Class="boton" type="submit" value="Registrar" name="registro">
           <a href="loginr.php">Salir</a>
        </div>

      </div> 

    </form>


  </div>
    
</body>
</html>