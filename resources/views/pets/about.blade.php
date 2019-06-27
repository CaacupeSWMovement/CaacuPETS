@extends('base.cliente')
@section('content')
<div class="content">
		<!--about-->
		<div class="main">
			<div class="container">
				<div class="about-top">
					<div class="about-top-info">
							<h3>Nosotros</h3>
							<div class="col-md-4 about-img">
								<img src="images/pic8.jpg" alt=""/ style="height: 400px;">
							</div>
							<div class="col-md-8 about-desc">
								<p>
									Somos un equipo multidisciplinario de estudiantes y profesionales, involucrados en todo tipo de areas, Derecho, Psicología, etc, cuyo interés en común es el cuidado de los animales y la preservación.
								</p>
								
							</div>
							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="about-section text-center">
			<div class="container">
				<div class="col-md-6 about-section-grid text-left">
					<h4>Misión</h4>
					<p>Nuestra misión es rescatar animales callejeros en riesgo para otorgarles una rehabilitación física y psicológica, brindándoles la oportunidad de un hogar y una familia. <br>Mediante una red integrada podemos realizar esterilizaciones, rescates y adopciones de perros y gatos, logrando concientizar cada día a más personas, quienes se han ido uniendo a esta labor.
					</p>
				</div>
				<div class="col-md-6 about-section-grid text-left">
					<h4>Visión</h4>
					<p>Nuestra visión es ser la fundación de animales en riesgo con mayor impacto de Cordillera, generando un cambio efectivo en la conciencia de la sociedad para acabar con el abandono, la humillación y el abuso que sufren miles de animales al día.
					Educando a través de nuestra gran red de estudiantes y profesionales, lograremos otorgar la oportunidad de un hogar a los callejeros de Caacupé.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
				
				<!--<div class="aboutus">
							<div class="container">
						<div class="about-bottom-info">
					<div class="col-md-4 about-left">
						<div class="check-in">
							<img src="images/dg-6.png" alt=""/>
						</div>
						<div class="check-out">
							<p>Mauris fermentum dictum magna
							sed laoreet aliquam leo ut tellus</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 about-left">
						<div class="check-in">
							<img src="images/dg-5.png" alt=""/>
						</div>
						<div class="check-out">
							<p>Mauris fermentum dictum magna
							sed laoreet aliquam leo ut tellus</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 about-left">
						<div class="check-in">
							<img src="images/dg-4.png" alt=""/>
						</div>
						<div class="check-out">
							<p>Mauris fermentum dictum magna
							sed laoreet aliquam leo ut tellus</p>
						</div>
						<div class="clearfix"> </div>
					</div>
						<div class="col-md-4 about-left">
						<div class="check-in">
							<img src="images/dg-3.png" alt=""/>
						</div>
						<div class="check-out">
							<p>Mauris fermentum dictum magna
							sed laoreet aliquam leo ut tellus</p>
						</div>
						<div class="clearfix"> </div>
					</div>
						<div class="col-md-4 about-left">
						<div class="check-in">
							<img src="images/dg-2.png" alt=""/>
						</div>
						<div class="check-out">
							<p>Mauris fermentum dictum magna
							sed laoreet aliquam leo ut tellus</p>
						</div>
						<div class="clearfix"> </div>
					</div>
							<div class="col-md-4 about-left">
						<div class="check-in">
							<img src="images/dg-1.png" alt=""/>
						</div>
						<div class="check-out">
							<p>Mauris fermentum dictum magna
							sed laoreet aliquam leo ut tellus</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>-->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#nosotros").addClass("active");
});
</script>
@endsection