@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado con las formas de ayduar <a href="voluntariado/create"><button class="btn btn-primary">Nuevo</button></a></h3><br/>
			@include('admin.voluntariado.search')
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nº</th>
						<th>Titulo</th>
						<th>Imagen</th>
						<th>Información</th>
						<th>Opciones</th>
					</thead>
					@foreach($voluntariado as $vol)
					<tr>
						<td>{{$vol->id}}</td>
						<td>{{$vol->titulo}}</td>
						<td><center><img src="{{asset('images/'.$vol->img1)}}" width="100%" alt=""/></center></td>
						<td>{{$vol->texto}}</td>
						<td>
							<a href="{{URL::action('VoluntariadoController@edit',$vol->id)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$vol->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('admin.voluntariado.modal')
					@endforeach
				</table> 
			</div>
			{{$voluntariado->render()}}
		</div>
	</div>
</div>
  </div>
@endsection