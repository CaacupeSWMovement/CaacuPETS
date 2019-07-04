@extends('base.cliente')
@section('content')
<div class="content">
		<!--about-->
		@foreach($nosotros as $nos)
		<div class="main">
			<div class="container">
				<div class="about-top">
					<div class="about-top-info">
							<h3>{{$nos->titulo1}}</h3>
							<div class="col-md-4 about-img">
								<img src="{{asset('images/'.$nos->img1)}}" alt="" style="height: 400px;" />
							</div>
							<div class="col-md-8 about-desc">
								<p style="text-align: justify;">{{$nos->texto1}}</p>
								
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
					<h4>{{$nos->titulo2}}</h4>
					<p style="text-align: justify;">{{$nos->texto2}}</p>
				</div>
				<div class="col-md-6 about-section-grid text-left">
					<h4>{{$nos->titulo3}}</h4>
					<p style="text-align: justify;">{{$nos->texto3}}</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		@endforeach
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
<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#nosotros").addClass("active");
});
</script>
@endsection