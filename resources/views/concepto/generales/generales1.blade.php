

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


    <div class="clearfix"></div>
   <br><br>

   
<!--Plot-->
  <div class="col s12 m12 l12">
        <div class="card large z-depth-3">
                

          
              <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;&nbsp; Generales
                     @foreach($conceptos as $concepto)
                      @endforeach
                  </h5>               
              </div>
                  <br><br>
              <div >
              
                 <div class="card-stacked" id="container1">
               
    
                 </div>

                </div>
                    
         </div>        
   </div>
   <!---->

<div class="clearfix"></div>






  </div>

  
       <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>

         <script type="text/javascript">
                       $(function () {
                            $('#container1').highcharts({
       chart: {
           type: 'area'
       },
       title: {
           text: '<strong>TEST CONCEPTOS</strong>'
       },
       xAxis: {
           categories: ['<a href="{{ route ('concepto.detalle1',$concepto->id_infante)}}">Numero de items</a>',
           '<a href="{{ route ('concepto.detalle2',$concepto->id_infante)}}">Respuesta fila 1</a>',
           '<a href="{{ route ('concepto.detalle3',$concepto->id_infante)}}">Respuesta fila 2</a>',
           '<a href="{{ route ('concepto.detalle4',$concepto->id_infante)}}">Puntuación</a>']
       },
       credits: {
           enabled: false
       },
       series: [
        @foreach($conceptos as $concepto)
        {
          name: '<font size=1>{{$concepto->fecha_aplicacion_test}} <br> tiempo inicio {{$concepto->tiempo_inicio}} <br> tiempo final {{$concepto->tiempo_total}} </font>',
          data: [
           {{$concepto->numero_de_item}},
           {{$concepto->respuesta_fila_1}},
           {{$concepto->respuesta_fila_2}},
           {{$concepto->puntuacion}},
         ]},
         @endforeach
         ]
                            });
                         });
          </script>












