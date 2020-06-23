<?php
session_start();
$email = $_SESSION['usuario'];

include_once ('../backend/base.php');
/*$conexion = new mysqli("192.168.1.60","root","","agenda");
*/$result = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");
while($reg = mysqli_fetch_array($result)){
    $nombre = $reg[1];
    $apellidos = $reg[2];
    $seccion = $reg[5];
    $contraseña = $reg[4];
}
$_SESSION['seccion'] = $seccion;
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../css/styles2.css">
     <title>Configuracion</title>
   </head>
   <body>
     <!--CIRCULOS-->
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

   <div class="container">
       <h2>Modifica tu perfil</h2>
       <form action="./modifica_contraseña.php" method="POST">
           <input type="text" class="nombre" name="nombre" value="<?php echo $nombre;?>" placeholder="Nombre" required>
           <br>
           <input type="text" class="apellidos" name="app" value="<?php echo $apellidos; ?>" placeholder="Apellidos" required>
           <br>
           <input type="email" class="email" name="email" value="<?php echo $email ?>" placeholder="Email" required>
           <br>
           <input type="text" class="pass" name="contra" value="<?php echo $contraseña; ?>" placeholder="Password" required>
           <br>
           <button type="submit" class="btn btn-primary btn-block text-center registro" id="register">
               <span>Guardar cambios</span>
           </button>
       </form>
   </div>

   </body>
 </html>
