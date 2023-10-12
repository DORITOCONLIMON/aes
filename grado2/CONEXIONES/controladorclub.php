<?php

if (!empty($_POST["btn-signin"])) {
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query(" select * from clubes where usuario='$usuario' and contraseña='$contraseña' ");
        if ($datos=$sql->fetch_object()) {
            $rol = $datos->rol;
            if ($rol == "periodismo") {
                header("location: ../CONTROL/controlperiodismo.php");
            } else if ($rol == "misioneros") {
                header("location: ../CONTROL/controlmisioneros.php");
            } else if ($rol == "prevoluntarios") {
                header("location: ../CONTROL/controlprevoluntarios.php");
            } else if ($rol == "grupovacacional") {
                header("location: ../CONTROL/controlgrupovacacional.php");
            } else if ($rol == "manualidades") {
                header("location: ../CONTROL/controlmanualidades.php");
            } else if ($rol == "marimba") {
                header("location: ../CONTROL/controlmarimba.php");
            } else if ($rol == "coromusic") {
                header("location: ../CONTROL/controlcoromusic.php");
            } else if ($rol == "ciencias") {
                header("location: ../CONTROL/controlciencias.php");
            } else if ($rol == "ecologia") {
                header("location: ../CONTROL/controlecologia.php");
            } else if ($rol == "tratamientofc") {
                header("location: ../CONTROL/controltratamientofc.php");
            } else if ($rol == "dibujo") {
                header("location: ../CONTROL/controldibujo.php");
            } else if ($rol == "robotica") {
                header("location: ../CONTROL/controlrobotica.php");
            } else if ($rol == "bisuteria") {
                header("location: ../CONTROL/controlbisuteria.php");
            } else if ($rol == "ingles") {
                header("location: ../CONTROL/controlingles.php");
            } else if ($rol == "futbolmasc1") {
                header("location: ../CONTROL/controlfutbolmasc1.php");
            } else if ($rol == "futbolmasc2") {
                header("location: ../CONTROL/controlfutbolmasc2.php");
            } else if ($rol == "futbol_voleiF") {
                header("location: ../CONTROL/controlfutbolvoleiF.php");
            } else if ($rol == "voleiMyF") {
                header("location: ../CONTROL/controlvoleiFyM.php");
            } else if ($rol == "futbolfem") {
                header("location: ../CONTROL/controlfutbolfem.php");
            } else if ($rol == "danzamoderna") {
                header("location: ../CONTROL/controldanzamoderna.php");
            } else if ($rol == "juegosdemesa") {
                header("location: ../CONTROL/controljuegosdemesa.php");
            } else if ($rol == "matematicas") {
                header("location: ../CONTROL/controlmatematicas.php");
            } else if ($rol == "instrumentosmusic") {
                header("location: ../CONTROL/controlinstrumentosmusic.php");
            } else if ($rol == "circ") {
                header("location: ../CONTROL/controlcirc.php");
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>