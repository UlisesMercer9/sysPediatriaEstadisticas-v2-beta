@if(Session::has('message-error'))

<script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>

<script>
  $(document).ready(function(){
  
    Materialize.toast(' {{Session::get('message-error')}}', 5000,'#c62828 red darken-3');
   
});
</script>


@endif