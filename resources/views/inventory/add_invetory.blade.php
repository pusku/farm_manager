@extends('layouts.nav_side_bar')
@section('content')
       <a class="btn btn-large btn-primary" href="{{ url('/farmers_list') }}"><i class="icon-plus icon-white"></i>Back To Farmers</a><br/><br/>
      <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
<form action='{{ url('/addfarmers') }}' method='post' class="form-horizontal"> 
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="control-group">
        <label class="control-label" for="f_name"> Name of Farmer:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Name.." name='name'/> 
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_locallity"> Locality of Farmer:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Area-X.." name='land'/> 
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_ac"> Farmer's A/C NO:</label >
        <div class="controls">
            <input  class="input-xlarge" type="text" placeholder="Bank account number ******.." name='account_no'/> 
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="f_phone"> Farmer Phone NO:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="+254******.." name='phone'/> 
        </div>
    </div>
    <div class="control-group">

        <div class="controls">
            <input type='hidden' value='1' name='submitted' />
            <input type='submit' value='Add Farmer' class="btn btn-success btn-large" /> 
             
        </div>
    </div>
</form>
@endsection