@extends('layouts.nav_side_bar')
@section('content')
<h1>Reports</h1>
<div class="span4">
<a href="{{ url('/per_farmers') }}"><img src="img/month.png"><br/>
    Per Farmer Delivery</a></div>
<div class="span4">
<a href="{{ url('/total') }}"><img src="img/month.png"><br/>
Total Farmers Delivery</a>
</div>
        @endsection