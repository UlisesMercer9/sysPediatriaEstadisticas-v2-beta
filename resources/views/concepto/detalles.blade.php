@extends('layouts.doctor')

@section('content')



@if( ! empty($conceptos))

@include('concepto.generales.generales1')

@include('concepto.generales.generalesUni2')

@include('concepto.generales.generalesUni3')





@elseif( ! empty($analogicos))

@include('concepto.generales.generales2')

@elseif( ! empty($cubos))

 @include('concepto.generales.generales3')

@endif


       <section class=" connectedSortable">

        </section><!-- /.content -->
        <section class=" connectedSortable">

         </section><!-- /.content -->
         <section class=" connectedSortable">

          </section><!-- /.content -->
          <section class=" connectedSortable">

           </section>






          @endsection
