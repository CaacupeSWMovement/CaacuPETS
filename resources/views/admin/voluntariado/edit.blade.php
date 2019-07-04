@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar: {{ $voluntariado->id }}</h3>
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

{!! Form::model($voluntariado,['method'=>'PATCH','route'=>['voluntariado.update',$voluntariado->id],'files'=>'true']) !!}
			{{Form::token()}}
			<div class="form-group">
				<label>Titulo:</label>
				<input type="text" name="titulo" class="form-control" value="{{$voluntariado->titulo}}" required />
			</div>
			<div class="form-group">
				<label for="imagen">Imagen:</label><br>
				<img src="{{asset('images/'.$voluntariado->img1)}}" class="img-responsive" alt="" style="width: 500px;" />
				<input type="file" name="voluntariado" value="{{asset('images/'.$voluntariado->img1)}}" class="form-control" accept="image/jpeg, image/png, image/bmp">
			</div>
			<div class="form-group">
				<label>Texto:</label>
				<textarea name="texto" class="form-control" cols="30" rows="10" required>{{$voluntariado->texto}}</textarea>
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