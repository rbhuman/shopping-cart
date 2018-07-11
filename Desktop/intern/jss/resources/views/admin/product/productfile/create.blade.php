@extends('admin.layout.admin')
@section('content')
<div class="row">
        <div class="col-md-6 col-md-offset-3">
          
         <p><h2>You are inserting files of {{$product->name}} </h2></p><br><br>
                {!! Form::open(['action'=>['FileController@storing',$product_id],'method'=>'post','files'=>true, 'class'=>'form-group'])!!}

                {{Form::label('filename','File  Name')}}
                {{Form::text('filename1',null,['class'=>'form-control'])}}

                {{Form::file('file1',['class'=>'form-control','required'=>'required'])}}<br>


                {{Form::label('filename','Filename')}}
                {{Form::text('filename2',null,['class'=>'form-control'])}}

                {{Form::file('file2',['class'=>'form-control','required'=>'required'])}}

                {{Form::submit('update',['class'=>'btn btn-default'])}}

                {{Form::close()}}
        </div>
    </div>

@endsection