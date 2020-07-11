@extends('layouts.doctor')

@section('content')




   <!--Ciclo admin-->
<div class="row container">

  <br><br>

  <nav class="col s12 m12 l6 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Especialistas</a>
        <a href="#!" class="breadcrumb">Modificar </a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

 
   <div class="col s12">
        <div class="card z-depth-3">
                

            {!!Form::model($infante,['route'=>['infante.update',$infante->id],'method'=>'PUT','id'=>'infanteUpdateForm','files'=> true])!!}
              <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;<i class="fa fa-child white-text"></i>&nbsp; Paciente
                     <div class="switch right ">
                        <label >
                           <input type="checkbox" >
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
                                <i class="material-icons prefix ">person</i>
                                {!!Form::text('nombre',null,['class'=>'validate','data-error'=>'.errorTxt1','id'=>'nombre'])!!}
                                {!!Form::label('Nombre:')!!}
                                 <div class="errorTxt1 red-text"></div>
                          </div>

                           <div class="input-field col s5 ">
                                <i class="material-icons prefix ">person</i>
                                {!!Form::text('apellido',null,['class'=>'validate','data-error'=>'.errorTxt2','id'=>'apellido'])!!}
                                {!!Form::label('Apellidos:')!!}
                                 <div class="errorTxt2 red-text"></div>
                          </div>

                          <div class="clearfix"></div>

                          <div class="input-field col s5 offset-s1">
                                <i class="material-icons prefix ">cake</i>
                                {!!Form::text('edad',null,['class'=>'validate','data-error'=>'.errorTxt3','id'=>'edad'])!!}
                                {!!Form::label('Edad:')!!}
                                 <div class="errorTxt3 red-text"></div>
                          </div>

                          
                         <div class="input-field col s6 ">
                              <i class="material-icons prefix ">wc</i>
                               
                               {!!Form::radio('sexo', 'masculino', null,['id' => 'sexo1','data-error'=>'.errorTxt4','class'=>'with-gap col s2',]) !!}
                               <label for="sexo1">Masculino</label>
                              
                               {!!Form::radio('sexo', 'femenino',null, ['id' => 'sexo2','data-error'=>'.errorTxt4','class'=>'with-gap col s2']) !!}
                               <label for="sexo2">Femenino</label>
                               <div class="errorTxt4 red-text"></div>
                        </div> 


                          <div class="clearfix"></div>

                          <div class="input-field col s5 offset-s1">
                                <i class="material-icons prefix ">location_city</i>
                                {!!Form::select('estado',$states,null,['id'=>'estado','class'=>'browser-default col s10 offset-s2','data-error'=>'.errorTxt5','placeholder'=>'Seleccione el estado'])!!}
                                 <div class="errorTxt5 red-text"></div>
                               
                          </div>
         
                          <div class="input-field col s5">
                                <i class="material-icons prefix ">location_city</i>
                                {!!Form::select('ciudad',$towns,null,['id'=>'ciudad','data-error'=>'.errorTxt6','class'=>'browser-default col s10 offset-s2','placeholder'=>'ingrese una ciudad'])!!}
                                 <div class="errorTxt6 red-text"></div>
                              
                          </div> 

                          <div class="clearfix"></div>
                      
                          <div class="input-field col s5 offset-s1">
                               <i class="material-icons prefix ">person_pin_circle</i>
                               {!!Form::text('localidad',null,['class'=>'validate','data-error'=>'.errorTxt7','id'=>'localidad'])!!}
                               {!!Form::label('Localidad:')!!}
                                <div class="errorTxt7 red-text"></div>
                         </div>  

                        <div class="input-field col s5">
                          <div>
                              <i class="material-icons prefix ">local_library</i>
                              {!!Form::text('postal',null,['class'=>'validate','data-error'=>'.errorTxt8','id'=>'postal'])!!}
                              {!!Form::label('Codigo Postal:')!!}
                               <div class="errorTxt8 red-text"></div>
                              </div>
                        </div> 



                        <div class="clearfix"></div>

                          <div class="file-field input-field col s7 offset-s1"">
      
                            <div class="btn col s3 #880e4f pink darken-4" id="file1">
                             <i class="fa fa-user"></i>
        
                             {!!Form::file('path',null,['id'=>'file2'])!!}
                            </div>
                            <div class="file-path-wrapper" >
                             <input class="file-path validate" placeholder="Seleccione una imagen de perfil" type="text" id="file3">
                             
                            </div>
                           </div>




                      </div>
                      <br><br>
                  </div>
    
                 </div>

                    <div class="card-action ">
                         
                          {!!Form::button('<i class="material-icons">send</i> ', array('class'=>'btn-floating btn-large z-depth-2 #b71c1c red darken-4 right waves-effect waves-light','type'=>'submit','id'=>'enviar')) !!}      
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
                window.onload = function () {

// Variable global por estar declarada sin hacer uso de var

                elementosEnForm = document.forms['infanteUpdateForm'].elements;

                for (var i=0; i< elementosEnForm.length; i++) {

                if (elementosEnForm[i].type != 'checkbox') {elementosEnForm[i].disabled = true;}

                else {elementosEnForm[i].addEventListener('click', activarElementos);}

          }

          }

 

              function activarElementos() { for (var i=0; i<elementosEnForm.length; i++) {elementosEnForm[i].disabled=false;} }
         </script>

 


@stop
