@extends('listados')

@section('content')

<!--Content-->
<div class="wrapper" style="padding-top: 0px; margin-top:20px;">
  <div class="about_doctors">
  
    @include('breadcrum')




    <div class="boxmedico2">
      <div class="doctors_information">
       
       
        <div class="name_doctors">
          <h1 style="margin-bottom:5px;">Profesionales en @if(isset($titulo)){{$titulo}}@endif</h1>
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
                
                <!-- Abro contenedor ubicacion -->
                
                <div class="col-10 media100" style="margin-top:-10px;">
                  <p>
                 
      
                  <p><div class="list3">
                  @if($localidades)

                  <ul>
                  @foreach($localidades as $l)
            <li><a href="{{URL::to('/regiones/'.$provincia->slug.'/'.$l->slug)}}" title="">Profesionales de la salud en {{$l->nombre}}</a></li>
          @endforeach 
          </ul>
                  @endif
                                  </div>

                  
                  </p>
                  
                  </p>
                </div>
                
                <div  class="borderbottom"></div>
                <!-- fin contenedor ubicacion --> 
                
               {!! $localidades->render() !!}
               
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