
$(document).on('ready', funcPrincipal());//cuando la pagina este lista enviamos a una función principal
var id_cuenta="";

function funcPrincipal(){ //función principal
$('.cuenta').on('mouseenter', function(){//si pasa el ratón sobre cuenta
   id_cuenta = $(this).attr('id');//extraemos el id de la clase cuenta

$('#'+id_cuenta).on('click', function(){//si pulsó en el id_cuenta
  

});

 });


  var url1=baseUrl+'cuentas/get_cuentasHijas';//llamada al metodo get_codProductos del controlador productos
    $.ajax({
            url: url1,
            type: 'post',
            data: {'id_cuenta':id_cuenta},//enviamos el "id_categoria"
            success: function(data){
            console.log(data);//muestra en consola la respuesta del server
            //alert(data);//muestra en un alert la respuesta del server
           var registros = eval(data);
           html ="<h5 align='center'><strong>SUBCUENTAS</strong></h5> <hr/> <table class='table table-condensed'> <thead>";
           html += " <tr class='info'>   <th>Codigo</th> <th>Nombre</th> </tr> ";
           html += "</thead><tbody>";
           //$("#tituloTabla").html("Listado de Categorías");

           for(var i=0; i< registros.length; i++){
  html +="<tr> <td>"+registros[i]["codigo"]+"</td> <td>"+registros[i]["nombre"]+"</td> </tr>";
           };//fin del for
           html +="</tbody> </table>";
           $("#tablaCodigos").html(html);//del parentesis es el html que creamos como variable
           $("#tituloTabla").text("Categorias");
           $("#id_oculto").val(id_categoria); //enviamos el id al campo oculto que esté en la vista
          // alert(id_categoria);
            }                //.html, es un metodo de js
        }); //fin  envio con Ajax y carga de tabla.
        

  }//fin de la funcion cuando se carga el select
