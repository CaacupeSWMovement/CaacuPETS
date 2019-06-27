@extends('layouts.admin')
@section('content')
<div class="content mt-3">
            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-image" aria-hidden="true"></i>
                    <ul>
                        <li>
                            
                            <span>Slider</span>
                        </li>
                        <li>
                            
                            <span>ver</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <ul>
                        <li>
                            
                            <span>Bienvenida</span>
                        </li>
                        <li>
                            
                            <span><a href="{{url('administracion/noticia')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i style="background-color: #4CB200 !important;" class="fa fa-envelope" aria-hidden="true"></i>
                    <ul>
                        <li>
                            
                            <span>Testimonios</span>
                        </li>
                        <li>
                            
                            <span><a href="{{url('administracion/noticia')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <ul>
                        <li>  
                            <span>Nosotros</span>
                        </li>
                        <li>
                            
                            <span><a href="{{url('administracion/mascota')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-paw" aria-hidden="true"></i>
                    <ul>
                        <li>  
                            <span>Mascotas</span>
                        </li>
                        <li>
                            
                            <span><a href="{{url('administracion/mascota')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i style="background-color: #4CB200 !important;" class="fa fa-street-view" aria-hidden="true"></i>
                    <ul>
                        <li>  
                            <span>Voluntarios</span>
                        </li>
                        <li>
                            
                            <span><a href="{{url('administracion/mascota')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <ul>
                        <li>  
                            <span>Donaciones</span>
                        </li>
                        <li>
                            
                            <span><a href="{{url('administracion/mascota')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <ul>
                        <li>
                            
                            <span>Noticias</span>
                        </li>
                        <li>
                            
                            <span><a href="{{url('administracion/noticia')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <ul>
                        <li>
                            
                            <span>Usuarios</span>
                        </li>
                        <li>
                            <span><a href="{{url('administracion/user')}}">Ver</a></span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
        </div>
@endsection