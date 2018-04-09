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

        <input type="search" name="farmer" class="search-query" value="" placeholder="Farmer No">
        <input type="submit" class="btn btn-info" value="Get Records">
    </div>
</form>
<div id="printable">
    <h5 id="farmer_details">
  </h5>
    <table  class="table table-hover table-striped table-condensed table-bordered">
        <thead class="" >
        <th>#</th>
        <th>KGs:</th>
        <th>Date</th>
        <th>Deliverer:</th>
        </thead>
        <tbody>
          
                   <tr>
                  <td></td>
                    <td valign='top'></td>
                    <td valign='top'></td>
                    <td valign='top'></td>
                    <td valign='top'></td>
                    </tr>
           
                <tr><td><strong>Total</strong></td><td><strong></strong><td>--</td><td>--</td></tr>
        </tbody>
    </table>
</div>
       
<a id="print" class="btn btn-success" >print </a>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            $('#datetimepicker1,#datetimepicker2').datetimepicker({             
                pickTime: false,
                format: 'yyyy-MM-dd'
            });
        });

        $('#print').on('click', function() {
            printDiv('printable');

        });

    });
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
@endsection