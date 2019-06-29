@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Slide</h3>
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

{!! Form::open(array('url'=>'administracion/slide','method'=>'POST','autocomplete'=>'off','files'=>'true')) !!}
			{{Form::token()}}
			<div class="form-group">
				<label>Suba la imagen <span style="color: #6B6161">(Se recomienda imagenes de 1000px*400px)</span></label>
				<input type="file" name="slide" class="form-control" accept="image/jpeg, image/png, image/bmp" />
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