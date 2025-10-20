<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    
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
	.capa{
		position: fixed;
		width: 100%;
		height: 100vh;
		background: #000;
		z-index: -1;
		top: 0;left: 0;
	}
	/*Estilos para el encabezado*/
	.header{
		width: 100%;
		height: auto;
		position: fixed;
		top: 0;left: 0;
		background-color:#87CEEB;
		opacity:30%;
		
	}
    
    .container{
		width: 90%;
		max-width: 1200px;
		margin: auto;
	}

.container .btn-menu, .logo{
		float: right;
		line-height:100px;
	}
	.container .btn-menu label{
		color: #fff;
		font-size: 25px;
		cursor: pointer;
	}
	.logo h1{
		color: #fff;
		font-weight: 400;
		font-size: 22px;
		margin-left: 10px;
	}
	.container .menu{
		float: right;
		line-height: 100px;
	}
	.container .menu a{
		display: inline-block;
		padding: 15px;
		line-height: normal;
		text-decoration: none;
		color: #000;
		transition: all 0.3s ease;
		border-bottom: 2px solid transparent;
		font-size: 15px;
		margin-right: 5px;
	}

    .container .menu a:hover{
		border-bottom: 2px solid #c7c7c7;
		padding-bottom: 5px;
		color:blue;
	}
	/*Fin de Estilos para el encabezado*/

	/*Menù lateral*/
	#btn-menu{
		display: none;
	}
	.container-menu{
		position: absolute;
		background: rgba(0,0,0,0.5);
		width: 100%;
		height: 100vh;
		top: 0;left: 0;
		transition: all 500ms ease;
		opacity: 0;
		visibility: hidden;
	}
	#btn-menu:checked ~ .container-menu{
		opacity: 1;
		visibility: visible;
	}
	.cont-menu{
		width: 100%;
		max-width: 250px;
		background: #1c1c1c;
		height: 100vh;
		position: relative;
		transition: all 500ms ease;
		transform: translateX(-100%);
	}

    #btn-menu:checked ~ .container-menu .cont-menu{
		transform: translateX(0%);
	}
	.cont-menu nav{
		transform: translateY(15%);
	}
	.cont-menu nav a{
		display: block;
		text-decoration: none;
		padding: 20px;
		color: #000000;
		border-left: 5px solid transparent;
		transition: all 400ms ease;
	}
	.cont-menu nav a:hover{
		border-left: 5px solid #c7c7c7;
		background: #1f1f1f;
	}
	.cont-menu label{
		position: absolute;
		right: 5px;
		top: 10px;
		color: #000;
		cursor: pointer;
		font-size: 18px;
	}

    .centrar {
			margin-left: 65px;
			z-index: 3;
			
			
			
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
  form{max-width: 500px; margin-top:-0px; margin-left:0px; background-color: red; padding: 40px;
  border-radius:20px; z-index:1000}
  body{background-color: #EEE;}
  h3 {
	   color: white;
  }
  h2 {
  color: white;
}

.usuario{
    color: white;
}

.error{
    background: blue;
    color: white;
    padding: 10px;
    border-radius: 30px;
    margin: 40px;
	z-index: 5;
}
</style>
</head>

<body>

<header class="header">
	  <div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1 class="logo"></h1>
			</div>
			<nav class="menu">
				<a href="login.php">Inicio</a>
				<a href="#">Nosotros</a>
				<a href="#">Item</a>
				<a href="#">Contacto</a>
			</nav>
		</div>
	</header>
	
	<img class="centrar" src="images/portada_siap.png">

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





<h2 class="">Iniciar sesión</h2>
        </br>
        <p class="usuario">Nombre de usuario:
        </br>
        </br>
        <input type="text" name="Usuario"></p>
        <p class="usuario">Password: 
        </br>
        </br>
        <input type="password" name="Clave"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
</form>

    
</body>
</html>