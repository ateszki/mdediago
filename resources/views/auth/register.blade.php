@extends('listados')

@section('content')
<!--Content-->
<div class="wrapper cf">
    <div class="all_contact cf boxregistro">
        <div class="left-side-contact cf">
             <p>
                        <h1 style="color:#04A9BD;">Su imagen en internet</h1>
                       <p style="font-size:14px; color:#666; margin-top:-20px;">Medadvisors cuenta con el más completo directorio de profesionales y servicios médicos y tiene como centro la “experiencia del paciente”.<br>
<br>
</p>
             </p>
             
             <div style=" float:left; width:100%; margin-bottom:20px; padding-bottom:10px; border-bottom:1px solid #CCC; height:auto;">
             <div style="width:20%; float:left;"><img src="{{URL::to('css/images/icon1.png')}}" width="100%" height="auto"></div><div style="width:80%; padding-left:15px; float:left;"><h3 style="margin-bottom:0px;">Búsqueda y recomendación</h3>
             <p>Medadvisors  contiene una  guía  completa y actualizada de médicos, profesionales de la salud, hospitales, sanatorios, clínicas, laboratorios, centros de diagnóstico, obras sociales y prepagas de Argentina.</p></div>
             </div>
             
             
            
               
             <div style=" float:left; width:100%; margin-bottom:20px; padding-bottom:10px; border-bottom:1px solid #CCC; height:auto;">
             <div style="width:20%; float:left;"><img src="{{URL::to('css/images/icon2.png')}}" width="100%" height="auto"></div><div style="width:80%; padding-left:15px; float:left;"><h3 style="margin-bottom:0px;">Instituciones, Obras sociales y Prepagas</h3>
             <p>Clínicas, hospitales, sanatorios, centros de diagnóstico y tratamiento, laboratorios y farmacias, obras sociales y prepagas están presentes en MedAdvisors con su listado de especialidades y profesionales.</p></div>
             </div>
             
             
             
             
                
             <div style=" float:left; width:100%; margin-bottom:20px; padding-bottom:10px; border-bottom:1px solid #CCC; height:auto;">
             <div style="width:20%; float:left;"><img src="{{URL::to('css/images/icon3.png')}}" width="100%" height="auto"></div><div style="width:80%; padding-left:15px; float:left;"><h3 style="margin-bottom:0px;">Consultas a especialistas</h3>
             <p>Explican sus recomendaciones e instrucciones, y escriben artículos especiales para orientar a los pacientes a una consulta adecuada. También pueden responder a las preguntas de los usuarios. </p></div>
             </div>
             
              
             
             
             
      </div>
             
             
             
        <div class="right-side-contact">
            
            
            
             <div class="tabs">
        <div class="wrapper">
            <div class="col-12">
                <div class="tabs2 cf">
                    <div id="tabs">
                        <h2>Soy paciente</h2>
                        <div id="tabs-1">
                            <div class="cf" style="padding:30px;">
                               
                                <div class="col-12">
                                @if (count($errors) > 0)
									<div class="alert alert-danger">
										<strong>Whoops!</strong> There were some problems with your input.<br><br>
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
                                    <p>Complete el formulario de registración.
<br>
                <form method="POST" action="{{ url('/auth/register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <label>Nombre y apellido</label>
                    <input type="text" class="name" name="name" value="{{ old('name') }}">

                    <label>E-mail</label>
                    <input type="email" class="name" name="email" value="{{ old('email') }}">
                    
 							<label class="col-md-4 control-label">Clave</label>
								<input type="password" class="name" name="password">
							<label class="col-md-4 control-label">Confirmar la clave</label>
								<input type="password" class="name" name="password_confirmation">
                
                                    <button class="button3" style="width:100% !important" type="submit">REGISTRARME GRATIS ›</button><br><br>
                                   
                                   <p style="font-size:12px;"> El registro es totalmente seguro, nunca compartiremos sus datos con terceros.</p>
					</form>
           <div>
                    <h2>O registrate con</h2>
                    <div style="margin:30px 0;"><a href="{{URL::to('auth/facebook')}}" class="button3" ><li class="fa fa-facebook"></li> Facebook</a></div>
                    <div style="margin:30px 0;"><a href="{{URL::to('auth/twitter')}}" class="button3"><li class="fa fa-twitter"></li> Twitter</a></div>
                    <div style="margin:30px 0;"><a href="{{URL::to('auth/google')}}" class="button3"><li class="fa fa-google"></li> Google</a></div>
                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            
            
            
            
            
        </div>
    </div>
</div>

</div>

@endsection
