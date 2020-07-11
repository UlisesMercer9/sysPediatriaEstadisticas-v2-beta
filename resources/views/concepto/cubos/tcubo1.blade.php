@extends('layouts.doctor')

@section('content')

@foreach($cubos as $cubo)
@endforeach


<div class="row container">

<br><br>


 <nav class="col s12 m16 l6 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Inicio</a>
        <a href="#!" class="breadcrumb">Resultados</a>
        
      </div>
    </div>
   </nav>



   <div class="col s12 m12 l12">
        <div class="card large z-depth-3">
                

          
              <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;&nbsp; Generales
                    
                  </h5>               
              </div>
                  <br><br>
              <div >
                   
                 <div class="card-stacked" id="container3">
               
          
                 </div>

                </div>
                 
         </div>        
   </div>

<div class="clearfix"></div>


        <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>

                <script type="text/javascript">
                                   $(function () {
                                     $('#container3').highcharts({
                                         chart: {
                                             type: 'area'
                                         },
                                         title: {
                                             text: '<strong>TEST FIGURAS</strong>',
                                         },
                                         xAxis: {
                                             categories: ['<a href="{{ route ('concepto.detalle11',$cubo->id_infante)}}">numero de intentos</a>',
                                                       '<a href="{{ route ('concepto.detalle12',$cubo->id_infante)}}">numero de rotaciones</a>',
                                                       '<a href="{{ route ('concepto.detalle13',$cubo->id_infante)}}">puntaje individual</a>']
                                         },
                                         credits: {
                                             enabled: false
                                         },
                                         series: [
                                          @foreach($cubos as $cubo)
                                          {
                                            name: '<font size=1>{{$cubo->fecha_aplicacion_test}}</font>',
                                            data: [
                                              {{ $cubo->numero_de_intentos_1 }}, 
                                              {{ $cubo->numero_de_rotaciones_1 }},
                                              {{ $cubo->puntaje_1}},
                                           ]},
                                           @endforeach
                                           ]
                                     });
                                  });

                                    </script>








</div>



                      
                      
 
    <script type="text/javascript">
    $(function () {
        $('#container').highcharts({
          chart: {
              type: 'column'
          },
          title: {
              text: '<strong> Test Cubos </strong> <br> Aplicado en {{$cubo->fecha_aplicacion_test}} <br> Hora de inicio del Test {{$cubo->tiempo_de_inicio}} <br>'
          },
          subtitle: {
              text: ' Item No.{{$cubo->numero_de_item_1}}<br>Tiempo limite {{$cubo->tiempo_limite_1}}<br>Diseño correcto {{$cubo->diseño_correcto_1}} '

          },
          xAxis: {
              type: 'category',
              labels: {
                  rotation: -45,
                  style: {
                      fontSize: '13px',
                      fontFamily: 'Verdana, sans-serif'
                  }
              }
          },
          yAxis: {
              min: 0,
              title: {
                  text: 'tiempo de ejecución en {{$cubo->tiempo_de_ejecucion_1}}'
              }
          },
          legend: {
              enabled: false
          },
          tooltip: {
              pointFormat: ''
          },
         series: [{
             name: 'Population',
             data: [
              ['<a href="{{ route ('concepto.detalle11',$cubo->id_infante)}}">numero de intentos</a>', {{$cubo->numero_de_intentos_1}}],
              ['<a href="{{ route ('concepto.detalle12',$cubo->id_infante)}}">numero de rotaciones</a>', {{$cubo->numero_de_rotaciones_1}}],
              ['<a href="{{ route ('concepto.detalle13',$cubo->id_infante)}}">puntaje individual</a>', {{$cubo->puntaje_1}}],


             ],
         dataLabels: {
             enabled: true,
             rotation: -90,
             color: '#FFFFFF',
             align: 'right',
             format: '{point.y:.1f}', // one decimal
             y: 10, // 10 pixels down from the top
             style: {
                 fontSize: '13px',
                 fontFamily: 'Verdana, sans-serif'
             }
         }
     }]
   });
   });

     </script>
    </div>

                    


                        
                         </div>
                           <div class="panel-footer"></div>
                     </div>

                   </div>
               </div>

@endsection
