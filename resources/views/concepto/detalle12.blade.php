



@extends('layouts.doctor')

@section('content')


<div class="row container">
 

 <br><br>

<nav class="col s12 m16 l6 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{!!URL::to('/infante')!!}" class="breadcrumb">&nbsp; Inicio</a>
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Resultados</a>
        <a href="#!" class="breadcrumb">Específicos</a>
        
      </div>
    </div>
  </nav>


    <div class="clearfix"></div>
   <br><br>

  <!--Plot-->
  <div class="col s12 m12 l12">
        <div class="card large z-depth-3">
                

          
              <div class="card-tittle #880e4f pink darken-4 ">
                  @foreach($cubos as $cubo)
                 @endforeach
                    <h5 class="white-text form-title"><strong> <i class="fa fa-child"></i>Específicos </strong></h5>               
              </div>
                  <br><br>
              
                    @foreach($cubos as $cubo)
                 <div class="card-stacked" id="container3">
               
    
                 </div>
                    @endforeach
                
                    
         </div>        
   </div>
   <!---->

<div class="clearfix"></div>



    <!--Margen en blanco-->
 <div id="spacer">
   
 </div>
 <!--Margen en blanco-->

</div>



                
                 <div class='container-fluid cold-lg-12' id="container">
                 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                   <style type="text/css">
                     ${demo.css}
                   </style>
                        <script type="text/javascript">
                        $(function () {
                              $('#container3').highcharts({
                              chart: {
                                  type: 'line'
                              },
                              title: {
                                  text: 'Evolución del Paciente '
                              },
                              xAxis: {
                                  categories: [
                                     @foreach($cubos as $cubo)

                                        'Test Aplicado en <br> {{$cubo->fecha_aplicacion_test}}',

                                     @endforeach
                                  ]
                              },
                              yAxis: {
                                  title: {
                                      text: 'Estadísticas'
                                  }
                              },
                              plotOptions: {
                                  line: {
                                      dataLabels: {
                                          enabled: true
                                      },
                                      enableMouseTracking: false
                                  }
                              },
                              series: [{
                                name: 'Numero de intentos',
                                  data: [
                                       @foreach($cubos as $cubo)
                                        {{$cubo->numero_de_rotaciones_1}},
                                       @endforeach
                                  ]
                              }]
                              });
                              });


                        </script>
                    </div>
                
@endsection