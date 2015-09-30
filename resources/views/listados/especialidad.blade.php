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
          
                    <div style="width:100%; height:40px;">
                    <form action="" method="GET">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><input type="hidden"  id="filtro_localidad" class="xFiltro" value="{{$filtro_localidad}}"  name="localidad"><input type="text" name="txtLocalidad" class="txtBuscarLocalidad" style="width:180px" @if(isset($filtro_localidad_txt))  value="{{$filtro_localidad_txt}}" @endif placeholder="Ciudad o Codigo postal"></td>
    <td><select id="fitro_cobertura" name="coberturas" class="xFiltro">
      <option @if($filtro_cobertura) selected="selected" @endif value="">Todas las coberturas</option>
      @foreach(App\Cobertura::orderBy('nombre')->get() as $cobertura)
      <option value="{{$cobertura->id}}" @if($cobertura->id==$filtro_cobertura) selected="selected" @endif>{{$cobertura->nombre}}</option>
      @endforeach
    </select></td>
    <td><button id="filtrar" type="submit" class="button2">Filtrar</button>></td>
  </tr>
</table>
</form>
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
                @each('listados.consultorioespecialidad',$consultorios , 'medico' ,'listados.vacio')
              
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