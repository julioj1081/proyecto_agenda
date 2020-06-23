<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>AVANCES DE 	PROYECTOS </h1>
<?php
require_once "Data.php";

$d= new Data();
$lista =$d->getUsuarios();
echo "<hr>";
foreach ($lista as $u) {
	echo "<div class='container'>";
	echo "<p class='titulo'>".$u->getNombre()."</p>";
	echo $u->getId();
		echo "</div>";
}
?>
</body>
</html>
