<?php
    session_start();
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['app'];
    $email = $_POST['email'];
    $contraseña = $_POST['contra'];
    $session = $_SESSION['seccion'];
    $ID =$_SESSION['ID'];
    include_once ('../backend/base.php');

    $res = "UPDATE usuarios SET `nombre`='$nombre', `apellidos`='$apellidos',
     `email`='$email', `contra`='$contraseña' WHERE  `seccion`='$session' AND `id`='$ID' ";
    $resultado = $conexion->query($res);
    if ($resultado) {
      #si lo hace regresa al index
      header("Location:../index.html");
      session_destroy();
    }else{
      echo "alert('Ocurrio un error');";
      session_destroy();
    }
    /*$conexion = new mysqli("localhost","root","","agenda");




    */

?>
<!--$nombre = $_GET['nombre'];
$apellidos = $_GET['app'];
$email = $_GET['email'];
$contraseña = $_GET['contra'];
$session = $_SESSION['seccion'];
include_once ('../backend/base.php');
/*$conexion = new mysqli("localhost","root","","agenda");
*/$res = "UPDATE usuarios SET `nombre`='$nombre' AND `apellidos`='$app' WHERE  `seccion`='$seccion'";
$resultado = $conexion->query($res);

if ($resultado) {
  #si lo hace regresa al index
  header("Location:../index.html");
}else{
  echo "alert('Ocurrio un error');";
}->
