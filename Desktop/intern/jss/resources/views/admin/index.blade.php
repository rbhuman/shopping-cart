@extends('admin.layout.admin')
@section('content')
<h4>Hello {{Auth::user()->name}} sir, you are the Admin please take care of your things,Thank you</h4>
  
 <center><img src="{{URL::asset('images/admin.png')}}"/> </center>  

@endsection