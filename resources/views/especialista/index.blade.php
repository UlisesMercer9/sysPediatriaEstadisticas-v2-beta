@extends('layouts.admin')
 
         
@section('content')

 
  <!--main admin-->       
  <div id="main-admin"> 

  <br>

<!--Ciclo admin-->
   <div class="row container">


  <nav class="col s12 m6 l4 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4  z-depth-2">
      <div class="col s12">
        <a href="#!" class="breadcrumb">&nbsp; Especialistas</a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

   
    @include('alerts.success')

    @foreach($users as $especialista)
          <div class="col s12 m6 l4">
            <div class="card sticky-action scale">

              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="/perfil/thumb_{{ $especialista->path}}">
                
              </div>

              <div class="card-content blue-grey darken-3 white-text">
                <span class="card-title activator white-text ">{{$especialista->nombre}}<i class="material-icons right">more_vert</i></span>

                <p>{{$especialista->apellidos}}</p>
              </div>

              <div class="card-action blue-grey darken-4 white-text">
                {!!link_to_route('especialista.edit', $title = '', $parameters = $especialista->id, $attributes = ['class'=>'white-text fa fa-book fa-2x tooltipped', 'data-position'=>'left','data-delay'=>'50', 'data-tooltip'=>'Información del Especialista'])!!} 
                 <a href="{{ route('especialista.destroy', $especialista->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este registro?')" class="white-text fa fa-trash-o fa-2x tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar Especialista"></a>
              </div>

              <div class="card-reveal blue-grey darken-3 white-text">
                <span class="card-title white-text">{{$especialista->especialidad}}<i class="material-icons right">close</i></span>
                <br>
                <p>Cedula: <br>{{$especialista->cedula}}</p>
                <br>
                <p>correo: <br>{{$especialista->email}}</p>
                <br>  
                <p>tel: <br>{{$especialista->telefono}}</p>
                <br>
                <p>organización: <br>{{$especialista->organizacion}}</p>
              </div>

            </div>
          </div>
    @endforeach



    <div class="clearfix"></div>
   <br><br><br>

     <div class="col s12 pagination">
        {!! $users->render() !!}
    </div>

  </div>
  <!--Ciclo admin-->
             
             <!--button fixed--> 
            <div class="fixed-action-btn horizontal click-to-toggle " style="bottom: 45px; right: 24px;">
              <a class="btn-floating btn-large #b71c1c red darken-4 z-depth-3 btn tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Agregar Especialista" href="{!!URL::to('/especialista/create')!!}" >
                <i class="material-icons">person_add</i>
              </a>
            </div>
            <!--button fixed--> 
          
 </div> 
<!--main admin-->   

 <!--Margen en blanco-->
 <div id="spacer">
   
 </div>
 <!--Margen en blanco-->




@endsection
