    <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">person</i>
          {!!Form::text('nombreTutor',null,['class'=>'validate','data-error'=>'.errorTxt10','id'=>'nombreTutor'])!!}
          {!!Form::label('Nombre:')!!}
          <div class="errorTxt10 red-text"></div>
    </div>
    
     <div class="input-field col s12 m6  l5 ">
           <i class="material-icons prefix">person</i>
           {!!Form::text('apellidoTutor',null,['class'=>'validate','data-error'=>'.errorTxt11','id'=>'apellidosTutor'])!!}
           {!!Form::label('Apellidos:')!!}
           <div class="errorTxt11 red-text"></div>
     </div>

     <div class="clearfix"></div>

     <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">email</i>
          {!!Form::text('emailTutor',null,['class'=>'validate','data-error'=>'.errorTxt12','id'=>'emailTutor'])!!}
          {!!Form::label('Correo:')!!}
          <div class="errorTxt12 red-text"></div>
    </div>

    <div class="input-field col s12 m6  l5 ">
           <i class="material-icons prefix">vpn_key</i>
           {!!Form::password('passwordTutor',['class'=>'validate','data-error'=>'.errorTxt13','id'=>'passwordTutor'])!!}
           {!!Form::label('Contraseña:')!!}
           <div class="errorTxt13 red-text"></div>
     </div>

     <div class="clearfix"></div>

    <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">vpn_key</i>
          {!!Form::password('passwordTutor2',['class'=>'validate','data-error'=>'.errorTxt14','id'=>'passwordTutor2'])!!}
          {!!Form::label('Repita Contraseña:')!!}
          <div class="errorTxt14 red-text"></div>
    </div>

    <div class="input-field col s12 m6  l5 ">
           <i class="material-icons prefix">phone</i>
           {!!Form::text('telefonoTutor',null,['class'=>'validate','data-error'=>'.errorTxt15','id'=>'telefonoTutor'])!!}
           {!!Form::label('Telefono:')!!}
           <div class="errorTxt15 red-text"></div>
     </div>

     <div class="clearfix"></div>

     <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">location_city</i>
          {!!Form::select('estadoTutor',$states,null,['id'=>'estado2','class'=>'browser-default col s10 offset-s2','placeholder'=>'Seleccione el estado','data-error'=>'.errorTxt16',])!!}
         
          <div class="errorTxt16 red-text"></div>
    </div>

    <div class="input-field col s12 m6 l5 ">
           <i class="material-icons prefix">location_city</i>
          {!!Form::select('ciudadTutor',[], null,['id'=>'ciudad2','class'=>'browser-default col s10 offset-s2','placeholder'=>'Seleccione el estado','data-error'=>'.errorTxt17'])!!} 
          <div class="errorTxt17 red-text"></div>
     </div>

     <div class="clearfix"></div>

      <div class="input-field col s12 m6 l5 offset-l1">
          <i class="material-icons prefix">person_pin_circle</i>
          {!!Form::text('localidadTutor',null,['id'=>'localidadTutor','data-error'=>'.errorTxt18','class'=>'validate'])!!}
          {!!Form::label('Localidad:')!!}
          <div class="errorTxt18 red-text"></div>
    </div>

    <div class="input-field col s12 m6  l5 ">
           <i class="material-icons prefix">local_library</i>
          {!!Form::text('postalTutor',null,['id'=>'postal','data-error'=>'.errorTxt19','class'=>'validate'])!!}
          {!!Form::label('Codigo Postal:')!!}
          <div class="errorTxt19 red-text"></div>
          {!!Form::hidden('id_especialista',Auth::especialista()->get()->id)!!}
     </div>
    
     <div class="clearfix"></div>


 

     
