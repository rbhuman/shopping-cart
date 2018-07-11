@extends('admin.layout.admin')
@section('content')

@if(count($contacts)>0)
<center><h3>Mesages from customer</h3></center>
<table class="table table-hover ">

        <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Email</th>
            <th class="text-center" width="650px">Message</th>
            <th class="text-center">Action</th>
        </tr>
        @foreach($contacts as $contact)
        <tr>
        <td class="text-center">{{$contact->name}}</td>
        <td class="text-center">{{$contact->phone_number}}</td>
        <td class="text-center">{{$contact->email}}</td>
        <td class="text-center"  width="650px">{{$contact->message}}</td>
        <td class="text-center">
               
                        <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-primary btn-xs glyphicon glyphicon-envelope"  style="float:left"></a>
                        
                        <form action="{{route('contact.destroy',$contact->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash" value="DELETE" onclick="return confirm('Are you sure to delete?')"></button>
                         </form>
                  
        </td>
        </tr>
        @endforeach
</table>
@else<p>You have No any Messages !</p>
@endif
@endsection