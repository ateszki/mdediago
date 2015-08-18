<body>

<!--HEADER-->
<div class="header">
  <div class="wrapper cf">
    <div class="logo"><a href="index.html"><img src="{{ URL::to('css/images/air.png') }}" alt=""></a></div>
    <div class="menu2">
   
 <div style="float:left;"><input name="" style="width:350px;  margin-top:-30px; padding:5px; border-color:#099; border-radius:6px 0px 0px 6px;" type="text" placeholder="Buscar profesionales, especialidades, enfermedades, etc"></div>
 <div style=" float:left;border-radius:0px 6px 6px 0px; margin-top:-11px; background-color:#02aabb; text-align:center; padding-top:10px; width:40px; height:40px; margin-right:20px;"><div class="fa fa-search" style="color:#FFF;"></div></div>
      <ul class="vertical-line3 cf">
      
        <li><a href="#">Profesionales</a>
          <ul>
            <li><a href="{{URL::to('regiones')}}">Por Región</a></li>
            <li><a href="{{URL::to('especialidades')}}">Por Especialidad</a></li>
            <li><a href="doctors_inside.html">Por profesional</a>
            </li>
          </ul>
        </li>
         <li><a href="#">Registrarme</a>
            <ul>
              <li><a href="{{URL::to('registro')}}">soy pacientes</a></li>
              <li><a href="{{URL::to('registro-profesionales')}}">soy profesional o centro médico</a></li>
            </ul>
         </li>
        <li><a href="ingresar.html">Ingresar</a></li>
      </ul>
      <div class="mobile-menu"> <select>
          <option value="index.html">Inicio</option>
          <option value="search_list_region.html">Regiones</option>
          <option value="search_list_especialidad.html">Especialidad</option>
          <option value="doctors_inside.html">Profesionales</option>
        </select>
      </div>
    </div>
    <!--end menu-2--> 
    
  </div>
  <!--end wrapper--> 
</div>
<!--end of header-->

