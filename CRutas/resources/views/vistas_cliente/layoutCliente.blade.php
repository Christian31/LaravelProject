<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>CRutas</title>
<!-- Bootstrap -->
<link href="cliente/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="cliente/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="cliente/css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!--font-Awesome-->
   	<link rel="stylesheet" href="cliente/fonts/css/font-awesome.min.css">
<!--font-Awesome-->
<!-- start plugins -->
<script type="text/javascript" src="cliente/js/jquery.min.js"></script>
<script type="text/javascript" src="cliente/js/bootstrap.js"></script>
<script type="text/javascript" src="cliente/js/bootstrap.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="cliente/css/fwslider.css" media="all">
    <script src="cliente/js/jquery-ui.min.js"></script>
    <script src="cliente/js/css3-mediaqueries.js"></script>
    <script src="cliente/js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="cliente/css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="cliente/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="cliente/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="cliente/js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->
	<!--<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>-->
<!-- Owl Carousel Assets -->
<link href="cliente/css/owl.carousel.css" rel="stylesheet">
<!---<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		 Owl Carousel Assets -->
<!-- start circle -->
<!--<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
});
</script>-->
</head>
<body>
<div class="header_bg">
<div  class="container">
	<div class="header">
		<div class="logo">
			<!--<img src="cliente/images/palmera.png" alt=""/>-->
			 <strong style="color:white; font-size:35px;">CRutas</strong>
		</div>
		<div  class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li id="inicio"><a href="{!!URL::to('/')!!}">INICIO</a></li>
			<li id="nosotros"><a href="{!!URL::to('nosotros')!!}">Nosotros</a></li>
			<li id="buscar"><a href="{!!URL::to('rutaTuristica')!!}">Buscar rutas turísticas</a></li>
			<li><a href="portfolio.html">PORTFOLIO</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="portfolio.html">Portfolio Page</a></li>
				<li><a href="portfolio.html">Portfolio Page</a></li>
				<li><a href="portfolio.html">Portfolio Page</a>
					<ul class="list-unstyled">
						<li><a href="portfolio.html">Sub-Menu 1</a></li>
						<li><a href="portfolio.html">Sub-Menu 2</a></li>
						<li><a href="portfolio.html">Sub-Menu 3</a></li>
					</ul>
				</li>
			</ul>
			</li>
			
		</ul>
		</nav>
		<script src="cliente/js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_bg">
   @yield('contenido') 


</div>
@yield('contenido2')

<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<!--<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div>		
			<p class="f_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
			<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span>
		</div>-->
		<div class="col-md-2 footer1_of_3">
			<h4></h4>
			<ul class="list-unstyled f_list">
			<!--	<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>-->
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4></h4>
			<ul class="list-unstyled f_list">
				<!--<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>-->
			</ul>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4><span></span></h4>
			<!--<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="images/blog_pic1.jpg" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>26, may 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="images/blog_pic2.jpg" alt="" class="img-responsive"/></a>
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>17, June 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>-->
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved &nbsp;<a href=""> CRutas</a></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				
				
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>