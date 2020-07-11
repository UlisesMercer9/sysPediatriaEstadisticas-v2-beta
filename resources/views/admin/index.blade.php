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
        <a href="#!" class="breadcrumb">&nbsp; Administradores</a>
        
      </div>
    </div>
   </nav>
  
   
   <div class="clearfix"></div>
   <br><br>

   
    @include('alerts.success')

   @foreach($users as $user)
    <div class="col s12 m6 l4">
       
    <div class="card horizontal small z-depth-3 scale">
      <div class="card-image">
        <img src="/perfil/thumb_{{ $user->path}}">
        <span class="card-title">{{$user->name}}</span>
      </div>
      <div class="card-stacked">
        <div class="card-content blue-grey darken-3 white-text">
          <p>{{$user->email}}</p>
        </div>
        <div class="card-action blue-grey darken-4 white-text">
          {!!link_to_route('admin.edit', $title = '', $parameters = $user->id, $attributes = ['class'=>'white-text fa fa-pencil fa-2x tooltipped', 'data-position'=>'left','data-delay'=>'50', 'data-tooltip'=>'Editar Administrador'])!!} 
          <a href="{{ route('admin.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este registro?')" class="white-text fa fa-trash-o fa-2x tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar Administrador"></a>
        </div>
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
              <a class="btn-floating btn-large #b71c1c red darken-4 z-depth-3 btn tooltipped waves-effect waves-light" data-position="left" data-delay="50" data-tooltip="Agregar Administrador" href="{!!URL::to('/admin/create')!!}" >
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
