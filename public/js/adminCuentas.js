$(document).on('ready', funcPrincipal());//cuando la pagina este lista enviamos a una función principal
// $(document).ready(function() {
function funcPrincipal(){ //función principal

    $('#botonCrearCta').on('click', function(){//si pulsa sobre boton
      $('#botonCrearCtaDetalle').attr('disabled', 'true');//desabilita un boton con jQuery
      $('.ctaPadre').css('display', 'inline');
    });

    $('#botonCrearCtaDetalle').on('click', function(){//si pasa el ratón sobre cuenta

         $('#botonCrearCta').attr('disabled', 'true');
         $('.divSelectCtas').css('display', 'inline');
          $('.nivel1').css('display', 'inline');
       cargarSelect2();
     });

/*******CREAR CTA PADRE*********/
$('#guardar').on('click', function(){//si pulsa sobre boton
   nombreCtaPadre = $('#nombreCtaPadre').val();
    descCtaPadre = $('#descCtaPadre').val();

     $.post(baseUrl+'cuentas/insertarCtasPadre',
     {   'nombreCtaPadre': nombreCtaPadre,
         'descCtaPadre': descCtaPadre
      },

      function() {

         });
    });

/********** / CREAR CTA PADRE*******/

}

function cargarSelect2(){
var url1=baseUrl+'cuentas/getCtaNivel2';
        $('.divSelectCtas').css('display', 'inline');
        $('#selCtaPadre').change(function() {
         $("#selCtaPadre option:selected").each(function() {
           $('.nivel2').css('display', 'inline');
         id = $('#selCtaPadre').val();
        //alert(id)
        $('.divCtaHijo').css('display', 'inline');
         $.post(url1, {'id': id }, function(data) {
         $("#selectCtaNivel2").html(data);
         });
        });
     })
   cargarSelect3();
}

function cargarSelect3(){
  var url2=baseUrl+'cuentas/getCtaNivel3';
  $('#selectCtaNivel2').change(function() {//detecto q se ha pulsado select2
         $("#selectCtaNivel2 option:selected").each(function() {
           $('.nivel3').css('display', 'inline');//activo div3
                 id2 = $('#selectCtaNivel2').val();
                 //alert(id2)
                $.post(url2, {'id2': id2 }, function(data) {
         $("#selectCtaNivel3").html(data);
         });
      });
  });
  cargarSelect4();
}

function cargarSelect4(){
  var url3=baseUrl+'cuentas/getCtaNivel4';
  $('#selectCtaNivel3').change(function() {//detecto q se ha pulsado select2
         $("#selectCtaNivel3 option:selected").each(function() {
           $('.nivel4').css('display', 'inline');//activo div3
                 id3 = $('#selectCtaNivel3').val();

                $.post(url3, {'id3': id3 }, function(data) {
         $("#selectCtaNivel4").html(data);
         });
      });
  });
}

/*-------------------------------------------------*/
/*--------------------------
$('.sel').on('mouseenter', function(){//si pasa el ratón sobre cuenta
   idSelect = $(this).attr('id');//extraemos el id de la clase cuenta
$('#'+idSelect).on('click', function(){//si pulsó en el id_cuenta
----------------------------*/


/*------COMENTARIO -13-12-17--------
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
--------------*/
