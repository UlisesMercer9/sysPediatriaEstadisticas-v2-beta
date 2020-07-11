@extends('layouts.doctor')

@section('content')





   <!--Ciclo admin-->
<div class="row container">

  <br><br>

  <nav class="col s12 m12 l5 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Pacientes</a>
        <a href="#!" class="breadcrumb">Nuevo</a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

 
      <div class="col s12 m12 s12">
            
            {!!Form::open(['route'=>'infante.store','method'=>'POST','id'=>'infanteCreateForm','files'=> true])!!}
            
            <div class="card z-depth-3 col s12">
  
                  <div class="card-tittle #880e4f pink darken-4 "><h5 class="white-text form-title">&nbsp;&nbsp;<i class="fa fa-child white-text"></i>&nbsp; Paciente</h5></div>
                  <br><br>
                  
                <div class="card-stacked">
                   <div class="row">
                      <div class="card-content">
                         @include('alerts.request')

                         @include('infante.form.infantes')
                      </div>
                      <br><br>
                  </div>
                 </div>

                  <div class="card-action ">
                            
                 </div>     
            </div> 

              <br><br>

              <div class="card z-depth-3 col s12">
                  <div class="card-tittle #880e4f pink darken-4 "><h5 class="white-text form-title">&nbsp;&nbsp;<i class="fa fa-user-secret white-text"></i>&nbsp; Tutor</h5></div>
                  <br><br>
                  
                <div class="card-stacked">
                   <div class="row">
                      <div class="card-content">
                           @include('tutor.form.tutores')
                      </div>
                      <br><br>
                  </div>
    
                 </div>

                  <div class="card-action ">
                         
                          {!!Form::button('<i class="material-icons">send</i> ', array('class'=>'btn-floating btn-large z-depth-2 right waves-effect waves-light #b71c1c red darken-4','type'=>'submit')) !!}      
                 </div>
                   
                </div> 

              {!!Form::close()!!}
       </div>            


                      
   
      </div>
           


  <!--Ciclo admin-->  
 
 <!--Margen en blanco-->
 <div id="spacer">
   
 </div>
 <!--Margen en blanco-->



@endsection
