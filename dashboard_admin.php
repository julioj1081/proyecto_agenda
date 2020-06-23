<?php
      session_start();
      $email = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilo_dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Dashboard admin</title>
</head>
<body>
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu">
    <i class="far fa-calendar" id="btn"></i>
    <i class="far fa-times-circle" id="cancel"></i>
    </label>
    <div class="siderbar">
        <header id="logo">Agenda virtual</header>
        <ul>
            <li><a href="./avance/nuevo.php"><i class="far fa-chart-bar"></i>Proyecto nuevo</a></li>
            <li><a href="./avance/index.php"><i class="far fa-chart-bar"></i>Avances</a></li>
            <li><a href="./php/modifica_perfil.php"><i class="fas fa-user"></i>Configuracion</a></li>
            <li><a href="./verdocumentos.php"><i class="fas fa-file-signature"></i>Documentos en site</a></li>
--><li><a href="./Calendario/index.php"><i class="fas fa-calendar-week"></i>Calendario</a></li>
            <li><a href="./index.html"><i class="fas fa-toggle-on"></i>Cerrar sesión</a></li>
        </ul>
    </div>
    <section>
        <?php
        include_once ('./backend/base.php');
        /*$conexion = new mysqli("localhost","root","","agenda");
        */
        $result = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");
        while($reg = mysqli_fetch_array($result)){
            $id = $reg[0];
            $nombre = $reg[1];
            $apellidos = $reg[2];
            $seccion = $reg[5];
            $contraseña = $reg[4];
        }
        $_SESSION['ID'] = $id;
        $_SESSION['seccion'] = $seccion;
        ?>
        <div class="contenido">
        <ul>
            <li><a href="#" class="seccion"><?php echo$seccion;?></a></li>
        </ul>
        <ul>
        <li><a href="./dashboard_admin.php"><?php
                print" ".$nombre." ".$apellidos;
            ?></a></li>
        </ul>
        </div>
    </section>
    <!--CIRCULOS-->
    <div class="contenedor">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="auto" height="100vh" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">

        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="174.7899" y1="186.34" x2="330.1259" y2="186.34" gradientTransform="matrix(0.8538 0.5206 -0.5206 0.8538 147.9521 -79.1468)">
        <stop  offset="0" style="stop-color:#FFC035"/>
        <stop  offset="0.221" style="stop-color:#F9A639"/>
        <stop  offset="1" style="stop-color:#E64F48"/>
      </linearGradient>
      <circle fill="url(#SVGID_1_)" cx="266.498" cy="211.378" r="77.668"/>

      <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="600.551" y1="0.25.9592" x2="385.449" y2="982.9592">
        <stop  offset="0" style="stop-color:#FFA33A"/>
        <stop  offset="0.0992" style="stop-color:#E4A544"/>
        <stop  offset="0.9624" style="stop-color:#00B59C"/>
      </linearGradient>
      <circle fill="url(#SVGID_2_)" cx="088" cy="282.959" r="57.449"/>

      <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="180.3469" y1="362.2723" x2="249.7487" y2="362.2723">
        <stop  offset="0" style="stop-color:#12B3D6"/>
        <stop  offset="1" style="stop-color:#7853A8"/>
      </linearGradient>
      <circle fill="url(#SVGID_3_)" cx="215.048" cy="362.272" r="34.701"/>

      <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="367.3469" y1="375.3673" x2="596.9388" y2="375.3673">
        <stop  offset="0" style="stop-color:#12B3D6"/>
        <stop  offset="1" style="stop-color:#7853A8"/>
      </linearGradient>
      <circle fill="url(#SVGID_4_)" cx="482.143" cy="375.367" r="114.796"/>

      <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="365.4405" y1="172.8044" x2="492.4478" y2="172.8044" gradientTransform="matrix(0.8954 0.4453 -0.4453 0.8954 127.9825 -160.7537)">
        <stop  offset="0" style="stop-color:#FFA33A"/>
        <stop  offset="1" style="stop-color:#DF3D8E"/>
      </linearGradient>
      <circle fill="url(#SVGID_5_)" cx="435.095" cy="184.986" r="63.504"/>


      <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="325.4405" y1="472.8044" x2="192.4478" y2="412.8044" gradientTransform="matrix(0.8954 0.4453 -0.4453 0.8954 127.9825 -160.7537)">
        <stop  offset="0" style="stop-color:#FFA33A"/>
        <stop  offset="1" style="stop-color:#DF3D8E"/>
      </linearGradient>
      <circle fill="url(#SVGID_6_)" cx="635.095" cy="74.986" r="63.504"/>

      <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="365.4405" y1="172.8044" x2="492.4478" y2="272.8044" gradientTransform="matrix(0.8954 0.4453 -0.4453 0.8954 127.9825 -160.7537)">
        <stop  offset="0" style="stop-color:#FFA33A"/>
        <stop  offset="1" style="stop-color:#DF3D8E"/>
      </linearGradient>
      <circle fill="url(#SVGID_7_)" cx="735.095" cy="184.986" r="63.504"/>

      <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="290.551" y1="182.9592" x2="485.449" y2="282.9592">
        <stop  offset="0" style="stop-color:#FFA33A"/>
        <stop  offset="0.0992" style="stop-color:#E4A544"/>
        <stop  offset="0.9624" style="stop-color:#00B59C"/>
      </linearGradient>
      <circle fill="url(#SVGID_9_)" cx="188" cy="482.959" r="47.449"/>

      <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="100.3469" y1="462.2723" x2="249.7487" y2="362.2723">
        <stop  offset="0" style="stop-color:rgb(14, 186, 224)"/>
        <stop  offset="1" style="stop-color:#7853A8"/>
      </linearGradient>
      <circle fill="url(#SVGID_10_)" cx="015.048" cy="062.272" r="94.701"/>

      <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="290.551" y1="182.9592" x2="485.449" y2="282.9592">
        <stop  offset="0" style="stop-color:#FFA33A"/>
        <stop  offset="0.0992" style="stop-color:#E4A544"/>
        <stop  offset="0.9624" style="stop-color:#00B59C"/>
      </linearGradient>
      <circle fill="url(#SVGID_11_)" cx="288" cy="482.959" r="77.449"/>
</svg>
<h1 class="tareas_pendientes">Tareas pendientes</h1>
<br>
        <!--AQUI VA LAS TAREAS QUE TE AN LLEGADO-->
    <div class="area-tareas">
      <?php
       $result2 = mysqli_query($conexion, "SELECT * FROM archivosproyectos WHERE destinatario='$email'");
      while($reg2 = mysqli_fetch_array($result2)){
          $titulo = $reg2[1];
          $destinatario = $reg2[0];
          $descripcion = $reg2[3];
          $ruta = $reg2[4];
          $size = $reg2[6];
          $ID = $reg2[7];

      if (isset($titulo)||isset($destinatario)||isset($descripcion)||isset($size)||isset($ruta)) {
        echo "<div class='tareas'>";
        echo "<div class='caja'>";
        echo "<h2 class='titulo'>Titulo: ".$titulo."</h2>";
        echo "<p class='destinatario'>De: ".$destinatario."</p>";
        echo "<p class='descripcion'>Descripcion: ".$descripcion."</p>";
        echo "<p class='tamaño'>Tam ->".$size."</p>";
        ?>
        <a href='./archivos/<?php echo $ruta; ?>' target="_black"><i class="fas fa-download">Descargar</i> <?php echo $ruta; ?></a>
        <span> - </span><a href="./php/borranota2.php?idnota='<?php echo $ID;?>'"><i class="far fa-trash-alt"></i> Eliminar nota</a>
        <?php echo "</div>";
      }else{
       ?><h1>No cuenta con notas</h1><?php
      }
    }
       ?>

       </div>
    </div>
    </div>
</body>
</html>
