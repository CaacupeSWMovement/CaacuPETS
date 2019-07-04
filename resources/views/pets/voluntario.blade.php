@extends('base.cliente')
@section('content')
<!-- content-section-starts -->
<div class="content">
	<div class="main">
		<div class="container">
			<div class="blog-content">
			    <div class="blog-content-head text-left">
					<h3>Como ayudar</h3>
			    </div>
				<div class="section group">
					@foreach($voluntariado as $vol)
					<div class="cont span_2_of_3">
						<div class="blog_posts">
							<div class="section group example">
								<div class="col blog_1_of_2">
					                <div class="blog_img">
										<a href="#"><img src="{{asset('images/'.$vol->img1)}}" alt=""></a>
					                </div>
								</div>
								<div class="col blogdata_1_of_2">
									<div class="blog_heading">
										<p><a href="#"><span>{{$vol->titulo}}</span></a></p>
							     	</div>
									<div class="blog_data">
										<p style="text-align: justify;">{{$vol->texto}}</p>
				                   	</div>
								</div>
								<div class="clearfix"></div>	
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					@endforeach
			 	</div>
		 	</div>
		</div>
	</div>			
</div>
<!-- content-section-ends -->
<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#voluntariado").addClass("active");
});
</script>
@endsection