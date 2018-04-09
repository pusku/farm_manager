@extends('layouts.nav_side_bar')
@section('content')
  
      <h1>Deliveries</h1>
<br/>
<a href="{{ url('/new_deiveries') }}" class='btn btn-large btn-primary'  ><i class="icon-plus icon-white"></i>New Delivery</a><br/><br/> 
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
       
         <th>Farmer NO:</th>
        <th>KGs:</th>
        <th>Date</th>
        <th>Deliverer:</th>
       <th style="text-align: center">Tasks</th>
        </thead>
    <tbody>
 <tr> 
<td></td>
<td valign='top'></td>
<td valign='top'></td> 
<td valign='top'></td>
<td valign='top'></td>
<td valign='top'></td>
  
     <td  style="text-align: center">
                <a href="" class="btn btn-primary btn-mini"><i class="icon-edit icon-white"></i>Edit</a> | 
                <a href="" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a> 
             </td>
</tr>
</tbody></table>

@endsection