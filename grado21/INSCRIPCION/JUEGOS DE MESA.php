<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/ESTILO.CSS">
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a>A E S</a></li>
        </u>
        <ul class="menu2">
        <li><a href="../PROYECTOS/index.php">ATRAS</a></li>
            <li ><a href="../PORTADA/PORTA.php">CERRAR SESION </a> </li>
            </li>
       
        </ul>
    </nav>
    <div class="container-form">

        <center> 
          
        <form class="form-signin" action="../CONEXIONES2/cnjuegosdemesa.php" autocomplete="off" method="post" name="form">
                       
                       <b><label for="" style="text-align: center;width: auto; font-family: 'Open Sans', sans-serif; color: rgba(255, 255, 255, 0.918); margin-top: 10px;  border-bottom: 3px solid #1059FF">PROYECTO   AES/MJS</label></b>    
                     <label for="nomb_apel">Nombre y Apellido</label>
                     <input  type="text" name="nomb_apel" />
                     <label for="curso">Curso</label>
                     <input  type="text" name="curso" />
                     <label for="tutor">Tutor/a</label>
                     <input  type="text" name="tutor" />
     
                     
                     <br><br>
                     <input name="btn-signin" class="btn" type="submit" value="INICIAR SESION">
                 
                 
                    
                   </form>
        </center>
        
        
                    </div>
</body>
</html>