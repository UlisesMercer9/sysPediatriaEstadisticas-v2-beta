

@if(Session::has('message'))


<script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>

<script>
  $(document).ready(function(){
  
    Materialize.toast('{{Session::get('message')}}', 5000,'green accent-4');
   
});
</script>
   
@endif