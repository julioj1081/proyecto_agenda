<?php 
    include_once ('./backend/base.php');
    if(isset($_POST['submit'])){
        if(is_uploaded_file($_FILES['fichero']['tmp_name'])){
            //ruta
            $ruta = "./archivos/";
            $nombre_final= trim ($_FILES['fichero']['name']);
            //$nombre_final= ereg_replace(" ", "", $nombre_final);
            $upload = $ruta . $nombre_final;

            //MOVEMOS EL ARCHIVO
            if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)){
                echo "<b>Se ha subido exitosamente</b>";
                //REFERENCIA
                //https://www.youtube.com/watch?v=qB3X0olSugo
                $email = $_REQUEST['email'];
                $titulo = $_POST['titulo'];
                $nombre = $_POST['destinatario'];
                $descripcion = $_POST['descripcion'];

                $sql = "INSERT INTO archivos(email,titulo,destinatario,descripcion,ruta,tipo,size)
                VALUES('$email','$titulo','$nombre','$descripcion','$nombre_final','".$_FILES['fichero']['type']."', '".$_FILES['fichero']['size']."')";
                $result = $conexion->query($sql);
                
                  echo '
                <script language="javascript">
                alert("Registro exitoso");
                window.history.back();
                </script>';
  
            }
        }
    }

?>
