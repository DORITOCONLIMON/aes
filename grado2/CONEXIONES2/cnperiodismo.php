<?php
$conexion = mysqli_connect("localhost","root","","aes");
if ($_POST) {
$nomb_apel= $_POST['nomb_apel'];
$curso= $_POST['curso'];
$tutor= $_POST['tutor'];


$consulta = "INSERT INTO `periodismo`(`nomb_apel`, `curso`, `tutor`) 
VALUES ('$nomb_apel','$curso','$tutor')";

$resultado = mysqli_query($conexion,$consulta);

if ($resultado) {
    echo "Almacenamiento Satisfactorio";
}else {
    echo "No se ingresaron los datos";
}
mysqli_close ($conexion);
}
?>