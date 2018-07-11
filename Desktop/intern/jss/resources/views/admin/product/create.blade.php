@extends('admin.layout.admin')
@section('content')

   <div class="row">
      @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $e)
        <li>{{$e}}</li>
      @endforeach
    </div>
  @endif
       
       <div class="col-md-6 col-md-offset-3">
            <h3>Add Products</h3><hr>
       {!! Form::open(['route'=>('product.store'),'method'=>'post','files'=>true, 'class'=>'form-group'])!!}
          
       
            {{Form::label('name','Name')}}
            {{Form::text('name',null,['class'=>'form-control'])}}

            {{Form::label('detail','Detail')}}
            {{Form::text('detail',null,['class'=>'form-control'])}}

            {{Form::label('description','Description')}}
            {{Form::textarea('description','',['id'=>'article-ckeditor','class'=>'form-control'])}}

            {{Form::label('price','Price')}}
            {{Form::text('price',null,['class'=>'form-control'])}}
            <label for="" class="control-label">Type</label>
            <select class="form-control" name="type" id="product_type">
              <option value="">Select Type</option>
              @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
              @endforeach
            </select>

            {{-- {{Form::label('category','Category')}}
            {{Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'select Category'])}}  --}}
            <select class="form-control" name="category_id" id ="category_id">
              <option value="">Select Category</option>

            </select> 

            {{Form::label('image','Image')}}
            {{Form::file('image',['class'=>'form-control'])}}<br>
         
       
            {{Form::label('more images','More Images')}}
            {{Form::file('image1',['class'=>'form-control'])}}
             {{Form::file('image2',['class'=>'form-control'])}}
            <br>
          
          <input type="hidden" name="app_url" id="app_url" value="{{url('/')}}"> 
            {{Form::submit('Insert',['class'=>'btn btn-default'])}}

          {!!Form::close()!!}
    

    </div>
   </div>
   
@endsection
{{-- @section('js')
<script>
    $(document).ready(function(){
       $('#product_type').change(function(e){
         
         var type = $(this).val();
        
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          e.preventDefault(e);
          $.ajax({
            type:'GET',
            url: $('#app_url').val()+'/admin/getcategorybytype/'+type,
            success:function(data){
              // $('category_id').nextAll().remove();
                for(var i=0;i<data.length; i++){
                  var appenddata = "<option value='"+data[i]['id']+"'>"+data[i]['name']+"</option>";
                 
                }

            },
            error:function(data){

            }
          })
       })


    })
  
  </script>
@endsection --}}