


<div class="row container">

<br><br>

 <nav class="col s12 m6 l6 #ffffff white no-border">
    <div class="nav-wrapper #880e4f pink darken-4 z-depth-2">
      <div class="col s12">
        <a href="{{ URL::previous() }}" class="breadcrumb">&nbsp; Inicio</a>
        <a href="#!" class="breadcrumb active">Resultados</a>
        
      </div>
    </div>
   </nav>


    <div class="clearfix"></div>
   <br><br>


     <div class="col s12 m12 l12">
        <div class="card large z-depth-3">
                

          
              <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;&nbsp; Generales
                     @foreach($analogicos as $analogico)
                      @endforeach
                  </h5>               
              </div>
                  <br><br>
              <div >
              
                 <div class="card-stacked" id="container2">
               
    
                 </div>

                </div>
                    
         </div>        
   </div>

<div class="clearfix"></div>



    <!--Margen en blanco-->
 <div id="spacer">
   
 </div>
 <!--Margen en blanco-->

</div>


              <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>

                <script type="text/javascript">
                                   $(function () {
                                     $('#container2').highcharts({
                                         chart: {
                                             type: 'area'
                                         },
                                         title: {
                                             text: '<strong>TEST ANALÓGICO</strong>'
                                         },
                                         xAxis: {
                                             categories: ['<a href="{{ route ('concepto.detalle5',$analogico->id_infante)}}">Organización perceptual</a>',
                                             '<a href="{{ route ('concepto.detalle6',$analogico->id_infante)}}">Habilidad de razonamiento</a>',
                                             '<a href="{{ route ('concepto.detalle7',$analogico->id_infante)}}">Atención a detalles</a>',
                                             '<a href="{{ route ('concepto.detalle8',$analogico->id_infante)}}">Concentración</a>',
                                             '<a href="{{ route ('concepto.detalle9',$analogico->id_infante)}}">Visión</a>',
                                             '<a href="{{ route ('concepto.detalle95',$analogico->id_infante)}}">Persistencia</a>',
                                             '<a href="{{ route ('concepto.detalle10',$analogico->id_infante)}}">Puntuación escalar</a>']
                                         },
                                         credits: {
                                             enabled: false
                                         },
                                         series: [
                                          @foreach($analogicos as $analogico)
                                          {
                                            name: '<font size=1>{{$analogico->fecha_aplicacion_test}}</font>',
                                            data: [
                                             {{$analogico->organizacion_perceptual}},
                                             {{$analogico->habilidad_de_razonamiento}},
                                             {{$analogico->atencion_a_detalles}},
                                             {{$analogico->concertacion}},
                                             {{$analogico->vision}},
                                             {{$analogico->persistencia}},
                                             {{$analogico->puntuacion_escalar}},
                                           ]},
                                           @endforeach
                                           ]
                                     });
                                  });

                                    </script>