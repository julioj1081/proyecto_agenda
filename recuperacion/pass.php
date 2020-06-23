<?php 
    $correo = $_POST['email'];
    echo "este es tu correo".$correo;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PhpMailer/Exception.php';
    require 'PhpMailer/PHPMailer.php';
    require 'PhpMailer/SMTP.php';

    /* BUSCAR DATOS DEL USUARIO*/
    $conexion = mysqli_connect("localhost","root","","agenda");
    $resultado= mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '$correo'");
    if (mysqli_num_rows($resultado)>0){
    //Si encuentra el correo has esto
    $conexion = new mysqli("localhost","root","","agenda");
    $query = "SELECT * FROM usuarios WHERE email = '$correo'";
    $datos = $conexion->query($query);
    while($reg = mysqli_fetch_array($datos)){
      $nombre = $reg[1];
      $apellidos = $reg[2];
      $correo = $reg[3];
      $Contrasena = $reg[4];
    }

    /***********************************/
    /* ENVIO DE CONTRASEÑA*/
    // Instantiation and passing `true` enables exceptions

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.live.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'julioj1081@hotmail.com';      // SMTP username acceso para entra a la cuenta
        $mail->Password   = 'QETUOwryip1081';                // SMTP password acceso para entra a la cuenta
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('julioj1081@hotmail.com', 'Mailer Agenda electronica'); //Desde donde se va a enviar
        $mail->addAddress($correo);     // Aquien se le va a enviar


        // Content
        $mail->isHTML(true);                                  // Contenido del mail
        $mail->Subject = 'Restablecimiento de password !!';
          $mail->Body  = 'Hola '.$nombre.' '.$apellidos.'<br><br><br>'
          .'Este es tu password'
            .'<strong><a> '.$Contrasena.' </a></strong>';
        $mail->send();
        echo '
        <script language="javascript">
        alert("Verifique su correo");
        window.location.href="https://outlook.live.com/";
        </script>';
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}else{
  echo '
  <script language="javascript">
  alert("Error al enviar el correo intenta nuevamente");
  window.location.href="http://localhost/proyecto_gil";
  </script>';
}

?>