@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Forma de Ayudar</h3><br>
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

{!! Form::open(array('url'=>'administracion/voluntariado','method'=>'POST','autocomplete'=>'off','files'=>'true')) !!}
			{{Form::token()}}
			<div class="form-group">
				<input type="text" name="titulo" class="form-control" placeholder="Ingrese un titulo" required />
			</div>
			<div class="form-group">
				<label>Suba la imagen</label>
				<input type="file" name="img1" class="form-control" accept="image/jpeg, image/png, image/bmp" required />
			</div>
			<textarea name="texto" class="form-control" cols="30" rows="10" required></textarea>
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