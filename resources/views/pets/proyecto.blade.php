@extends('base.cliente')
@section('content')
<!-- content-section-starts -->
<div class="content">
	<div class="main">
		<div class="container">
			<div class="blog-content">
	     		<div class="blog-content-head text-left">
					<h3>Proyecto CaacuPETS</h3>
	    		</div>
				<div class="section group">
					<embed src="{{asset('pdf/proyecto.pdf')}}" width="100%" height="800" type="application/pdf">
				</div>
		    </div>
	 	</div>
	</div>
</div>			
<!-- content-section-ends -->
<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#proyecto").addClass("active");
});
</script>
@endsection