@extends('layouts.doctor')

@section('content')




   <!--Ciclo admin-->
<div class="row container">

  <br><br>

  <nav class="col s12 m12 l4 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb fa-user-secret">&nbsp; Tutor</a>
        <a href="#!" class="breadcrumb">Modificar</a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

 
   <div class="col s12">
        <div class="card z-depth-3">
                

            {!!Form::model($tutor,['route'=>['tutor.update',$tutor->id],'method'=>'PUT','id'=>'tutorUpdateForm','files'=> true])!!}
              <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;<i class="fa fa-user-secret white-text"></i>&nbsp; Tutor
                      <div class="switch right">
                        <label >
                           <input type="checkbox">
                           <span class="lever #b71c1c red darken-4"></span>
                        </label>
                      </div>
                  </h5>               
              </div>
                  <br><br>
              <div >
              
                 <div class="card-stacked">
                   <div class="row">
                      <div class="card-content">
                          
                          <div class="input-field col s5 offset-s1">
                                <i class="material-icons prefix">person</i>
                                {!!Form::text('nombreTutor',null,['class'=>'validate','data-error'=>'.errorTxt1','id'=>'nombreTutor'])!!}
                                {!!Form::label('nombreTutor','Nombre:')!!}
                                <div class="errorTxt1 red-text"></div>
                          </div>

                           <div class="input-field col s5 ">
                                 <i class="material-icons prefix">person</i>
                                 {!!Form::text('apellidoTutor',null,['class'=>'validate','data-error'=>'.errorTxt2','id'=>'apellidosTutor'])!!}
                                 {!!Form::label('apellidosTutor','Apellidos:')!!}
                                 <div class="errorTxt2 red-text"></div>
                           </div>

                           <div class="clearfix"></div>

                           <div class="input-field col s5 offset-s1">
                                <i class="material-icons prefix">email</i>
                                {!!Form::text('emailTutor',null,['class'=>'validate','data-error'=>'.errorTxt3','id'=>'emailTutor'])!!}
                                {!!Form::label('emailTutor','Correo:')!!}
                                <div class="errorTxt3 red-text"></div>
                          </div>

                          <div class="input-field col s5 ">
                                 <i class="material-icons prefix">vpn_key</i>
                                 {!!Form::password('passwordTutor',['class'=>'validate','data-error'=>'.errorTxt4','id'=>'passwordTutor'])!!}
                                 {!!Form::label('passwordTutor','Contraseña:')!!}
                                  <div class="errorTxt4 red-text"></div>
                           </div>

                           <div class="clearfix"></div>

                          <div class="input-field col s5 offset-s1">
                                <i class="material-icons prefix">vpn_key</i>
                                {!!Form::password('passwordTutor2',['class'=>'validate','data-error'=>'.errorTxt5','id'=>'passwordTutor2'])!!}
                                {!!Form::label('passwordTutor2','Repita Contraseña:')!!}
                                <div class="errorTxt5 red-text"></div>
                          </div>

                          <div class="input-field col s5 ">
                                 <i class="material-icons prefix">phone</i>
                                 {!!Form::text('telefonoTutor',null,['class'=>'validate','data-error'=>'.errorTxt6','id'=>'telefonoTutor'])!!}
                                 {!!Form::label('telefonoTutor','Telefono:')!!}
                                 <div class="errorTxt6 red-text"></div>
                           </div>

                           <div class="clearfix"></div>

                           <div class="input-field col s5 offset-s1">
                                <i class="material-icons prefix">location_city</i>
                                {!!Form::select('estadoTutor',$states,null,['id'=>'estadoTutor','class'=>'browser-default col s10 offset-s2','data-error'=>'.errorTxt7','placeholder'=>'Seleccione el estado'])!!}
                                 <div class="errorTxt7 red-text"></div>
                          </div>

                          <div class="input-field col s5 ">
                                <i class="material-icons prefix">location_city</i>
                                {!!Form::select('ciudadTutor',$towns,null,['id'=>'ciudadTutor','class'=>'browser-default col s10 offset-s2','data-error'=>'.errorTxt8','placeholder'=>'ingrese una ciudad'])!!}
                                   <div class="errorTxt8 red-text"></div>
                           </div>

                           <div class="clearfix"></div>

                             <div class="input-field col s5 offset-s1">
                                 <i class="material-icons prefix">person_pin_circle</i>
                                 {!!Form::text('localidadTutor',null,['id'=>'localidad','data-error'=>'.errorTxt9','class'=>'validate'])!!}
                                 {!!Form::label('localidadTutor','Localidad:')!!}
                                  <div class="errorTxt9 red-text"></div>
                           </div>

                           <div class="input-field col s5 ">
                                  <i class="material-icons prefix">local_library</i>
                                 {!!Form::text('postalTutor',null,['id'=>'postal','data-error'=>'.errorTxt10','class'=>'validate'])!!}
                                 {!!Form::label('postalTutor','Codigo Postal:')!!}
                                 {!!Form::hidden('id_especialista',Auth::especialista()->get()->id)!!}
                                  <div class="errorTxt10 red-text"></div>
                            </div>
    
                            <div class="clearfix"></div>

                          
                      </div>
                      <br><br>
                  </div>
    
                 </div>

                    <div class="card-action ">
                         
                          {!!Form::button('<i class="material-icons">send</i> ', array('class'=>'btn-floating btn-large z-depth-2 right #b71c1c red darken-4 right waves-effect waves-light','type'=>'submit','id'=>'enviar')) !!}      
                    </div>  


                    </div>


               
            {!!Form::close()!!}

                

                    
         </div>        
   </div>
           

  </div>
  <!--Ciclo admin-->  
 
 <!--Margen en blanco-->
 <div id="spacer">
   
 </div>
 <!--Margen en blanco-->

 <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
 <script>
   $(document).ready(function() {
       $(".button-collapse").sideNav();
       $('#ciudad').material_select();
       $('#estado').material_select();
       $('#sexo').material_select();
          
    }
  );
 </script>

      <script>
                window.onload = function () {

// Variable global por estar declarada sin hacer uso de var

                elementosEnForm = document.forms['tutorUpdateForm'].elements;

                for (var i=0; i< elementosEnForm.length; i++) {

                if (elementosEnForm[i].type != 'checkbox') {elementosEnForm[i].disabled = true;}

                else {elementosEnForm[i].addEventListener('click', activarElementos);}

          }

          }

 

              function activarElementos() { for (var i=0; i<elementosEnForm.length; i++) {elementosEnForm[i].disabled=false;} }
         </script>


@stop