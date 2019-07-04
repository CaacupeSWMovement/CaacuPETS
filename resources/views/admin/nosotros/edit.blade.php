@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<center><h3>Editar: {{ $nosotros->titulo1 }}</h3></center><br>
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

{!! Form::model($nosotros,['method'=>'PATCH','route'=>['nosotros.update',$nosotros->id],'files'=>'true']) !!}
			{{Form::token()}}
			
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<label>Titulo</label>
			<input type="text" class="form-control" name="titulo1" value="{{$nosotros->titulo1}}"><br>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<img src="{{asset('images/'.$nosotros->img1)}}" width="100%" alt=""/>
			<input type="file" name="img1" value="{{asset('images/'.$nosotros->img1)}}" class="form-control" accept="image/jpeg, image/png, image/bmp">
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<label>Texto</label><br>
			<textarea name="texto1" class="form-control" id="" cols="30" rows="10">{{$nosotros->texto1}}</textarea>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p></p>
		</div>
		<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<label>Titulo</label><br>
			<input type="text" class="form-control" name="titulo2" value="{{$nosotros->titulo2}}"><br>
			<label>Texto</label><br>
			<textarea name="texto2" class="form-control" id="" cols="30" rows="10">{{$nosotros->texto2}}</textarea>
		</div>
		<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<label>Titulo</label><br>
			<input type="text" class="form-control" name="titulo3" value="{{$nosotros->titulo3}}"><br>
			<label>Texto</label><br>
			<textarea name="texto3" class="form-control" id="" cols="30" rows="10">{{$nosotros->texto3}}</textarea>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Limpiar</button>
			</div>
		</div>
	</div>
		
{!!Form::close()!!}
	</div>
</div>
@endsection