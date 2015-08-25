@extends('listados')

@section('content')

<!--Content-->
<div class="wrapper" style="padding-top: 0px; margin-top:20px;">
  <div class="about_doctors">
  
  <ul class="breadcrumb">        <li><a  class="linkgral volverlink"  href="javascript:history.back();">← VOLVER</a> <span class="divider"> I </span></li>
        <li><a  class="linkgral"  href="index.html">Inicio</a> <span class="divider">/</span></li>
<li><a class="linkgral" href="search_especialidad.html">Especialidades</a> <span class="divider">/</span></li>
        <li><a class="linkgral" href="#">Profesionales</a> <span class="divider">/</span></li>
                <li class="linkgral active">Cirujanos Plásticos</li>
</ul>



    <div class="boxmedico2">
      <div class="doctors_information">
       
       
        <div class="name_doctors">
          <h1 style="margin-bottom:5px;">Especialidades en Capital Federal (CABA) Argentina</h1>
          <div style=" margin-top:10px; width:100%; height:40px; padding-top:10px;">
          <table width="100%%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><p>
      <label style="float:left; margin-right:10px; font-size:13px;">
        <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" onclick = "document.location.href='search_especialidad.html'">
        Profesionales</label>
      
      <label style="float:left; margin-right:10px;  font-size:13px;">
        <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" onclick = "document.location.href='search_instituciones.html'">
        Obras Sociales</label>
      <label style="float:left; margin-right:10px;  font-size:13px;">
        <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
        Prepagas</label>
      <br>
    </p></td>
   
    
    
  </tr>
</table>
          </div>
                    <div style="width:100%; height:40px;">
                    
                    <table width="100%%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><input name="" type="text" placeholder="Ciudad o Codigo postal"></td>
    <td><select name="">
      <option selected>Cirujanos Plasticos</option>
      <option>+ Todas las especializaciones</option>
    </select></td>
    <td><select name="">
      <option selected>Todas las coberturas</option>
    </select></td>
  </tr>
</table>
</div>


        </div>
      </div>
      
                              <div  class="borderbottom"></div>

      
      <!--Service--><!--Content-->
       <div class="content" style="margin-top:30px;">
        <div class="tabs">
          <div class="wrapper">
            <div class="col-12"> 
              
              <!-- Abro contenedor columna izq -->
              <div class="col-8 media100" style="margin-top:-10px;">
                @each('listados.consultorio',$consultorios , 'consultorio','listados.vacio' )
              
               {!! $consultorios->render() !!}
               
                <!-- fin contenedor ubicacion --> 
                
                
                 
                
                
              </div>
              <!-- fin contenedor columna izq --> 
              
              <!-- Abro contenedor columna derecha con mapa -->
              
              <div class="media100 mediatop col-4" style="float:left; padding-left:30px;">
                <div>
                  <iframe src="https://mapsengine.google.com/map/embed?mid=zU1qhzJdvLzQ.kWPnwtNqHd4o" width="100%" height="500"></iframe>
                </div>
                
                <div id="banner" style="margin-bottom:5px;"><img src="http://placehold.it/277x370" width="100%" height="auto"></div>
                                <div id="banner"><img src="http://placehold.it/277x370" width="100%" height="auto"></div>

                
              </div>
              <!-- fin contenedor columna derecha con mapa --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection