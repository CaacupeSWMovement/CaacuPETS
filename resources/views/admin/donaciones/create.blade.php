@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Articulo</h3><br>
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

{!! Form::open(array('url'=>'administracion/donaciones','method'=>'POST','autocomplete'=>'off','files'=>'true')) !!}
			{{Form::token()}}
			<div class="form-group">
				<input type="text" name="articulo" class="form-control" placeholder="Ingrese articulo" required= />
			</div>
			<div class="form-group">
				<textarea name="texto" cols="30" rows="10" class="form-control" placeholder="Ingrese información sobre el Articulo"></textarea>
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