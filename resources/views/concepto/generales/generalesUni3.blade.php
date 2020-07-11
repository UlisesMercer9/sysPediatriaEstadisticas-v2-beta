@foreach($cubos as $cubo)
@endforeach

<div class="container row">
 <div class="clearfix"></div>
   <br><br>


     <div class="col s12 m12 l12">
        <div class="card large z-depth-3">
                

          
              <div class="card-tittle #880e4f pink darken-4 ">
                  <h5 class="white-text form-title">&nbsp;&nbsp;&nbsp; Generales  <!-- {!!link_to_route('concepto.edit', $title = 'Específicos', $parameters = $cubo->id_infante, $attributes = ['class'=>'white-text'])!!}-->
                     
                  </h5>               
              </div>
                  <br><br>
              <div >
              
                 <div class="card-stacked" id="container2">
                      <article class="col l12">
                          
                         <div class="col l2">
                          <a href="{{ route ('concepto.cubo1',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>1</a>
                         </div>

                         <div class="col l2">
                          <a href="{{ route ('concepto.cubo2',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>2</a>
                         </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo3',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>3</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo4',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>4</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo5',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>5</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo6',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>6</a>
                          </div>
                           
                          </article> 
                          
                          <div class="clearfix"></div>
                          <br><br>

                          <article class="col l12">

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo7',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>7</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo8',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>8</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo9',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>9</a>
                          </div>

                          <div class="col l2">  
                          <a href="{{ route ('concepto.cubo10',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>10</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo11',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>11</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo12',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>12</a>
                          </div>

                          </article>

                          <div class="clearfix"></div>
                          <br><br>
                          
                          <article class="col l12">

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo13',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>13</a>
                          </div>

                          <div class="col l2">
                          <a href="{{ route ('concepto.cubo14',$cubo->id_infante)}}" class="btn btn-info" ><i class="fa fa-cube fa-5x"></i><br>14</a>
                          </div>


                         </article>
    
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