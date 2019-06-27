@extends('base.cliente')
@section('content')
<!-- content-section-starts -->
	<div class="content">
		<div class="main">
			<div class="container">
			         <div class="contact-form">
				  	   <h2>Contactanos</h2>
				  	   	<form>
						    <div class="left_form">
						    	<div>
							    	<span><label>NOMBRE</label></span>
							    	<span><input name="userName" type="text" class="textbox" required></span>
							    </div>
							    <div>
							    	<span><label>E-MAIL</label></span>
							    	<span><input name="userEmail" type="text" class="textbox" required></span>
							    </div>
							    <div>
							     	<span><label>ASUNTO</label></span>
							    	<span><input name="userPhone" type="text" class="textbox" required></span>
							    </div>
							</div>
						    <div class="right_form">
						        <div>					    	
							    	<span><label>MENSAJE</label></span>
							    	<span><textarea name="userMsg" required> </textarea></span>
							    </div>
							   	<div>
							   		<span><input type="submit" value="Enviar" class="myButton"></span>
							  	</div>
							</div>
					    </form>
					    <div class="clearfix"></div>
				  </div>
				 <div class="content_bottom">
				 	<div class="company_address">
				     	<h2>UBICACION</h2>
						    	<p>Caacupé - Paraguay</p>
						<p><b>Direccion:</b> Frente del cementerio en Ytu</p>
				   		<p><b>Celular:</b> +595983634750</p>
				 	 	<p><b>Email:</b> <span><a href="mailto:caacupets@gmail.com">caacupets@gmail.com</a></span></p>
				   		<p><b>Seguinos en:</b> <span><a href="https://www.facebook.com/CaacuPETS/">Facebook</a></span></p>
				     </div>
				       <div class="contact_info">
    	 				<h2>BUSCANOS</h2>
					    	  <div class="map">
							   	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.5310984993284!2d-57.0709996855254!3d-25.365627283818107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDIxJzU2LjMiUyA1N8KwMDQnMDcuNyJX!5e1!3m2!1ses-419!2spy!4v1561646864452!5m2!1ses-419!2spy" width="100%" height="185" frameborder="0" style="border:0" allowfullscreen></iframe>
							  </div>
      				     </div>
				      <div class="clearfix"></div>
	                </div>	
	             </div>  
	          </div>

		</div> 
	</div>
	<!-- content-section-ends -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".nav").removeClass("active");
  $("#contacto").addClass("active");
});
</script>
@endsection