<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesi®Æn</title>

    
<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat Alternates', sans-serif;
}

body{
  background-size: 100vw 100vh;
  background-repeat: no-repeat;
}

/*Estilos para el encabezado*/

.header{
width: 100%;
height: auto;
position: fixed;
top: 0;left: 0;
background-color:#87CEEB;
opacity:60%;
}
    
.container{
width: 90%;
max-width: 1200px;
margin: auto;
}

.container .menu{
  float: right;
  line-height: 100px;
  z-index: 20;
}

.container .menu a{
  display: inline-block;
  padding: 15px;
  line-height: normal;
  text-decoration: none;
  color: #00008B;
  transition: all 0.3s ease;
  border-bottom: 2px solid transparent;
  font-size: 18px;
  margin-right: 5px;
}

.container .menu a:hover{
  border-bottom: 5px solid #c7c7c7;
  padding-bottom: 5px;
  color:white;
	}
	
.centrar {
  margin-left: 65px;
  margin-top: 135px;
  position: absolute;
  z-index:2;
}


input {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 10px;
  width: 100%;
  margin-bottom: 10px;
  border: 3px solid #ccc;
  border-radius: 5px;
}

form{max-width: 600px; margin-top:400px; margin-left: 400px; background-color: #69E2FF; padding: 40px;
  border-radius:20px; z-index:1000}
  body{background-color: #EEE;}
  
form{
  position: absolute;
  z-index:1000;
  width: 600px;
  opacity: 0.7;
  margin-top:400px;
}

h3 {
  color: white;
  }

h2 {
  color: black;
}

.usuario{
  color: black;
}

.error{
background: #2271b3;
color: white;
padding: 10px;
border-radius: 10px;
margin-left: 100px;
margin-top:20px;
z-index: 5;
width: 330px;
}

</style>

</head>

<body>

 <header class="header">

  <div class="container">
  <img class="" src="images/logo_siap.png">
	<nav class="menu">
	  <a href="index.php">Inicio</a>
	  <a href="#">Nosotros</a>
	  <a href="#">Item</a>
	  <a href="#">Contacto</a>
	</nav>
   </div>

	</header>

 <form action="" method="POST">

<?php
  if (isset($errorLogin)) {
      ?>
      <p class="error">
      <?php
      echo $errorLogin;
	  ?>
      </p>

      <?php
     }
	 ?>

</br>

<h2 class="">Iniciar sesi√≥n</h2>
<h3> <a href="registro_usuario.php">Registrarse</a></h3>
        </br>
        <p class="usuario">Nombre de usuario:
        </br>
        </br>
        <input type="text" name="Usuario"></p>
        <p class="usuario">Password: 
        </br>
        </br>
        <input type="password" name="Clave"></p>
        <p class="center"><input type="submit" value="Iniciar Sesi√≥n"></p>
 </form>

<img class="centrar" src="images/login_siap.png">
 
</body>
</html>