<script>
                                 var marker;
                                 var coords={};

                                 //Funcion principal
                                 initMap = function () 
                                 {

 //usamos la API para geolocalizar el usuario
 navigator.geolocation.getCurrentPosition(
    function (position){
      coords =  {
        lng: position.coords.longitude,
        lat: position.coords.latitude
     };
         setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa
         

      },function(error){console.log(error);});
 
}



function setMapa (coords)
{   
   //Se crea una nueva instancia del objeto mapa
   var map = new google.maps.Map(document.getElementById('map'),
   {
     zoom:18,
     center:new google.maps.LatLng(coords.lat,coords.lng),

  });

   //Creamos el marcador en el mapa con sus propiedades
   //para nuestro obetivo tenemos que poner el atributo draggable en true
   //position pondremos las mismas coordenas que obtuvimos en la geolocalización
   marker = new google.maps.Marker({
     map: map,
     draggable: true,
     animation: google.maps.Animation.DROP,
     position: new google.maps.LatLng(coords.lat,coords.lng),

  });
   //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
   //cuando el usuario a soltado el marcadors
   marker.addListener('click', toggleBounce);
   
   marker.addListener( 'dragend', function (event)
   {
     //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
     document.getElementById("coorLongitud").value = this.getPosition().lat();+","
     document.getElementById("coorLatitud").value = this.getPosition().lng();
  });
}

//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() {
if (marker.getAnimation() !== null) {
 marker.setAnimation(null);
} else {
 marker.setAnimation(google.maps.Animation.BOUNCE);
}
}
</script>

<!-- 
<script type="text/javascript">
 var divmapa =document.getElementById("map");
// Initialize and add the map
function initMap() {

var options={
 zoom:13,
 center:{lat: -17.400717, lng: -66.153293},
 mapTypeId: 'roadmap'
}
//mapa
var map=new google.maps.Map(divmapa,options);
//marcador
var joyeria = {lat: -17.400717, lng: -66.153293};
var marker = new google.maps.Marker({
 position: joyeria,
  map: map,
  icon:'joyeria.png'
});
var infoWindow=new google.maps.InfoWindow({
  content:'<h1>Joyeria Muriel</h1>'
});
marker.addListener('click',function(){
  infoWindow.open(map,marker);
});
google.maps.event.trigger(marker,'click');
}
 </script>-->

 <script defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyButc2tCHI9GUT-lSddI92N62wXt-V2Iww&callback=initMap">
 </script> 



<!-- START Page Custom Script-->

<!-- END Page Custom Script-->

<!-- START Scripts-->
<!-- Main vendor Scripts-->
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script> -->
<script src="<?php echo base_url(); ?>47admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>47admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Plugins-->
<script src="<?php echo base_url(); ?>47admin/vendor/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>47admin/vendor/slider/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url(); ?>47admin/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<!-- Animo-->
<script src="<?php echo base_url(); ?>47admin/vendor/animo/animo.min.js"></script>
<!-- Sparklines-->
<script src="<?php echo base_url(); ?>47admin/vendor/sparklines/jquery.sparkline.min.js"></script>
<!-- Slimscroll-->
<script src="<?php echo base_url(); ?>47admin/vendor/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Form Validation-->
<script src="<?php echo base_url(); ?>47admin/vendor/parsley/parsley.min.js"></script>
<!-- START Page Custom Script-->
<!-- Data Table Scripts-->
<script src="<?php echo base_url(); ?>47admin/vendor/datatable/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
<!-- Form Validation-->
<!--  <script src="<?php echo base_url(); ?>47admin/vendor/parsley/parsley.min.js"></script> -->

<script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/ColVis/js/dataTables.colVis.min.js"></script>
<!-- END Page Custom Script-->
<!-- App Main-->
<script src="<?php echo base_url(); ?>47admin/app/js/app.js"></script>
<!-- END Scripts-->
<!--<footer>&copy; Marcelo Zenteno Flores</footer>-->
<!--<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>-->
<!-- <script src="<?php echo base_url(); ?>sweetAlert/js/main.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>jquery/jquery.validate.js"></script> -->
<script src="<?php echo base_url(); ?>sweetAlert/dist/sweetalert2.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>jquery/validacion.js"></script> -->
<!-- <script>
function pasarid(idPersona){
   $('#txtid').val(idPersona);
};
function pasaridSocio(idSocio){
   $('#txtidS').val(idSocio);
};
$(document).ready(function(){
   $('#cpsw').keyup(function(){
      var psw = $('#psw').val();
      var cpsw = $('#cpsw').val();

      if (cpsw!=psw) {
         $('#mostrarError').html('*La contraseña debe ser identica');
         $('#mostrarError').css('color','red');
         return false;
      } else{
         $('#mostrarError').html('');
         return true;
      }
   });
})
</script> -->

<script></script>
</body>
</html> 

