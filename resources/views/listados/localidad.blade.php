@extends('listados')

@section('content')

<!--Content-->
<div class="wrapper" style="padding-top: 0px; margin-top:20px;">
  <div class="about_doctors">
  
    @include('breadcrum')




    <div class="boxmedico2">
      <div class="doctors_information">
       
       
        <div class="name_doctors">
          <h1 style="margin-bottom:5px;">Profesionales en {{$titulo}}</h1>
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
              @include('listados.colderecha')
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection