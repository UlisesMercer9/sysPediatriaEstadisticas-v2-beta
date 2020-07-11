<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="icon" href="/img/deer-2.png" sizes="32x32">
</head>
<body>
  <header>
    <div class="navbar-fixed">
      <nav id="banner" class="#880e4f pink darken-4">
       <div class="nav-wrapper "> 
        <a href="#" class="brand-logo"></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Equipo</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
         <ul class="side-nav" id="mobile-demo">
         <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Equipo</a></li>
            <li><a href="#">Contacto</a></li>
         </ul>
       </div>
     </nav>
   </div>

    
  </header>

  <main>
    
         <div>
          <br>
          <br>
         </div>
        
           <div class="row">
         
            <div class="col s12 m12 l5 offset-l2 ">
              <div class="card large z-depth-3 ">
                <div class="row">
                  
                   {!!Form::open(['route'=>'log.store', 'method'=>'POST', 'class'=>'col s12'])!!}
                    <div class="row">

                      @include('alerts.errors')
                     <div class="container">
                      <div class="input-field col s4 offset-s4 l8 offset-l4 ">
                        <br>
                         <img width="90px" height="95px" width="130" src="/img/deer-2.png" alt="">
                      </div>
                     
                     </div>
                     

                     <div class="space2"></div>
                      <div class="clearfix"></div>
                       <br>
                      <div class="input-field col s8 l8 offset-s2 offset-l2">
                        <i class="material-icons prefix">account_circle</i> 
                        {!!Form::email('email',null,['class'=>'validate','id'=>'correo'])!!}
                        {!!Form::label('correo','Correo:')!!}
                      </div>
                     
                     <div class="input-field">
                        <div class="space2"></div>
                      </div>

                      <div class="input-field col s8 l8 offset-s2 offset-l2">
                        <i class="material-icons prefix">vpn_key</i>
                        {!!Form::password('password',['class'=>'validate','id'=>'contraseña'])!!}
                         {!!Form::label('contrasena','Contraseña')!!}
                      </div>

                     <div class="clearfix"></div>

                     <div class="card-action">
                        
                  {!!Form::button('<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Entrar</span> <i class="material-icons right">send</i>', array('class'=>'btn-large waves-effect waves-light col s12 l10 offset-l1 #b71c1c red darken-4','type'=>'submit'))!!}  
                         
                     </div>
                     
                    </div>
                  {!!Form::close()!!}
                </div>        
              </div>
            </div>

          </div>
       
       <div>
          <br>
          <br>
         </div>

 
  </main>

   <footer class="page-footer #880e4f pink darken-4">
      <div class="container ">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
  </footer>

  <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
  <script src="{{ asset('/js/materialize.min.js') }} "></script>

  <script>
   $(document).ready(function() {
      $(".button-collapse").sideNav({
        menuWidth: 300,
      });
   
        $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0,  // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );
     });
  </script>
  
</body>
</html>