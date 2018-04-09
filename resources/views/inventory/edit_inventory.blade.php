@extends('layouts.nav_side_bar')
@section('content')
<a href='{{ url('/farmers_list') }}' class='btn btn-primary'>Back To Listing</a>
    <form action='' method='POST' class="form-horizontal"> 
        <div class="control-group">
            <label class="control-label" for="f_no"> No:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="CCF****" name='f_no' value=''/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_id"> ID NO:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="4816****" name='f_id' value=''/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_name"> Name of Farmer:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="Name.." name='f_name' value=''/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_locallity"> Locality of Farmer:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="Area-X.." name='f_locallity' value=''/> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_ac"> Farmer's A/C NO:</label >
            <div class="controls">
                <input  class="input-xlarge" type="text" placeholder="Bank account number ******.." name='f_ac' value='' /> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="f_phone"> Farmer Phone NO:</label >
            <div class="controls">
                <input class="input-xlarge" type="text" placeholder="+254******.." name='f_phone'  value='' /> 
            </div>
        </div>
        <div class="control-group">

            <div class="controls">
                <input type='submit' value='Save' class="btn btn-success btn-large " /> 
                <input type='hidden' value='1' name='submitted' /> 
            </div>
        </div>
    </form>
    @endsection