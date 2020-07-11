@extends('layouts.doctor')
        
@section('content')

 <div id="main-admin"> 

  <br>

<!--Ciclo admin-->
<div class="row container">

  <br><br>

  <nav class="col s12 m6 l4 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="#!" class="breadcrumb">&nbsp; Pacientes</a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

   
    @include('alerts.success')
       @foreach($users as $infante)
          <div class="col s12 m6 l4">
            <div class="card sticky-action z-depth-3 scale">

              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/perfil/thumb_{{ $infante->path}}">
                
              </div>

              <div class="card-content blue-grey darken-3 white-text">
                <span class="card-title activator white-text text-darken-4">{{$infante->nombre}}<i class="material-icons right">more_vert</i></span>
             
                <p>{{$infante->apellido}}</p>
              </div>

              <div class="card-action blue-grey darken-4 white-text">
               {!!link_to_route('concepto.show', $title = '', $parameters = $infante->id, $attributes = ['class'=>'fa fa-book fa-2x tooltipped white-text', 'data-position'=>'left','data-delay'=>'50', 'data-tooltip'=>'Informacion del Paciente'])!!}

               {!!link_to_route('tutor.edit', $title = '', $parameters = $infante->id, ['class'=>'fa fa-user-secret fa-2x tooltipped white-text', 'data-position '=>'bottom','data-delay'=>'50', 'data-tooltip'=>'Tutor del Paciente'])!!}

               {!!link_to_route('infante.edit', $title = '', $parameters = $infante->id, ['class'=>'fa fa-pencil fa-2x tooltipped white-text', 'data-position '=>'bottom','data-delay'=>'50', 'data-tooltip'=>'Editar datos del paciente'])!!}

               <a href="{{ route('infante.destroy', $infante->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este registro?')" class="fa fa-trash-o fa-2x tooltipped white-text" data-position="right" data-delay="50" data-tooltip="Eliminar paciente"></a>
               
              </div>

              <div class="card-reveal blue-grey darken-3 white-text">
                <span class="card-title white-text text-darken-4"><center>Datos Infantiles</center><i class="material-icons right">close</i></span>
                <br>
                <p>Edad: <br>{{ $infante->edad }}</p>
                <br>
                <p>Sexo: <br>{{ $infante->sexo }}</p>
                <br>  
                <p>localidad <br>{{ $infante->localidad }}</p>
                <br>
                <p>ciudad: <br>{{ $infante->ciudad }}</p>
              </div>

            </div>
          </div>
    @endforeach
 
 
    <div class="clearfix"></div>
   <br><br><br>

     <div class="col s12 pagination">
        
    </div>

  </div>
  <!--Ciclo admin-->
             
             <!--button fixed--> 
            <div class="fixed-action-btn horizontal click-to-toggle " style="bottom: 45px; right: 24px;">
              <a class="btn-floating btn-large #b71c1c red darken-4 z-depth-3 btn tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Agregar nuevo paciente" href="{!!URL::to('/infante/create')!!}" >
                <i class="material-icons">person_add</i>
              </a>
            </div>
            <!--button fixed--> 
          
 </div> 
<!--main admin-->   

 <!--Margen en blanco-->
 <div id="spacer">
   
 </div>

@endsection



