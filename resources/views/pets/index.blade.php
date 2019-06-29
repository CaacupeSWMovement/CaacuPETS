@extends('base.cliente')
@section('content')
<!-- header-section-ends -->
    <div class="banner">
	<div class="slider">	  
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
			  	@foreach($slides as $slide)
				 <li>
					 <img src="{{asset('images/'.$slide->slide)}}" alt="" style="height: 400px !important;" />
					  <!--<div class="caption">
						<h2>Como cuidar a tu mascota</h2>
						<a class="more" href="#">Leer mas</a>
					  </div>-->
				 </li>
				@endforeach
			  </ul>	      
		  </div>
	</div>
	</div>
	<!-- content-section-starts -->
		<div class="content">
			<div class="welcome-section">
				<div class="container">
					@foreach($welcome as $wel)
					<div class="col-md-6 welcome-grid text-center">
						<h3>{{$wel->titulo}}</h3>
						<h5>{{$wel->subtitulo}}</h5>
						<p>{{$wel->info}}</p>
					</div>
					<div class="col-md-6 images">
						<div class="img1">
						<img src="{{asset('images/'.$wel->img1)}}" class="img-responsive" alt="" width="100" />
						</div>
						<div class="img2">
						<img src="{{asset('images/'.$wel->img2)}}" class="img-responsive" alt="" width="100" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					@endforeach
				</div>
			</div>
			<div class="textimonials-section text-center">
				<div class="container">
					<h1 style="color: white;font-size: 39px;">TESTIMONIOS</h1><br>
					<h5><img src="images/t.png" alt="" />
					Gracias Caacupets!!! 
                     Personas tan nobles, 
						Que solidaria y con alma tan pura la señora Sussana</h5>
				</div>
			</div>
		</div>
	<!-- content-section-ends 
	
	<div class="main-map">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28837.479613495467!2d-57.13671466387495!3d-25.38187319920515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spy!4v1522882521419" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>-->

<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#inicio").addClass("active");
});
</script>
@endsection