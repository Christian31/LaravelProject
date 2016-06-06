@extends('vistas_cliente.layoutCliente')

@section('contenido')
<link href="cliente/icomoon/iconos.css" rel='stylesheet' type='text/css' />
<link href="cliente/css/galeria.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="cliente/js/jquery.slides.js"></script>
<!--<script src="http://maps.googleapis.com/maps/api/js?v3></script>-->
 <!--<script src="http://maps.googleapis.com/maps/api/js?v3"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCX-4KNnBze_bjEig4PR96yHsLKpPCEHQ"></script>
<!--<script src={{ URL::asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBCX-4KNnBze_bjEig4PR96yHsLKpPCEHQ') }}></script>-->
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
 <input type="hidden" id="latitudUbicacion" value="{{$ubicacion->latitud}}">
 <input type="hidden" id="longitudUbicacion" value="{{$ubicacion->longitud}}">
  

<br>
<br>
<br>

<div   id="mapa" style="width: 550px; height: 500px; float:left;"> </div>
 <!--<center>-->
 <form id="myForm">
 <div style="float:left; margin-left: 80px">
 @foreach($lugaresVirtuales as $lugar)
   <div>
     <h3 style="color:#E8645A;">{{$lugar->nombre_lugar_turistico}}</h3>
     <h5>Distancia: {{$lugar->distancia_ubicacion}}Km </h5>
      @if ($lugar->latitud===0)
       <input type="hidden"  name="latitudes[]" value="0">
    <input type="hidden"  name="longitudes[]" value="0">
         @else
   <input type="hidden"  name="latitudes[]" value="{{$lugar->latitud}}">
    <input type="hidden"  name="longitudes[]" value="{{$lugar->longitud}}">
     @endif

    @if($lugar->lista_imagenes===null)
      <h5>ID del registro generado: {{$lugar->id_lugar_turistico}}<h5>
     @else
      <div style="width: 440px"  class="slides">


@foreach($lugar->lista_imagenes as $imagen)
      <img height="300" src="../public/imagenes/{{$imagen->ruta_imagen}}">
       @endforeach
    </div>
     @endif
    

    
  </div>
  @endforeach
</div>
 </form>
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

window.onload= iniciarMapa;
</script>
 
@endsection

