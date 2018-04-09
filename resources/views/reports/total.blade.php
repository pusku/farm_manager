@extends('layouts.nav_side_bar')
@section('content')
<h1>Farmers Monthly Sales Reports</h1>
<form class=" form-inline" method="post" action="">
    <div class="control-group">
        <label class="control-label" for="from"> From:</label >
        <div id="datetimepicker1" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="text" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='from' value=''/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
        </div>

        <label class="control-label" for="to"> To:</label >
        <div id="datetimepicker2" class="controls input-append date" style="margin-left: 20px">
            <input class="input-xlarge" type="text" data-format="yyyy-mm-dd"  placeholder="yyyy-mm-dd" name='to' value=''/> 
            <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
            </span>
        </div>
    
        <input type="submit" class="btn btn-info" value="Get Records">
    </div>
</form>
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
    <th>#</th>
    <th>Farmer NO:</th>
    <th>Farmer Name:</th>
    <th>Total KGs:</th>
   </thead>
<tbody>

            <tr>
            <td></td>
            <td valign='top'></td>
            <td valign='top'></td>
            <td valign='top'></td>
            </tr>
        
        <tr class='success'><td><strong>Total</strong></td><td><strong>All</strong><td>--</td><td> Kgs</td></tr>

</tbody>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('#datetimepicker1,#datetimepicker2').datetimepicker({
                language: 'pt-BR',
                pickTime: false,
                format:'yyyy-MM-dd'
            });
        });
    });
</script>
@endsection