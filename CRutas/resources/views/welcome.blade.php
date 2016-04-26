@extends('vistas_cliente.layoutCliente')

@section('contenido')
<div class="main_bg"><!-- start main -->
<div class="container">
    <div class="main_grid1">
        <h3 style="color:#E8645A;" class="style pull-left">Rutas Turísticas de Costa Rica</h3>
        <ol class="breadcrumb pull-right">
          
        </ol>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="cliente/images/cr1.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Parque Nacional Volcán Arenal</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="cliente/images/cr2.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Playa Tamarindo, Guanacaste</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="cliente/images/cr3.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Reserva Biológica Monteverde</p>
                    </div>
                </div>
            </div>
             <div class="slide">
                <img src="cliente/images/cr4.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Parque Nacional Marino Ballena</p>
                    </div>
                </div>
            </div>
             <div class="slide">
                <img src="cliente/images/cr5.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Río Celeste</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<br>



<div style="float: left;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<video  controls>
 
  <source src="cliente/videos/video1.mp4" type="video/mp4">
  Tu navegador no implementa el elemento <code>video</code>.
 
</video>
</div>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<video  controls>
 
 
   <source src="cliente/videos/video2.mp4" type="video/mp4">
  Tu navegador no implementa el elemento <code>video</code>.
</video>

</div>
<br>
<script>
$('#inicio').addClass('activate');
</script>
@endsection