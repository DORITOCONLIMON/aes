<?php
include('../CONEXIONES2/cnfutbolvoleiF.php');
$sql="select * from futbol_voleif";
$datos=mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<header>
        <nav>
          <ul class="menu">
              <li><a>A E S</a></li>
          </u>
          <ul class="menu2">
              <li><a href="../PORTADA/Site3">CERRAR SESION</a></li>
           
         
          </ul>
      </nav>
      </header>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th colspan="27">Control de Estudiantes</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="3"><b>Tutor</b></td>
                <td rowspan="3"><b>Numero</b></td>
                <td rowspan="3"><b>Estudiantes</b></td>
                <td rowspan="2" colspan="4"><b>Mes 1</b></td>
                <td rowspan="2" colspan="4"><b>Mes 2</b></td>
                <td rowspan="2" colspan="4"><b>Mes 3</b></td>
                <td rowspan="2" colspan="4"><b>Mes 4</b></td>
                <td rowspan="2" colspan="4"><b>Mes 5</b></td>
                <td rowspan="2" colspan="4"><b>Mes 6</b></td>
                <td rowspan="3"><b>Editar</b></td>
                <td rowspan="3"><b>Eliminar</b></td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                <td>V/</td>
                <td>cl</td>
                
            </tr>
            <?php
        while ($mostrar=mysqli_fetch_assoc($datos)) {
            # code...
        ?>
            
            <tr>
                <td><?php echo $mostrar['tutor']?></td>
                <td><?php echo $mostrar['id']?></td>
                <td><?php echo $mostrar['nomb_apel']?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
      }
      mysqli_close($conexion);
    ?>
        </tbody>
    </table>
    </center>
</body>
</html>
