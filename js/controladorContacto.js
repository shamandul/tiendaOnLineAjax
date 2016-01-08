/*
* Autor: Jesús de Serdio
* © Diciembre 2015
*/
/* Funcion que comprueba los datos del formulario*/

 
/*Funcion de inicio*/
function inicio()
{
	$(".button-collapse").sideNav(); 
	$('textarea#mensaje').characterCounter();
	$("#enviar").click(function(evt){

		evt.preventDefault();
		 url = "../controlador/controlFormContacto.php";
		 datos = $("#formContacto").serialize();
		$.ajax({
		 	type: "POST",
		 	url: '../controlador/controlFormContacto.php',
		 	data: datos,
		 	success: function(respuesta)
		 	{
		 		$('#modal1').openModal({
    				dismissible: true, // Modal can be dismissed by clicking outside of the modal
     				opacity: .5, // Opacity of modal background
    				in_duration: 300, // Transition in duration
     				out_duration: 200, // Transition out duration
     				complete: function() { limpiar(); } // Callback for Modal close
				});
		 	},
		 	error : function() {
        		
    		}
    	});
	});
}
/* Limpiar todos los campos del formulario */
function limpiar()
{
	
	$('#formContacto input').val("");
	$('#formContacto textarea').val("");
}

$(document).ready(function ()
{
  inicio();
});