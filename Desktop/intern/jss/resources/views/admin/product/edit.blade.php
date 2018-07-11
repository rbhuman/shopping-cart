@extends('admin.layout.admin')
@section('content')

  

   <divn class="row">
      @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $e)
        <li>{{$e}}</li>
      @endforeach
    </div>
  @endif
       
       <div class="col-md-6 col-md-offset-3">
            <h3>Edit Products</h3><hr>
            {!! Form::open(['action'=>['ProductController@update',$product->id],'method'=>'PUT','files'=>true])!!}
          
            <div class="form-group">
                 {{Form::label('name','Name')}}
                 {{Form::text('name',$product->name,['class'=>'form-control'])}}

                 {{Form::label('detail','Detail')}}
                 {{Form::text('detail',$product->detail,['class'=>'form-control'])}}
     
                 {{Form::label('description','Description')}}
                 {!!Form::textarea('description',$product->description,[ 'id'=>'article-ckeditor','class'=>'form-control'])!!}
     
                
                 {{Form::label('price','Price')}}
                 {{Form::text('price',$product->prices->first->price->price,['class'=>'form-control'])}}
     
                 {{Form::label('category','Category')}}
                 {{-- {{Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'select Category'])}} --}} 

                <select name='category_id' class="form-control">
                  @foreach($categories as $allcat)
                <option value="{{$allcat->id}}" @if($allcat->id == $product->category_id) selected @endif >{{$allcat->name}}</option>
                  @endforeach
                </select>

                 {{Form::label('image','Image')}}
                 {{Form::file('image',['class'=>'form-control'])}}
                 
                 {{Form::label('more images','More Images')}}
                 {{Form::file('image1',['class'=>'form-control'])}} {{Form::file('image2',['class'=>'form-control'])}} <br>
                
                   
               </div>
                 {{Form::submit('update',['class'=>'btn btn-default'])}}
     
               {!!Form::close()!!}
    </div>

    </div>
   </div>

@endsection