@extends('layouts.admin')

@section('content')


 <!--Contenedor principal-->   
<div class="row container">

<br><br>

  <nav class="col s12 m12 l5 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4  z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Especialistas</a>
        <a href="#!" class="breadcrumb">Modificar </a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

 <!--Inicio del formulario para editar un especialista-->
   <div class="col s12">
              <div class="card z-depth-3">
                

                {!!Form::model($especialista,['route'=>['especialista.update',$especialista->id],'method'=>'PUT','id'=>'EspeUpdateForm','files'=>true])!!}

                  <div class="card-tittle #880e4f pink darken-4  ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;<i class="fa fa-user-md white-text"></i>&nbsp; Especialista
                      <div class="switch right">
                        <label >
                           <input type="checkbox">
                           <span class="lever"></span>
                        </label>
                      </div> 
                  </h5>               
                  </div>
                  <br><br>
                

                <div class="card-stacked">
                   <div class="row">
                      <div class="card-content">
                          
                       <div class="input-field col s5 offset-s1">
                             <i class="material-icons prefix ">person</i>
                             {!!Form::text('nombre',null,['class'=>'validate','data-error'=>'.errorTxt1','id'=>'nombre'])!!}
                             {!!Form::label('nombre','Nombre:')!!}
                             <div class="errorTxt1 red-text"></div>
                       </div>

                       <div class="input-field col s5 ">
                             <i class="material-icons prefix">person</i>
                             {!!Form::text('apellidos',null,['class'=>'validate','data-error'=>'.errorTxt2','id'=>'apellidos'])!!}
                             {!!Form::label('apellidos','Apellidos:')!!}
                             <div class="errorTxt2 red-text"></div>
                       </div>

                       <div class="clearfix"></div>

                       <div class="input-field col s5 offset-s1">
                             <i class="material-icons prefix">subtitles</i>
                             {!!Form::text('cedula',null,['class'=>'validate','data-error'=>'.errorTxt3','id'=>'cedula'])!!}
                             {!!Form::label('cedula','Cedula Profesional:')!!}
                             <div class="errorTxt3 red-text"></div>
                       </div>

                       <div class="input-field col s5">
                             <i class="material-icons prefix ">folder_shared</i>
                             {!!Form::text('especialidad',null,['class'=>'validate','data-error'=>'.errorTxt7','id'=>'especialidad'])!!}
                             {!!Form::label('especialidad','Especialidad:')!!}
                             <div class="errorTxt7 red-text"></div>
                       </div>

    
                       <div class="clearfix"></div>

                        <div class="input-field col s5 offset-s1">
                            <i class="material-icons prefix">vpn_key</i>
                            {!!Form::password('password',['class'=>'validate','data-error'=>'.errorTxt5','id'=>'password'])!!}
                            {!!Form::label('password','Contraseña:')!!}
                            <div class="errorTxt5 red-text"></div>
                       </div>

                       <div class="input-field col s5">
                            <i class="material-icons prefix">vpn_key</i>
                            {!!Form::password('password2',['class'=>'validate','data-error'=>'.errorTxt6','id'=>'password2'])!!}
                            {!!Form::label('password2','Repita Contraseña:')!!}
                            <div class="errorTxt6 red-text"></div>
                       </div>

                       <div class="clearfix"></div>


                       <div class="input-field col s5 offset-s1">
                            <i class="material-icons prefix ">domain</i>
                            {!!Form::text('organizacion',null,['class'=>'validate','data-error'=>'.errorTxt8','id'=>'organizacion'])!!}
                            {!!Form::label('organizacion','Organización perteneciente:')!!}
                            <div class="errorTxt8 red-text"></div>
                       </div>

                      <div class="input-field col s5 ">
                            <i class="material-icons prefix ">phone</i>
                            {!!Form::text('telefono',null,['class'=>'validate','data-error'=>'.errorTxt9','id'=>'telefono'])!!}
                            {!!Form::label('telefono','Telefono:')!!}
                            <div class="errorTxt9 red-text"></div>
                      </div>

                      <div class="clearfix"></div>

                      <div class="input-field col s5 offset-s1">
                            <i class="material-icons prefix ">location_city</i>
                            {!!Form::select('estado',$states,null,['id'=>'estado','class'=>'browser-default col s10 offset-s2','placeholder'=>'Seleccione el estado','data-error'=>'.errorTxt10'])!!}
                            
                            <div class="errorTxt10 red-text"></div>
                      </div> 

                      <div class="input-field col s5 ">
                           <i class="material-icons prefix">location_city</i>
                           {!!Form::select('ciudad',$towns,null,['id'=>'ciudad','class'=>'browser-default col s10 offset-s2','data-error'=>'.errorTxt11'])!!}
                           
                           <div class="errorTxt11 red-text"></div>
                      </div>

                      <div class="clearfix"></div>  
    

                      <div class="input-field col s5 offset-s1">
                            <i class="material-icons prefix ">person_pin_circle</i>
                            {!!Form::text('localidad',null,['class'=>'validate','data-error'=>'.errorTxt12','id'=>'localidad'])!!}
                            {!!Form::label('localidad','Localidad:')!!}
                            <div class="errorTxt12 red-text"></div> 
                      </div> 
         
                      <div class="input-field col s5 ">
                           <i class="material-icons prefix">local_library</i>
                           {!!Form::text('postal',null,['class'=>'validate','data-error'=>'.errorTxt13','id'=>'postal'])!!}
                           {!!Form::label('postal','Codigo Postal:')!!}
                           <div class="errorTxt13 red-text"></div>
                      </div> 

                      <div class="clearfix"></div>

   
                       <div class="file-field input-field col s8 offset-s1">
      
                       <div class="btn col s3 #1e88e5 #880e4f pink darken-4  darken-1">
                         <i class="fa fa-user"></i>
        
                         {!!Form::file('path',null,['id'=>'path','data-error'=>'.errorTxt14', 'class'=>'validate'])!!}
                         <div class="errorTxt14 red-text"></div>
                       </div>
                       <div class="file-path-wrapper">
                         <input class="file-path validate" placeholder="Seleccione una imagen de perfil" type="text">
                       </div>
                       </div>
  
                       <div class="clearfix"></div>

                      </div>
                      <br><br>
                  </div>
    
                 </div>

                    <div class="card-action ">
                         
                          {!!Form::button('<i class="material-icons">send</i> ', array('class'=>'btn-floating btn-large z-depth-2 right waves-effect waves-light #b71c1c red darken-4','type'=>'submit','id'=>'enviar')) !!}      
                    </div>  


                     
                    {!!Form::close()!!}

                    
                </div>        
              </div>
           <!--FIN DEL FORMULARIO--> 

  </div>
   <!--Fin del contenedor principal--> 
 
 <!--Margen en blanco-->
 <div id="spacer">
   
 </div>
 <!--Margen en blanco-->

  <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>

  <script>
    window.onload = function () {

// Variable global por estar declarada sin hacer uso de var

elementosEnForm = document.forms['EspeUpdateForm'].elements;

for (var i=0; i< elementosEnForm.length; i++) {

                if (elementosEnForm[i].type != 'checkbox') {elementosEnForm[i].disabled = true;}

                else {elementosEnForm[i].addEventListener('click', activarElementos);}

}

}

 

function activarElementos() { for (var i=0; i<elementosEnForm.length; i++) {elementosEnForm[i].disabled=false;} }
  </script>





@endsection