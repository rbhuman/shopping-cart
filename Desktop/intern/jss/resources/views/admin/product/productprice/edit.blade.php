@extends('admin.layout.admin')
@section('content')

    <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
        <h3>Edit Price</h3><hr>
        {!! Form::open(['action'=>['PriceController@updateprice',$product_id],'method'=>'POST','files'=>true])!!}
            {{-- <input type="hidden" name="product_id" value="{{product_id}}"> --}}
        {{Form::hidden('product_id',$product_id)}}
        {{Form::text('price',$price->price,['class'=>'form-control','placeholder'=>'Enter new price'])}}
        <br>
        {{Form::submit('update',['class'=>'btn btn-default'])}}
        {{Form::close()}}
  </div>
 </div>

@endsection

