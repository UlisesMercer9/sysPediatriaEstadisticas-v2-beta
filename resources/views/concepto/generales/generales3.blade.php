
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


    <div class="clearfix"></div>
   <br><br>


<div class="row col-lg-12">
         <div class="margin">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <h3 class="panel-title"><strong> <i class="fa fa-child"></i>   Generales / {!!link_to_route('concepto.edit', $title = 'Específicos', $parameters = $cubo->id_infante)!!}</strong></h3>
               </div>
                         <div class="panel-body">
                         @include('alerts.success')

                         
                         <div class="container">
                           <div class="row">
                         
                         <article class="col-lg-12">
                          
                         <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo1',$cubo->id_infante)}}" class=" btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>1</a>
                         </div>

                         <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo2',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>2</a>
                         </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo3',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>3</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo4',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>4</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo5',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>5</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo6',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>6</a>
                          </div>
                           
                          </article> 
                          
                          <div class="clearfix"></div>
                          <br><br>

                          <article class="col-lg-12">

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo7',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>7</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo8',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>8</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo9',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>9</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">  
                          <a href="{{ route ('concepto.cubo10',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>10</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo11',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>11</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo12',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>12</a>
                          </div>

                          </article>

                          <div class="clearfix"></div>
                          <br><br>
                          
                          <article class="col-lg-12">

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo13',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>13</a>
                          </div>

                          <div class="col-lg-2 col-xs-3">
                          <a href="{{ route ('concepto.cubo14',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>14</a>
                          </div>


                         </article>
                          
                          </div>

                         </div>

                        
                         </div>
                           <div class="panel-footer"></div>
                     </div>

                   </div>
               </div>
           
</div>