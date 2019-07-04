@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
    @foreach($nosotros as $nos)
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<center><h3>{{$nos->titulo1}}</h3></center><br />
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<img src="{{asset('images/'.$nos->img1)}}" width="100%" alt=""/>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<p style="text-align: justify;">{{$nos->texto1}}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<br><h3>{{$nos->titulo2}}</h3>
			<p style="text-align: justify;">{{$nos->texto2}}</p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<br><h3>{{$nos->titulo3}}</h3>
			<p style="text-align: justify;">{{$nos->texto3}}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: right;">
			<a href="{{URL::action('NosotrosController@edit',$nos->id)}}"><button class="btn btn-info">Editar</button></a>
		</div>
	</div>
	@endforeach
	{{$nosotros->render()}}
</div>
  </div>
@endsection