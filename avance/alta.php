<?php
    $conn =  mysqli_connect("localhost", "root", "", "agenda");
    $nombre = $_POST['titulo'];
    $cant = $_POST['cantidad'];
        $sql = "INSERT INTO sistema (
        nombreProyecto,
        percentage,
        cantidadtrabajos,
        Entregados
    ) VALUES (
    '$nombre',
    '0',
    '$cant',
    '0'
)";
        $result = $conn->query($sql);
        if($result>0){
            header("location: ../dashboard_admin.php");
        }
        
        //echo"texTT".$nombre;
?>