@extends('base.cliente')
@section('content')
<!-- content-section-starts -->
<div class="content">
	<div class="main">
		<div class="container">
			<div class="blog-content">
	     		<div class="blog-content-head text-left">
					<h3>Nuestras Necesidades</h3>
	    		</div>
				<div class="section group">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-condensed table-hover">
									<thead>
										<th>Articulo</th>
										<th>Descripción</th>
										<th>Opciones</th>
									</thead>
									@foreach($donaciones as $dona)
									<tr>
										<td>{{$dona->articulo}}</td>
										<td>{{$dona->texto}}</td>
										<td>
											<a href="https://api.whatsapp.com/send?phone=595983634750&amp;text=Hola CaacuPETS; quiero donar {{$dona->articulo}}, ¿Cuál es el procedimiento?"><button class="btn btn-info">Donar</button></a>
										</td>
									</tr>
									@endforeach
								</table> 
							</div>
						</div>
					</div>
				</div>
		    </div>
	 	</div>
	</div>
</div>			
<!-- content-section-ends -->
<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#donaciones").addClass("active");
});
</script>
@endsection