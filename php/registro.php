<?php
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellidos'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $nivel = $_REQUEST['nivel'];
    $seccion = $_REQUEST['seccion'];
    /*
     echo'<p>'.$nombre.'</p>';
    echo'<p>'.$apellido.'</p>';
    echo'<p>'.$email.'</p>';
    echo'<p>'.$pass.'</p>';
    echo'<p>'.$nivel.'</p>';
    echo'<p>'.$seccion.'</p>';
     */
    include_once '../backend/base.php';
    if(($_POST['nombre'] = "") ||
      ($_POST['apellidos'] = "") ||
      ($_POST['email'] = "") ||
      ($_POST['pass'] = "") ||
      ($_POST['nivel'] ="") ||
      ($_POST['seccion'] = "")){
        echo '
         <script language="javascript">
            alert("Error: llene todos los campos para poder registrarse");
            window.history.back();
        </script>';
      }else{
          /*$conexion = new mysqli("192.168.1.60/proyecto_gil", "root" ,"", "agenda");
          */
          //if not exists ("SELECT * FROM usuarios WHERE email='$email'") 
          //IF NOT EXISTS (SELECT usuarios FROM LaTabla WHERE Nombre=@Nombre AND curso=@Curso) INSERT LaTabla(Nombre, Curso, Termino) VALUES (@Nombre, @Curso, @Termino)";
          $sql = "INSERT INTO usuarios(nombre,apellidos,email,contra,seccion,nivel)
          VALUES('$nombre','$apellido','$email','$pass','$seccion','$nivel')";
          $result = $conexion->query($sql);

          //SI TENEMOS EXITO EN EL REGISTRO
          if($result){
            echo '<script language="javascript">
            alert("Registro exitoso");
           window.location.href="../index.html";
           </script>';
          }else{
            echo '
            <script language="javascript">
              alert("Error: Al registrar al usuario");
            window.location.href="../registro.html";
            </script>';
          }
      }

?>
