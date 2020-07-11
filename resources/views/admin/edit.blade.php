@extends('layouts.admin')

@section('content')



  <!--Contenedor principal-->
<div class="row container">

<br><br>

  <nav class="col s12 m12 l6 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Administradores</a>
        <a href="#!" class="breadcrumb">Modificar </a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>


     <!--Inicio del formulario para editar un administrador-->
 
   <div class="col s12">
              <div class="card z-depth-3">
                
                {!!Form::model($user,['route'=>['admin.update',$user->id],'method'=>'PUT','name'=>'AdminUpdateForm','id'=>'AdminUpdateForm','files'=>true])!!}
                   <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;<i class="fa fa-user white-text"></i>&nbsp; Administrador
                    <div class="switch right">
                        <label >
                           <input type="checkbox">
                           <span class="lever"></span>
                        </label>
                      </div>  
                      </h5>             
                    </div>
                  
                <div class="card-stacked">
                   <div class="row">
                      <div class="card-content">
                               <div class="input-field col s10 offset-s1">
                                     <i class="material-icons prefix ">person</i>
                                     {!!Form::text('name',null,['id'=>'name', 'data-error'=>'.errorTxt1','class'=>'validate'])!!}
                                     {!!Form::label('name','Nombre:')!!}
                                     <div class="errorTxt1 red-text"></div>
                               </div>


                               <div class="clearfix"></div>

                                <div class="input-field col s5 offset-s1">
                                     <i class="material-icons prefix ">vpn_key</i>
                                     {!!Form::password('password',['id'=>'password', 'data-error'=>'.errorTxt3', 'class'=>'validate'])!!}
                                     {!!Form::label('Contraseña:')!!}
                                     <div class="errorTxt3 red-text"></div>

                                </div>

                                <div class="input-field col s5 ">
                                     <i class="material-icons prefix ">vpn_key</i>
                                     {!!Form::password('password2',['id'=>'password2', 'data-error'=>'.errorTxt4', 'class'=>'validate'])!!}
                                     {!!Form::label('Confirma la Contraseña:')!!}
                                     <div class="errorTxt4 red-text"></div>
                                </div>

                                <div class="clearfix"></div>

                              <div class="file-field input-field col s8 offset-s1">
      
                                <div class="btn col s3  #880e4f pink darken-4 img">
                                <i class="fa fa-user"></i>
        
                                {!!Form::file('path',null,['id'=>'path','data-error'=>'.errorTxt5', 'class'=>'validate'])!!}

                                </div>
                                <div class="file-path-wrapper">
                                <input class="file-path validate" data-error=".errorTxt5" placeholder="Seleccione una imagen de perfil" type="text">
        
                                </div>
                              </div>
                           
                      </div>
                      <br><br>
                  </div>
    
                 </div>

                  <div class="card-action ">
                         {!!Form::button('<i class="material-icons">send</i> ', array('class'=>'btn-floating btn-large z-depth-2 right waves-effect waves-light #b71c1c red darken-4','type'=>'submit','onclick'=>'return confirm("¿Seguro que deseas editar este registro?")')) !!}    
                 </div>
                 
                    {!!Form::close()!!}
                </div>        
          </div>
          
      <!--FIN DEL FORMULARIO-->  
           

  </div>
  < <!--Fin Contenedor principal-->
 
 <!--Margen en blanco-->
 <div id="spacer" >
   
 </div>
 <!--Margen en blanco-->


  <script>
    window.onload = function () {

// Variable global por estar declarada sin hacer uso de var

elementosEnForm = document.forms['AdminUpdateForm'].elements;

for (var i=0; i< elementosEnForm.length; i++) {

                if (elementosEnForm[i].type != 'checkbox') {elementosEnForm[i].disabled = true;}

                else {elementosEnForm[i].addEventListener('click', activarElementos);}

}

}

 

function activarElementos() { for (var i=0; i<elementosEnForm.length; i++) {elementosEnForm[i].disabled=false;} }
  </script>



@endsection
