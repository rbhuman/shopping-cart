@extends('admin.layout.admin')
@section('content')

{!! Form::open(['route'=>('image.keep'),'method'=>'post','files'=>true, 'class'=>'form-group'])!!}

{{Form::label('more images','More Images')}}
{{Form::file('image1',['class'=>'form-control'])}}
 {{Form::file('image2',['class'=>'form-control'])}}
 {{Form::file('image3',['class'=>'form-control'])}}<br>

 {{Form::submit('Insert',['class'=>'btn btn-default'])}}

  {!!Form::close()!!}
  <hr>
  <table class="table">
    <tr>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <tr>
        @foreach($slideimage as $image)
     <td><img src="{{Storage::url($image->image1)}}" style="height:200px; width:300px;"/>
        <form action="{{route('image.delete',$image->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
              <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash" value="DELETE" onclick="return confirm('Are you sure to delete?')"></button>
               </form></td>
     <td><img src="{{Storage::url($image->image2)}}" style="height:200px; width:300px;"/>
        <form action="{{route('image.delete',$image->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
              <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash" value="DELETE" onclick="return confirm('Are you sure to delete?')"></button>
               </form></td>
     <td><img src="{{Storage::url($image->image3)}}" style="height:200px; width:300px;"/>
        <form action="{{route('image.delete',$image->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
              <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash" value="DELETE" onclick="return confirm('Are you sure to delete?')"></button>
               </form></td>
     <td>
        
           
     </td>
     @endforeach
    </tr>

  </table>
  {{$slideimage->links()}}  


  @endsection