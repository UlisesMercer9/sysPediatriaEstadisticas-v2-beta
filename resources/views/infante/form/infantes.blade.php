<div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">person</i>
          {!!Form::text('nombre',null,['class'=>'validate','data-error'=>'.errorTxt1','id'=>'nombre'])!!}
          {!!Form::label('nombre','Nombre:')!!}
          <div class="errorTxt1 red-text"></div>
    </div>

     <div class="input-field col m6 s12 l5 ">
          <i class="material-icons prefix">person</i>
          {!!Form::text('apellido',null,['class'=>'validate','data-error'=>'.errorTxt2','id'=>'apellido'])!!}
          {!!Form::label('apellido','Apellidos:')!!}
          <div class="errorTxt2 red-text"></div>
    </div>

    <div class="clearfix"></div>
    
    <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">cake</i>
          {!!Form::text('edad',null,['class'=>'validate','data-error'=>'.errorTxt3','id'=>'icon'])!!}
          {!!Form::label('edad','Edad:')!!}
          <div class="errorTxt3 red-text"></div>
    </div>

   <div class="input-field col s12 m6 l6 ">
      
       <i class="material-icons prefix ">wc</i>
                               
       {!!Form::radio('sexo', 'masculino', null,['id' => 'sexo1','class'=>'with-gap col l2','data-error'=>'.errorTxt4'])!!}<label for="sexo1">Masculino</label>
       {!!Form::radio('sexo', 'femenino',null, ['id' => 'sexo2','class'=>'with-gap col l2','data-error'=>'.errorTxt4']) !!}<label for="sexo2">Femenino</label>
       
       <div class="errorTxt4 red-text"></div>
   </div> 

    <div class="clearfix"></div>

    <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">location_city</i>
          {!!Form::select('estado',$states,null,['id'=>'estado','class'=>'browser-default col s10 offset-s2','placeholder'=>'Seleccione el estado','data-error'=>'.errorTxt5'])!!}
          <div class="errorTxt5 red-text"></div>
    </div>
         
    <div class="input-field col s12 m6 l5">
          <i class="material-icons prefix">location_city</i>
          {!!Form::select('ciudad',[],null,['class'=>'browser-default col s10 offset-s2','placeholder'=>'Seleccione el estado','data-error'=>'.errorTxt6','id'=>'ciudad'])!!}
          
          <div class="errorTxt6 red-text"></div>
    </div> 

    <div class="clearfix"></div>

     <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix ">person_pin_circle</i>
          {!!Form::text('localidad',null,['class'=>'validate','data-error'=>'.errorTxt7','id'=>'localidad'])!!}
          {!!Form::label('localidad','Localidad:')!!}
          <div class="errorTxt7 red-text"></div>
          
    </div>  

    <div class="input-field col s12 m6 l5">
      <div>
          <i class="material-icons prefix ">local_library</i>
          {!!Form::text('postal',null,['class'=>'validate','data-error'=>'.errorTxt8','id'=>'postal'])!!}
          {!!Form::label('postal','Codigo Postal:')!!}
          <div class="errorTxt8 red-text"></div>
          </div>

    </div> 

    <div class="clearfix"></div>

     <div class="clearfix"></div>

      <div class="file-field input-field col s12 m6 l8 offset-l1">  
       <div class="btn col s3  #880e4f pink darken-4 img">
        <i class="fa fa-user"></i>
        
        {!!Form::file('path',null,['id'=>'path', 'class'=>'validate'])!!}

       </div>
       <div class="file-path-wrapper">
        <input class="file-path validate" placeholder="Seleccione una imagen de perfil" data-error=".errorTxt5" type="text">   
       </div>
      </div>

    

<div class="clearfix"></div>
    

    

