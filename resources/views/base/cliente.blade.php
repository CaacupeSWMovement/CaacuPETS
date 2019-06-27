<!DOCTYPE html>
<html>
<head>
<title>CaacuPETS</title>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!-- navigation -->
<!-- navigation -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<p class="location"><i class="location"></i>Cordillera Caacupé</p>
				<a target="_blank" href="https://web.whatsapp.com/send?phone=595983634750&amp;text=Hola CaacuPETS"><p class="phonenum">+595983634750</p></a>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<a href="{{url('/')}}"><img src="images/logo.png" width="100px" alt="" /></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
					<ul>
					<nav class="cl-effect-5">
						<li><a id="inicio" class="active nav" href="{{url('/')}}"><span data-hover="Inicio">Inicio</span></a></li> 
						<li><a id="nosotros" class="nav" href="{{url('/about')}}"><span data-hover="Nosotros">Nosotros</span></a></li>
						<li><a id="galeria" class="nav" href="{{url('/photo')}}"><span data-hover="Galera">Galeria</span></a></li> 
						<li><a id="adopcion" class="nav" href="{{url('/adopcion')}}"><span data-hover="Adopción">Adopción</span></a></li>
						<li><a id="voluntariado" class="nav" href="{{url('/voluntario')}}"><span data-hover="Voluntariado">Voluntariado</span></a></li>
						<li><a id="donaciones" class="nav" href="{{url('/voluntario')}}"><span data-hover="Donaciones">Donaciones</span></a></li>  
						<li><a id="noticias" class="nav" href="{{url('/noticia')}}"><span data-hover="Noticias">Noticias</span></a></li> 
						<li><a id="contacto" class="nav" href="{{url('/contacto')}}"><span data-hover="Contacto">Contacto</span></a></li>
					</nav>
					</ul>
				</div>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	@yield('content')
	<!-- footer-section-starts -->
	<!--<div class="footer">
		<div class="container">
			<div class="col-md-7 follow-us">
				<h4>Seguinos</h4>
				<div class="social-icons">
					<i class="facebook"></i>
					<i class="twitter"></i>
					<i class="pinterest"></i>
					<i class="googlepluse"></i>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor</p>
				<div class="copyright">
					<p>Design by  <a href="">  Caacupe Software Movement</a></p>
				</div>
			</div>
		</div>
	</div>-->
	<!-- footer-section-ends -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>