@extends('layouts.nav_side_bar')
@section('content')
      <h1>Deliveries</h1>
<br/>
<a href='{{ url('/deliveries') }}' class='btn btn-primary'>Back To Listing</a>
<form action='' method='POST' class="form-horizontal" name="delivery"> 
    <div class="control-group">
        <label class="control-label" for="r_f_no">Farmer No:</label >
        <div class="controls">
            <input id="f_no" class="input-xlarge" type="text" placeholder="CCF****" name='r_f_no' value=''/> 
        </div>

    </div>
    <div id="farmercheck" class="">

    </div>
    <div class="control-group">
        <label class="control-label" for="r_kg"> Milk in Kgs:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="4**" name='r_kg' value=''/> 
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="r_dt"> Time Delivered:</label >
        <div id="datetimepicker1" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="text" data-format="yyyy-mm-dd hh:mm:ss"  placeholder="yyyy-mm-dd hh:mm:ss" name='r_dt' value=''/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="r_deliverer"> Milk Delived by:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="Deliverer-X.." name='r_deliverer' value='' ?>'/> 
        </div>
    </div>
    <div class="control-group">

        <div class="controls">
            <input type='submit' value='Save' class="btn btn-success btn-large " /> 
            <input type='hidden' value='1' name='submitted' /> 
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('#datetimepicker1').datetimepicker({
                language: 'pt-BR',
                format: 'yyyy-MM-dd hh:mm:ss'
            });
        });
        $("#f_no").on("keyup", function(thisevent) {
            $.post('checkfarmer.json.php', {fname: delivery.f_no.value}, function(jsondata) {
                $('#farmercheck').html(jsondata);
                //$('#farmercheck').addClass('control-group');
            });

        });
    });
</script>

@endsection