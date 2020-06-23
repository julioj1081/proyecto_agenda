<?php
    $id = $_GET['idnota'];
    
   
        include_once ('../backend/base.php');
        $sql = "DELETE from archivos WHERE id=$id";
        $result = $conexion->query($sql);
        echo '
        <script language="javascript">
        alert("Nota borrada exitosamente");
        window.history.back();
        </script>'

?>