<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Calendario</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/moment.min.js"></script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" 
href="css/fullcalendar.min.css">
<script src="js/fullcalendar.min.js"></script>
<script src="js/es.js"></script>
<script src="js/bootstrap-clockpicker.js"></script>
<link rel="stylesheet" href="css/bootstrap-clockpicker.css">




  



</head>
<body>
<div class="container">
<div class="row">

<div class="col"></div>
<div class="col-7"><div id="CalendarioWeb"></div></div>
<div class="col"></div>


</div>
</div>


<script>
$(document).ready(function(){
	$('#CalendarioWeb').fullCalendar({
		header:{
			left:'today,prev,next,Miboton',
			center:'title',
			right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
		},
		customButtons:{
			Miboton:{
				text:"Botón 1",
				click:function(){
					alert("Accion")
				}
			}
		},
		dayClick:function(date,jsEvent,view){

			$('#btnAgrega').prop("disabled",false);
			$('#btnModifica').prop("disabled",true);
			$('#btnBorra').prop("disabled",true);
			limpiarFormulario();
			$('#txtFecha').val(date.format());
			$("#modalEventos").modal();
			
		},
		
			
		events:

		'http://localhost/proyecto_gil/Calendario/eventos.php',
	


		

		eventClick:function(calEvent,jsEvent,view){
			//h2

			$('#btnAgrega').prop("disabled",false);
			$('#btnModifica').prop("disabled",false);
			$('#btnBorra').prop("disabled",false);


			$("#tituloevento").html(calEvent.title);
			//mostrar eventos
			$("#textarea").val(calEvent.descripcion);
			$("#txtID").val(calEvent.id);
			$("#txtitulo").val(calEvent.title);
			$("#Color").val(calEvent.color);


			FechaHora = calEvent.start._i.split(" ");
			$("#txtFecha").val(FechaHora[0]);
			$("#txtHora").val(FechaHora[1]);


			$("#modalEventos").modal();


		},
		editable:true,
		eventDrop:function(calEvent){
			$("#txtID").val(calEvent.id);
			$("#txtitulo").val(calEvent.title);
			$("#Color").val(calEvent.color);
			$("#textarea").val(calEvent.descripcion);
			var FechaHora=calEvent.start.format().split("T");
			$("#txtFecha").val(FechaHora[0]);
			$("#txtHora").val(FechaHora[1]);
RecolectardatosGUI();
EnviarInformacion('modificar',NuevoEvento,true);

		}




	
		
	});

});


</script>

<!-- Modal(AGREGAR MODIFICAR ELIMINAR) -->
<!-- Modal -->
  <div class="modal fade" id="modalEventos" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h3 class="modal-title" id="tituloevento"></h3>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
       
        </div>
        <div class="modal-body">
     	<div id="descripcionEventos"></div>

     	<input type="hidden"  id="txtID" name="txtID">
     	<input type="hidden" id="txtFecha" name="txtFecha"><br/>

     	<div class = "form-row">
     		<div class="form-group col-md-8">
     			<label>Titulo:</label>
     			<input type="text" id="txtitulo" class="form-control" placeholder="Titulo del Evento"><br/>	
</div>
		<div class="form-group col-md-4">
     			<label>Hora de empezar el vento:</label>
     			<div class="input-group clockpicker" data-autoclose=true>
<input type="text" id="txtHora" value="10:30"class="form-control" >
     			</div>
     			
</div>
	<div class="form-group col-md-4">
			<label>Fecha de termino de entrega:</label>
<input type="date" id="txtFechatermino" step="1" min="2013-01-01" max="2050-12-31" value="2013-01-01">
     			<label>Hora de termino del evento:</label>
     			<div class="input-group clockpicker" data-autoclose=true>
<input type="text" id="txtHoraTermino" value="10:30"class="form-control" >
     			</div>
     			
</div>


     
     	
</div>

<div class="form-group">
     	<label>Descripción:</label>
     	<textarea   id="textarea" rows="3" class="form-control"></textarea>
</div>\
<div class="form-group">
	<label>Color:</label>
     	<input type="color" id="Color" class="form-control" style="height:36px"><br/>
     </div>


        </div>
        <?php
 

        ?>
        <div class="modal-footer">
        	<button type="button" id="btnAgrega" class="btn btn-success"> Agregar </button>
         	<button type="button" id ="btnModifica" class="btn btn-success"> Modificar </button>
         	<button type="button" id="btnBorra" class="btn btn-danger"> Borrar </button>
         	<button type="button" class="btn btn-default" data-dismiss="modal"> Cancelar </button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>
</body>
<script>
var  NuevoEvento;	
	$('#btnAgrega').click(function(){
RecolectardatosGUI();
EnviarInformacion('agregar',NuevoEvento);

	});

	$('#btnModifica').click(function(){
RecolectardatosGUI();
EnviarInformacion('modificar',NuevoEvento);

	});
	
	$('#btnBorra').click(function(){
RecolectardatosGUI();
EnviarInformacion('eliminar',NuevoEvento);

	});

	function RecolectardatosGUI(){
		NuevoEvento={
			id:$('#txtID').val(),
	title:$('#txtitulo').val(),
	start:$('#txtFecha').val()+" "+$('#txtHora').val(),
	color:$('#Color').val(),
	descripcion:$('#textarea').val(),
	textColor:"#FFFFFF",
	end:$('#txtFechatermino').val()+" "+$('#txtHoraTermino').val()

};

	}
	function EnviarInformacion(Accion,objEvento,modal){
		$.ajax({
			type: 'POST',
			url: 'eventos.php?accion='+Accion,
			data: objEvento,
			success:function(msg){
				if(msg){
					$('#CalendarioWeb').fullCalendar('refetchEvents');
					if(!modal){
						$("#modalEventos").modal('toggle');
					}

					
				}
			},
			error:function(){
				alert("HAY UN ERORR...");
			}
		});
	}
	$('.clockpicker').clockpicker();
	function limpiarFormulario(){
			$("#txtID").val('');
			$("#txtitulo").val('');
			$("#Color").val('');
			$("#textarea").val('');
	}
</script>




</html>

