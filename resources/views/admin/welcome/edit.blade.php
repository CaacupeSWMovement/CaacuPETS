@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<center><h3>Editar: {{ $welcome->titulo }}</h3></center><br>
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
		</div>

{!! Form::model($welcome,['method'=>'PATCH','route'=>['welcome.update',$welcome->id],'files'=>'true']) !!}
			{{Form::token()}}
			
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<img src="{{asset('images/'.$welcome->img1)}}" width="100%" alt=""/>
			<input type="file" name="img1" value="{{asset('images/'.$welcome->img1)}}" class="form-control" accept="image/jpeg, image/png, image/bmp">
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<img src="{{asset('images/'.$welcome->img2)}}" width="100%" alt=""/>
			<input type="file" name="img2" value="{{asset('images/'.$welcome->img2)}}" class="form-control" accept="image/jpeg, image/png, image/bmp">
		</div>
		<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<label>Titulo</label><br>
			<input type="text" class="form-control" name="titulo" value="{{$welcome->titulo}}">
		</div>
		<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<label>Subtitulo</label><br>
			<input type="text" class="form-control" name="subtitulo" value="{{$welcome->subtitulo}}">
		</div>
		<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<label>Información</label><br>
			<textarea name="info" class="form-control" id="" cols="30" rows="10">{{$welcome->info}}</textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Limpiar</button>
		</div>
	</div>
		
{!!Form::close()!!}
	</div>
</div>
@endsection