<?php
session_start();
$email = $_REQUEST['email'];
$pass = $_REQUEST['pwd'];
$_SESSION['usuario'] = $email;


    include_once ('../backend/base.php');

    $conexion = new mysqli("192.168.1.60","root","","agenda");
    $conexion2 = new mysqli("192.168.1.60","root","","agenda");
    $resultado1 = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE email='$email' AND contra='$pass' AND nivel='nivel1'");
    $resultado2 = mysqli_query($conexion2, "SELECT nombre FROM usuarios WHERE email='$email' AND contra='$pass' AND nivel='nivel2' ");

    if(mysqli_num_rows($resultado1)>0){
        //AQUI VAN LOS DE NIVEL 1 MODO ADMIN
        header("location: ../dashboard_admin.php");
    }
    //SI ENCUENTRA EL NIVEL 2 AL MODO USUARIOS
    else if(mysqli_num_rows($resultado2)>0){
        header("location: ../dashboard_second.php");
    } else {
        echo '
        <script language="javascript">
        alert("No existe el usuario");
        window.location.href="../index.html";
        </script>';
      }
    
?>
