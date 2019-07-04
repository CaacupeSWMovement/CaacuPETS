@extends('base.cliente')
@section('content')
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<!-- content-section-starts -->
	<div class="content">
		<div class="main">
			<div class="gallery-content">
	 <div class="container">
		<div class="gallery-content-head text-left">
			<h3>Mascotas en Adopción</h3>
		</div>
			<div class="row">
			@foreach($mascotas as $mascota)
            <div class="col-sm-3 col-xs-6">
                <img id="myBtn{{$mascota->id}}" class="img-responsive portfolio-item" height="100" width="400" src="{{asset('imagenes/mascotas/'.$mascota->mas_imagen)}}" alt="">
                <div style="padding: 10px;"></div>
                <p align="center">{{$mascota->mas_nombre}}</p>
            </div>
            <!-- The Modal -->
			<div id="{{$mascota->id}}" class="modal">
			  <div class="modal-content">
			    <span class="close close{{$mascota->id}}">&times;</span><br>
			    <div class="row">
			    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
			    		<img class="img-responsive portfolio-item" width="100%" src="{{asset('imagenes/mascotas/'.$mascota->mas_imagen)}}" alt="">
			    	</div>
			    	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
			    		<h1 align="center">{{$mascota->mas_nombre}}</h1><br>
			    		<p><b>Edad: </b>{{$mascota->mas_edad}}</p><br>
			    		<p><b>Es acto: </b>{{$mascota->mas_apto}}</p><br>
			    		<p><b>Castrado: </b>{{$mascota->mas_castrado}}</p><br>
			    		<p><b>Sexo: </b>{{$mascota->mas_sexo}}</p><br>
			    		<p><b>Información: </b>{{$mascota->mas_descripcion}}</p><br><br>
			    		<a href="https://api.whatsapp.com/send?phone=595983634750&amp;text=Hola CaacuPETS; quiero adoptar a {{$mascota->mas_nombre}}, ¿Cuál es el procedimiento?"><h3 align="center">Adoptar a {{$mascota->mas_nombre}}</h3></a>
			    	</div>
			    </div>
			  </div>
			</div>

			<script>
			var modal{{$mascota->id}} = document.getElementById("{{$mascota->id}}");
			var btn{{$mascota->id}} = document.getElementById("myBtn{{$mascota->id}}");
			var span{{$mascota->id}} = document.getElementsByClassName("close{{$mascota->id}}")[0];
			btn{{$mascota->id}}.onclick = function() {
			  modal{{$mascota->id}}.style.display = "block";
			}
			span{{$mascota->id}}.onclick = function() {
			  modal{{$mascota->id}}.style.display = "none";
			}
			window.onclick = function(event) {
			  if (event.target == modal{{$mascota->id}}) {
			    modal{{$mascota->id}}.style.display = "none";
			  }
			}
			</script>
			@endforeach
        </div>	
   </div>
</div>

		</div> 
	</div>
	<!-- content-section-ends -->
<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#adopcion").addClass("active");
});
</script>
@endsection