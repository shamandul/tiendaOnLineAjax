/*
* Autor: Jesús de Serdio
* © Diciembre 2015
*/

/*Funcion de inicio*/
function inicio()
{
	$(".button-collapse").sideNav(); 
	$("a.producto").click(function(evt){

		evt.preventDefault();
		 url = '../controlador/descriptionCard.php';
		 datos = {'asin' : $(this).attr('id')};
		$.ajax({
		 	type: "POST",
		 	url: '../controlador/descriptionCard.php',
		 	data: datos,
		 	success: function(respuesta)
		 	{
		 		$('#modal1').html(respuesta);
		 		$('#modal1').openModal({
    				dismissible: true, // Modal can be dismissed by clicking outside of the modal
     				opacity: .5, // Opacity of modal background
    				in_duration: 300, // Transition in duration
     				out_duration: 200 // Transition out duration
     				
				});
		 	},
		 	error : function() {
        		
    		}
    	});
	});
        $("a.carrito").click(function(evt)
        {

		evt.preventDefault();
		Materialize.toast('Un articulo agregado', 3000, 'rounded');
                numArticulo=1;
		aux = $.cookie("listaArticulos");
		if(typeof aux != "undefined")
		{       
                        asin = $(this).attr('asin');
			lista = JSON.parse($.cookie("listaArticulos"));
                        isAdd = false; 
                        
                        for(i=0;i<lista["articulos"].length;i++)
                        {
                           
                            if(lista["articulos"][i].articulo.asin == $(this).attr('asin')){
                                numArticulo=lista["articulos"][i].articulo.numArticulo + 1;
                                lista["articulos"][i].articulo.numArticulo = numArticulo;
                                isAdd= true;
                            }

                        }
                        if(!isAdd)
                        {
                            lista["articulos"].push({'articulo':{'asin': asin, 'numArticulo': numArticulo}});
                        }
                        
			$.cookie("listaArticulos" , JSON.stringify(lista),{path:'/'});
			

		}
		else
		{
                        asin = $(this).attr('asin');
			valor = {'articulos':[{'articulo':{'asin': asin, 'numArticulo': numArticulo}}]};
			$.cookie("listaArticulos" , JSON.stringify(valor),{path:'/'});
                        
		}

	});
}


$(document).ready(function ()
{
  inicio();
});