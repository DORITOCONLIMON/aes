<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="css/estilo2.css">

</head>
<body>
  <nav>
    <ul class="menu">
        <li><a>A E S</a></li>
    </u>
    <ul class="menu2">
        <li><a href="../PORTADA/Site3">INICIO</a></li>
        <li class="dropdown">
            <a href="#">INCIAR SESION </a>
            <ul class="submenu">
                <li><a href="../LOGIN/PASTORAL.php">PASTORAL</a></li>
                <li><a href="../LOGIN/CLUB.php">CLUB</a></li>
                <li><a href="../LOGIN/ESTUDIANTE.php">ESTUDIANTE</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">REGISTRARSE</a>
            <ul class="submenu">
                <li><a href="../REGISTRO/DOCENTE.php">DOCENTE</a></li>
                <li><a href="../REGISTRO/ESTUDIANTE.php">ESTUDIANTE</a></li>
            </ul>
        </li>
   
    </ul>
</nav>
<div class="container-form">
<center>
<form class="form-signin" action="" autocomplete="off" method="post" name="form">
          <?php
                include("../CONEXIONES/conexionestudiante.php");
                include("../CONEXIONES/controladorestudiante.php");
                ?>
                 <b><label for="" style="text-align: center;width: auto; font-family: 'Open Sans', sans-serif; color: rgba(255, 255, 255, 0.918); margin-top: 10px;  border-bottom: 3px solid #1059FF">PROYECTO INSPECTORIAL   AES/MJS</label></b>    
          <label for="usuario">Nombre</label>
          <input class="form-styling" type="text" name="usuario" placeholder=""/>
          <label for="contraseña">Contraseña</label>
          <input class="form-styling" type="password" name="contraseña" placeholder=""/>
          <div class="btn-animate">
          <input name="btn-signin" class="btn" type="submit" value="INICIAR SESION">
          </div>
          <br><br>
         
				  </form>

</center>
				 
</div>

<footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo">Something</h1>
          
      <h2>Contact</h2>
      
      <address>
        5534 Somewhere In. The World 22193-10212<br>
            
        <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
      </address>
    </div>
    
    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Media</h2>
  
        <ul class="nav__ul">
          <li>
            <a href="#">Online</a>
          </li>
  
          <li>
            <a href="#">Print</a>
          </li>
              
          <li>
            <a href="#">Alternative Ads</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Technology</h2>
        
        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#">Hardware Design</a>
          </li>
          
          <li>
            <a href="#">Software Design</a>
          </li>
          
          <li>
            <a href="#">Digital Signage</a>
          </li>
          
          <li>
            <a href="#">Automation</a>
          </li>
          
          <li>
            <a href="#">Artificial Intelligence</a>
          </li>
          
          <li>
            <a href="#">IoT</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>
        
        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          
          <li>
            <a href="#">Terms of Use</a>
          </li>
          
          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>
    
    <div class="legal">
      <p>&copy; 2019 Something. All rights reserved.</p>
      
      <div class="legal__links">
        <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
      </div>
    </div>
  </footer>
</body>
</html>
