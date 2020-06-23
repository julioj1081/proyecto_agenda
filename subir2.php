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
                $destinatario = $_POST['destinatario'];
                $descripcion = $_POST['descripcion'];
                $proyecto =$_POST['proyecto'];
               
               $sql = "INSERT INTO archivosproyectos(
               email,
               titulo,
               destinatario,
               descripcion,
               ruta,
               tipo,
               size)
                VALUES('$email','$titulo',
                '$destinatario','$descripcion','$nombre_final','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')";
                $result = $conexion->query($sql);

                $resultado2 = mysqli_query($conexion, "SELECT cantidadtrabajos,Entregados FROM sistema WHERE nombreProyecto = '$proyecto' ");
                        while($row = mysqli_fetch_array($resultado2)){
                            $cantidadtrabajos = $row[0];
                            $Entregados = $row[1];
                        }
                        echo $cantidadtrabajos."   ".$Entregados;
                       $Cambio = (int)$Entregados+1;
                       $Avance = (int) ($Cambio * 100)/$cantidadtrabajos;
               $resultado4= mysqli_query($conexion,
                        	"UPDATE sistema
                        	set 
                        	Entregados='$Cambio',
                        	percentage='$Avance'
                        	WHERE nombreProyecto='$proyecto'

                        	"

                        );
                       
                  echo '
                <script language="javascript">
                alert("Registro exitoso");
                window.history.back();
                </script>';
                
  
            }
        }
    }
?>