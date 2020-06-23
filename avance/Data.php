<?php
require_once "Usuario.php";

class Data{


function getUsuarios(){
	
	$lista = array();
			$conn =  mysqli_connect("192.168.1.60", "root", "", "agenda");
		$result =mysqli_query($conn,"SELECT * FROM sistema");

while($row=mysqli_fetch_assoc($result)){

	$u = new Usuario(
		$row['idbarra'],
		$row['nombreProyecto'],
		$row['percentage']
	);
	array_push($lista, $u);

}
return $lista;
}

}

?>