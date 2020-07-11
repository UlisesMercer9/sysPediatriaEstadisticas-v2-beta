@extends('layouts.doctor')

@section('content')


<div class="row container">

<br><br>

<nav class="col s12 m12 l6 #ffffff white no-border">
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
                  @foreach($conceptos as $concepto)
                 @endforeach
                    <h5 class="white-text form-title"><strong> <i class="fa fa-child"></i> {!!link_to_route('concepto.show', $title = 'Generales ', $parameters = $concepto->id_infante,['class'=>'white-text'])!!}/ Específicos </strong></h5>               
              </div>
                  <br><br>
              
                    @foreach($conceptos as $concepto)
                 <div class="card-stacked" id="container">
               
    
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

        

                                      <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
                                            <script type="text/javascript">
                                                            $(function () {
                                                                  $('#container').highcharts({
                                                                  chart: {
                                                                      type: 'line'
                                                                  },
                                                                  title: {
                                                                      text: ''
                                                                  },
                                                                  xAxis: {
                                                                      categories: [
                                                                        @foreach($conceptos as $concepto)

                                                                        'Test Aplicado en <br> {{$concepto->fecha_aplicacion_test}}',

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
                                                                    name: 'Respuesta de la fila 2',
                                                                      data: [
                                                                          @foreach($conceptos as $concepto)
                                                                            {{$concepto->respuesta_fila_2}},
                                                                          @endforeach
                                                                      ]
                                                                  }]
                                                                  });
                                                                  });


                                                            </script>



          @endsection
