@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<center><h3>Bienvenida</h3></center><br />
		</div>
	</div>
	<div class="row">
		@foreach($welcome as $wel)
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<img src="{{asset('images/'.$wel->img1)}}" width="100%" alt=""/>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<img src="{{asset('images/'.$wel->img2)}}" width="100%" alt=""/>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<center><h3>{{$wel->titulo}}</h3>
				<h5 style="color: red;">{{$wel->subtitulo}}</h5></center><br>
				<p>{{$wel->info}}</p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: right;">
				<a href="{{URL::action('WelcomeController@edit',$wel->id)}}"><button class="btn btn-info">Editar</button></a>
			</div>
		@endforeach
		{{$welcome->render()}}
	</div>
</div>
  </div>
@endsection