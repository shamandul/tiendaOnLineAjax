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
        $("a.carrito").click(function(evt){

		evt.preventDefault();
		Materialize.toast('Un articulo agregado', 3000, 'rounded');
                numArticulo=1;
		aux = $.cookie("listaArticulos");
		if(typeof aux != "undefined")
		{       
                        asin = $(this).attr('asin');
			lista = JSON.parse($.cookie("listaArticulos"));
                        isAdd = false;
                        //valor = {'articulos':[{'articulo':{'asin': asin, 'numArticulo': numArticulo}}]}; 
                        
                        for(i=0;i<lista.length;i++)
                        {
                            
                            if(lista.articulo[i].asin == $(this).attr('asin')){
                                numArticulo=lista.articulo[i].numArticulo + 1;
                              valor = {'articulos':[{'articulo':{'asin': lista.articulo[i].asin, 
                                              'numArticulo': numArticulo}}]};  
                              isAdd= true;
                              //nuevaLista ={'articulos':[{'articulo':{'asin': asin, 'numArticulo': numArticulo}}]};
                            }
//                            else
//                            {
                               // valor = {'articulos':[{'articulo':{'asin': $(this).attr('asin'), 
                        //                      'numArticulo': numArticulo}}]}; 
                                //numArticulo=lista.articulo[i].numArticulo + 1;
//                                for(j=0;j<lista.length;j++){
//                                    
//                               
//                                if(lista.articulo[j].asin == $(this).attr('asin'))
//                                valor = {'articulos':[{'articulo':{'asin': lista.articulo[i].asin, 
//                                                'numArticulo': lista.articulo[i].numArticulo}}]};
//                                }
                            //}
                        }
                        if(!isAdd){
                            valor = {'articulos':[{'articulo':{'asin': $(this).attr('asin'), 
                                              'numArticulo': numArticulo}}]}; 
                        }
                        
			$.cookie("listaArticulos" , JSON.stringify(valor),{path:'/'});
			

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