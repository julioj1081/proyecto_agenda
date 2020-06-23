<?php
    session_start();
    $email = $_SESSION['usuario'];
    $session = $_SESSION['seccion'];
?>
<!--Este es en ajax-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sube una nota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--TINYMCE-->
    <script src="../tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
    </script>

  </head>
  <body>
    <div class="form-notas">
                    <h3>Agrega una nueva nota</h3>
                    <br>
                    <div class="principal">
                        <form action="../subir.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $email;?> " name="email">
                            <br>
                            <label for="">Titulo nota</label>
                            <input type="text" class="tarea" id="tarea" name="titulo">
                            <label for=""><span style="font-weight:bold;"> Enviar a </span></label>
                            <select name="destinatario" id="destinatario">
                                <?php
                                    $conexion2 = new mysqli("192.168.1.60","root","","agenda");
                                    $resultado = mysqli_query($conexion2, "SELECT * FROM usuarios WHERE seccion='$session'");
                                    while($row = mysqli_fetch_array($resultado)){
                                        $correo_usuario = $row[3];
                                        echo"<option value='".$correo_usuario."'>$correo_usuario</option>";
                                    }
                                ?>
                            </select>
                            <br>
                            <label for="">Descripcion de nota</label>
                            <textarea id="mytextarea" style="height:150px" name="descripcion"></textarea>
                            <br>
                            <label for="">Selecciona un archivo</label><input type="file" name="fichero">
                            <br>
                            <input type="submit" name="submit" value="subir archivo">
                        </form>
                    </div>
                </div>
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
