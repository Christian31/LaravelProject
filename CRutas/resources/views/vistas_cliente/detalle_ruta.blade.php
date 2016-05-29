@extends('vistas_cliente.layoutCliente')

@section('contenido')
<link href="cliente/icomoon/iconos.css" rel='stylesheet' type='text/css' />
<link href="cliente/css/galeria.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="cliente/js/jquery.slides.js"></script>

<script src="http://maps.googleapis.com/maps/api/js?v3"></script>
<div class="main_bg"><!-- start main -->
  <div class="container">
    <div class="main_grid1">
      <h3 style="color:#E8645A;" class="style pull-left">Recorrido Virtual</h3>
      
      <ol class="breadcrumb pull-right">
        <li><a href="{!!URL::to('resultados')!!}"><h3>Atrás</h3></a></li>
        
      </ol>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection
@section('contenido2')
<div class="container">
<br>
<br>
<br>

<div   id="mapa" style="width: 550px; height: 500px; float:left;"> </div>


 <!--<center>-->

 <div style="float:left; margin-left: 80px">
   <div>
     <h3 style="color:#E8645A;">Africa Safari</h3>
     <h5>  Distancia 5Km</h5>
     <div style="width: 440px"  class="slides">

      <img src="cliente/images/africa9.jpg">

      <img src="cliente/images/africa3.jpg">
      <img src="cliente/images/africa5.jpg">
      <img src="cliente/images/africa6.jpg">

      <img src="cliente/images/africa1.jpg">
    </div>
  </div>
  <div>
    <h3 style="color:#E8645A;">Hidden Garden Art Gallery</h3>
    <h5>  Distancia 15Km</h5>
 
  <div style="width: 440px"  class="slides">
    <img src="cliente/images/galery2.jpg">
    <img src="cliente/images/galery5.jpg">
    <img src="cliente/images/galery3.jpg">
    <img src="cliente/images/galery4.jpg">
  </div>
 </div>
<div>
  <h3 style="color:#E8645A;">Pura Aventura</h3>
  <h5>  Distancia 35Km</h5>
  <div style="width: 440px"  class="slides">
    <img src="cliente/images/aventura4.jpg">
    <img src="cliente/images/aventura5.jpg">
    <img src="cliente/images/aventura6.jpg">
     <img src="cliente/images/aventura7.jpg">
  </div>
</div>
<div>


</div>

</div>
</div>
<br>
<!--</center>-->
</div>

@endsection
@section('scripts')
{!!Html::script('cliente/js/Ruta/ruta.js')!!}
<script>
  $(function(){
    $(".slides").slidesjs({
      play: {
        active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 3000,
        // [number] Time spent on each slide in milliseconds.
        auto: false,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  });
</script>

<script>
  $('#buscar').addClass('activate');
  window.onload = iniciarMapa;
</script>
@endsection

