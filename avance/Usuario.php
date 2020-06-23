<?php
class Usuario{
public $id;
public $nombre;

public $porcentaje;

//Constructur
public function __construct($id,$nombre,$porcentaje){
	$this->id=$id;
	$this->nombre=$nombre;
	$this->porcentaje=$porcentaje;
}

public function getId(){
	echo '<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>barra de progreso circular Jquery</title>
  <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script>
    $(document).ready(function() {
      //$(".dial").knob();
      $(".dial").knob({
        "min":0,
        "max":100,
        "width":250,
        "height":250,
        "displayInput":true,
        "fgColor":"purple",
        "release":function(v) {$("p").text(v);},
        "readOnly":true
      });
    });
  </script>
  <style>
	h1{
		text-align:end;
	}
		.titulo{
			font-family: Roboto, sans-serif;
			font-size:40px;
			margin: 10px;
		}
		.container{
			text-align:center;
			margin: 0 auto;
			float:right;
			padding:1rem;
		}

  </style>
</head>
<body>
  <div class="container">
    <input type="text" value="'.$this->getPorcentaje().'" class="dial">
    <!-- <input type="text" value="55" class="dial" data-width="200" data-thickness=".32" data-fgColor="#008BE8" data-bgColor="#EEEEEE" data-cursor=false data-displayInput="true" data-readOnly=true > -->
  </div>

</body>
</html>';
/*
container
margin:0 auto;
text-align: center
h1
font-family: "raleway";
font-size:40px;
margin-bottom: 100px;
*/
}

public function getNombre(){
	return $this->nombre;
}

public function getPorcentaje(){
	return $this->porcentaje;
}

}
?>
