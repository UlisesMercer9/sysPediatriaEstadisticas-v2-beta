@extends('layouts.admin')

@section('content')


 <!--Contenedor principal-->
<div class="row container">

  <br><br>

  <nav class="col s12 m12 l5 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Especialistas</a>
        <a href="#!" class="breadcrumb">Nuevo</a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

   <!--Inicio del formulario para crear un nuevo especialista-->
           <div class="col s12">
              <div class="card z-depth-3">
                
                {!!Form::open(['route'=>'especialista.store','method'=>'POST','id'=>'EspeCreateForm','files'=>true])!!}
                   <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;<i class="fa fa-user-md white-text"></i>&nbsp; Especialista</h5>             
                    </div>
                  
                  <br><br>
                  
                <div class="card-stacked">
                   <div class="row">
                      <div class="card-content">
                          @include('especialista.form.especialista')
                      </div>
                      <br><br>
                  </div>
    
                 </div>

                  <div class="card-action ">
                         
                          {!!Form::button('<i class="material-icons">send</i> ', array('class'=>'btn-floating btn-large z-depth-2 right waves-effect waves-light #b71c1c red darken-4','type'=>'submit')) !!}      
                 </div>
                 
                    {!!Form::close()!!}
                </div>        
              </div>
           <!--FIN DEL FORMULARIO--> 

  </div>
    <!--Fin Contenedor principal-->
 
 <!--Margen en blanco-->
 <div id="spacer">
   
 </div>
 <!--Margen en blanco-->


@endsection

