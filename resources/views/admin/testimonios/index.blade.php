@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Testimonios <a href="testimonios/create"><button class="btn btn-primary">Nuevo</button></a></h3><br/>
			@include('admin.testimonios.search')
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nº</th>
						<th>Testimonio</th>
						<th>Opciones</th>
					</thead>
					@foreach($testimonios as $testimonio)
					<tr>
						<td>{{$testimonio->id}}</td>
						<td>{{$testimonio->testimonio}}</td>
						<td>
							<a href="{{URL::action('TestimoniosController@edit',$testimonio->id)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$testimonio->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('admin.testimonios.modal')
					@endforeach
				</table> 
			</div>
			{{$testimonios->render()}}
		</div>
	</div>
</div>
  </div>
@endsection