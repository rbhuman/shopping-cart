@extends('admin.layout.admin')
@section('content')

 <div class="navbar">
 <a class="navbar-brand" href="{{route('productType.index')}}">Product Types:</a>
       <ul class="nav navbar-nav">
           @if(!empty($productType))
           @forelse($productType as $type)
            <li>
            <a href="{{route('productType.show',$type->id)}}">{{$type->name}}</a>
            </li>
            @empty
            <li>No Data</li>
            @endforelse
            @endif



       </ul>
       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Add Product Type
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            {!! Form::open(['url'=>'admin/productType','method'=>'post'])!!}
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title pull-left" id="exampleModalLabel">Add Product Type</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="form-group">
                 {{Form::label('name','Name')}}
                 {{Form::text('name',null,['class'=>'form-control'])}}
                
             </div>
                 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save </button>
            </div>
          </div>
          {{form::token()}}
          {!!form::close()!!}
   
        </div>
      </div>
 </div> 
  @if(!empty($products))
  <section>
    <h3>Products</h3>
     
       <table class="table table-hover">

          <thead>
              <tr>
                 <th>Products</th>
                
              </tr>
            </thead>
            <tbody>
              @forelse($products as $product)
              <tr>
                <td>{{$product->name}}</td>
              </tr>
              @empty
              <tr><td>No Data</td></tr>
              @endforelse
            </tbody>
       </table>

  </section>
  @endif

@endsection