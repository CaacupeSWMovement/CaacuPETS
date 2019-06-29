@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Slide: {{ $slide->id }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>
							{{$error}}
						</li>
					@endforeach
				</ul>
			</div>
			@endif

{!! Form::model($slide,['method'=>'PATCH','route'=>['slide.update',$slide->id],'files'=>'true']) !!}
			{{Form::token()}}
			
			<div class="form-group">
				<label for="imagen">Foto de Perfil:</label><br>
				<img src="{{asset('images/'.$slide->slide)}}" class="img-responsive" alt="" style="width: 500px;" />
				<span style="color: #6B6161">(Se recomienda imagenes de 1000px*400px)</span>
				<input type="file" name="slide" value="{{asset('images/'.$slide->slide)}}" class="form-control" accept="image/jpeg, image/png, image/bmp">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Limpiar</button>
			</div>
			
			{!!Form::close()!!}
		</div>
	</div>
</div>
</div>
@endsection