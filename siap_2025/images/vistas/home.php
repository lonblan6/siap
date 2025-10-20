<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de menú desplegables</title>
    
    <script src="https://kit.fontawesome.com/38303f3084.js" crossorigin="anonymous"></script>

   <style>
.header{
  width: 100%;
  height: 100px;
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

.cierre{
    margin-top:150px;
}

.main{
  margin-left: 600px;
  margin-top:169px;
  
}

.centrar {
  margin-left: 65px;
  margin-top: 10px;
  position: absolute;
  z-index:2;
}
</style>

 </head>

 <body id="body">
    
  <header class="header">

    <div class="container">
     <nav class="menu">
       <a href="index.php">Inicio</a>
       <a href="#">Nosotros</a>
       <a href="#">Item</a>
       <a href="#">Contacto</a>
     </nav>
    </div>
       
  
  

  

<div class="cierre">
    <ul>
        <li>Home</li>
        <li class=""><a href="includes/logout.php">Cerrar sesión</a></li>
        
       
        
</ul>
</div>
</header>

<main class="main">
    <h1>Administración SIAP</h1><br>
</main>

<section>
    <h3>Bienvenido a la Administración <?php echo $user->getNombre();  ?>. Haga Clic <a href="menulateral/index.html"> aquí </a> para continuar</h3>
</section>
    
<script src="js/script.js"></script>
<img class="centrar" src="images/portada_siap.png">

 </body>

</html>







































































































































































































































