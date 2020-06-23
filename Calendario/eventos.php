<?php
header('Content-Tyme: application/json');
$pdo = new PDO("mysql:dbname=agenda; host=192.168.1.60","root","");

$accion=(isset($_GET['accion']))?$_GET['accion']:'leer';



		$conn =  mysqli_connect("192.168.1.60", "root", "", "agenda");
switch ($accion) {
	case 'agregar':
		
		$sql ="INSERT INTO eventos (title,descripcion, color, textColor, start, end) 

		VALUES 
		('".$_POST['title']."', 
		'".$_POST['descripcion']."', 
		'".$_POST['color']."', 
		'".$_POST['textColor']."', 
		'".$_POST['start']."', 
		'".$_POST['end']."')";
		$res=mysqli_query($conn,$sql);

		echo json_encode($respuesta);

		break;
		case 'eliminar':
			$id = $_POST['id'];
		$sql="DELETE FROM eventos WHERE  id='$id'";

		$res=mysqli_query($conn,$sql);
		echo json_encode($respuesta);



		echo "Eliminar";
		break;
	case 'modificar':
	$title=$_POST['title'];
$descripcion =$_POST['descripcion'];
$color=$_POST['color'];
$textColor=$_POST['textColor'];
$start=$_POST['start'];
$end=$_POST['end'];
 $id= (int)$_POST['id'];

	$sql="UPDATE eventos
	SET 
	title='$title',
	descripcion = '$descripcion',
	color = '$color',
	textColor = '$textColor',
	start = '$start',
	end = '$end'
	WHERE id = $id ";
	mysqli_query($conn,$sql);

		echo json_encode($respuesta);



	break;



	default:
		$sql = $pdo->prepare("SELECT * FROM eventos");
$sql -> execute();

$res= $sql-> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
		
}




?>