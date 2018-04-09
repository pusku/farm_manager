@extends('layouts.nav_side_bar')
@section('content')
       <a class="btn btn-large btn-primary" href="{{ url('/add_farmers') }}"><i class="icon-plus icon-white"></i>Add Farmer</a><br/><br/>
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>Farmer NO:</th>
         <th>ID NO:</th>
        <th>Name:</th>
        <th>Locality</th>
        <th>Account No:</th>
        <th>Phone No:</th>
        
        </thead>

    <tbody>
        @foreach ($data as $farmer)
    <tr>
        <td>{{ $farmer->id }}</td>
        <td>{{ $farmer->id }}</td>
        <td>{{ $farmer->id }}</td>
         <td>{{ $farmer->name }}</td>
        <td>{{ $farmer->land }}</td>
        <td>{{ $farmer->account_no }}</td>
        <td>{{ $farmer->phone }}</td>
         
             <td  style="text-align: center">
                <a href="{{route('edit_farmers',$farmer->id)}}" class="btn btn-primary btn-mini"><i class="icon-edit icon-white"></i>Edit</a> | 
                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('delete_farmers',$farmer->id)}}" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a>
                <script>
</script>
             </td>
 @endforeach
</tbody>
 
</table>
@endsection
