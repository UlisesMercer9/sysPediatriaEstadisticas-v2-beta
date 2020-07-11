
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Materialize</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/flash.css') }}">
    <link rel="icon" href="/img/deer-2.png" sizes="32x32">
</head>
<body>

<!-- Start Page Loading -->

  
  <header>
    
    <div class="navbar-fixed">
      <nav class="banner">
       <div class="nav-wrapper #880e4f pink darken-4 row"> 
        <div class="col l12">

          <a href="#"  class="brand-logo hide-on-med-and-down">
            <img id="logo" width="90px" height="75px" src="/img/deer-2.png" alt="">
          </a>

          <a href="#"  class="brand-logo hide-on-med-and-up">
            <img  width="90px" height="75px" src="/img/deer-2.png" alt="">
          </a>

        </div>
         <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
           <li class="mobil-2">
               <a id="opcion1" href="#">
                <img src="/perfil/thumb_{{Auth::especialista()->get()->path}}" class="circle user-image-2 z-depth-2 left" alt="User imagen">
    
                <span class="right">{!!Auth::especialista()->get()->nombre!!} {!!Auth::especialista()->get()->apellidos!!}</span>
               </a>
             </li>
           <li class="mobil-2 ">
              <a id="opcion2" class="dropdown-button" href="#" data-activates="dropdown1">
                <i class="material-icons">more_vert</i>
              </a>
           </li>
           </ul>

 
         
       </div>
     </nav>


      <!--    MENU LATERAL   -->

                     <!--MENU DISPOSITIVO MOVIL-->  
      <ul id="slide-out" class="side-nav fixed row menu blue-grey darken-4 right ">

        <div id="blank-space"></div>
        <div class="truncate"></div>
        <div class="space">
           <div class="col s3">
             <img src="/perfil/thumb_{{Auth::especialista()->get()->path}}" class="circle user-image z-depth-2" alt="User imagen">
           </div>
           <div class="col s9">
             <p class="left-align white-text name-text">{!!Auth::especialista()->get()->nombre!!} {!!Auth::especialista()->get()->apellidos!!}</p>   
          </div>       
        </div>

        <div class="truncate margin"></div>
      

        <div class="card-panel #000000 black z-depth-2">
            <span class="grey-text">MENÚ</span>
        </div>
          
              <li class="active">
                 <a href="{!!URL::to('/infante')!!}" class="opcion white-text waves-effect waves-light">
                    <i class="fa fa-child"></i>
                    &nbsp;&nbsp;Pacientes
                 </a>
              </li>
              <li class="divider hide-on-med-and-up"></li>
              <li class="hide-on-med-and-up">
                  <a href="{!!URL::to('/logout')!!}" class="opcion blue-grey darken-4 white-text">
                    <i class="fa fa-sign-out"></i> 
                    &nbsp;&nbsp;Cerrar sesión 
                  </a>
               </li>
           

        </ul>
                   <!--FIN DEL MENU-->

        <!--   FIN DEL MENU LATERAL  -->

   </div>

   <!-- Inicio del Dropdown -->
    <ul id="dropdown1" class="dropdown-content">
      <li>
        <a href="{!!URL::to('/logout')!!}" class="blue-grey darken-4 white-text">
          <i class="fa fa-sign-out"></i> 
          Cerrar sesión 
        </a>
      </li>
    </ul>
    <!--Fin del Dropdown-->
       
  </header>



  <main >
    @yield('content')

 
  </main>

  <footer class="page-footer #880e4f pink darken-4" >
      <div class="container ">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Sitios</h5>
                <ul >
                  <li class="grey-text"><a class="grey-text text-lighten-1" href="http://www.conacyt.gob.mx/">Conacyt</a></li>
                  <li class="grey-text"><a class="grey-text text-lighten-1" href="http://www.ave.com.mx/Inicio/">Aula Verde Educativa</a></li>
                  <li class="grey-text"><a class="grey-text text-lighten-1" href="http://www.itsm.edu.mx/">Instituto Tecnologico Superior de Misantla</a></li> 
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright 
            <a class="grey-text text-lighten-4 right" href="http://msc.itsm.edu.mx/">msc.itsm.edu.mx</a>
            </div>
          </div>

  </footer>


  <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
  <script src="{{ asset('/js/materialize.min.js') }} "></script>
  <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('/js/additional-methods.min.js') }}"></script>
  <script src="{{ asset('/js/validation3.js') }}"></script>
  <script src="{{ asset('/js/highcharts.js') }}"></script>
  <script src="{{ asset('/js/exporting.js') }}"></script>
  <script src="{{ asset('/js/pace.min.js') }}"></script>
  <script>


   $(document).ready(function() {
       $(".button-collapse").sideNav({
        menuWidth: 300,
        edge: 'left',
        closeOnClick: false,
      });
   

       $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0,  // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    });
          
    }
  );

     
     $('#estado').on('change',function(e){
        
          console.log(e);
         
          var esta_id = e.target.value;

          $.get('/ajax-ciudad?esta_id=' + esta_id, function(data){
              
               $('#ciudad').empty();
               $.each(data, function(index, estaObj){
            
                $('#ciudad').append('<option value="' + estaObj.nombre +'">'+estaObj.nombre+'</option>');
         
               });
          });

       }); 


      $('#estado2').on('change',function(e){
        
          console.log(e);
         
          var esta_id = e.target.value;

          $.get('/ajax-ciudad?esta_id=' + esta_id, function(data){
              
               $('#ciudad2').empty();
               $.each(data, function(index, estaObj){
            
                $('#ciudad2').append('<option value="' + estaObj.name +'">'+estaObj.name+'</option>');
         
               });
          });

       }); 

      $('#estadoTutor').on('change',function(e){
        
          console.log(e);
         
          var esta_id = e.target.value;

          $.get('/ajax-ciudad?esta_id=' + esta_id, function(data){
              
               $('#ciudadTutor').empty();
               $.each(data, function(index, estaObj){
            
                $('#ciudadTutor').append('<option value="' + estaObj.name +'">'+estaObj.name+'</option>');
         
               });
          });

       }); 


  </script>
    
  
</body>
</html>