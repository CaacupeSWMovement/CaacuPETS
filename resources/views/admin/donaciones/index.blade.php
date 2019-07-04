@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Donaciones <a href="donaciones/create"><button class="btn btn-primary">Nuevo</button></a></h3><br/>
			@include('admin.slide.search')
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nº</th>
						<th>Articulo</th>
						<th>Descripción</th>
						<th>Opciones</th>
					</thead>
					@foreach($donaciones as $dona)
					<tr>
						<td>{{$dona->id}}</td>
						<td>{{$dona->articulo}}</td>
						<td>{{$dona->texto}}</td>
						<td>
							<a href="{{URL::action('DonacionesController@edit',$dona->id)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$dona->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('admin.donaciones.modal')
					@endforeach
				</table> 
			</div>
			{{$donaciones->render()}}
		</div>
	</div>
</div>
  </div>
@endsection