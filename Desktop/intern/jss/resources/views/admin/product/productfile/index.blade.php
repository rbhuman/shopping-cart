@extends('admin.layout.admin')
@section('content')

    <div class="form-group">
    <a href="{{route('product.index')}}"< button class="btn btn-warning btn-xs pull-left">Back</a>
        <h3>files</h3><hr>
        @if(count($files)>0)
        <table class="table table-hover ">

                <tr>
                                <th class="text-center">First File Name</th>
                                <th class="text-center">First File</th>
                                <th class="text-center">Second File Name</th>
                                <th class="text-center">Second File</th>
                                <th class="text-center">Action</th>
                               
                </tr>
                @foreach($files as $file)     
                <tr>
              
                <td>{{$file->filename1}}</td>
                <td width="50px"><{{$file->file1}}</td>
                <td>{{$file->filename2}}</td>
                <td>{{$file->file2}}</td>
                 <td width="75px"> <a href="#" class="btn btn-primary btn-xs glyphicon glyphicon-edit"  style="float:left"></a> 
                    
                    <form action="#" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash" value="DELETE" onclick="return confirm('Are you sure to delete?')"></button>
                     </form>
                    </td>
                   
                </tr>
                @endforeach  
            </table>
            @else<P>No files found for this product</P>
            @endif
  
 </div>

@endsection

