@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Slides <a href="slide/create"><button class="btn btn-primary">Nuevo</button></a></h3><br/>
			@include('admin.slide.search')
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Nº</th>
						<th>Slide</th>
						<th>Opciones</th>
					</thead>
					@foreach($slides as $slide)
					<tr>
						<td>{{$slide->id}}</td>
						<td><center><img src="{{asset('images/'.$slide->slide)}}" width="50%" alt=""/></center></td>
						<td>
							<a href="{{URL::action('SlideController@edit',$slide->id)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$slide->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('admin.slide.modal')
					@endforeach
				</table> 
			</div>
			{{$slides->render()}}
		</div>
	</div>
</div>
  </div>
@endsection