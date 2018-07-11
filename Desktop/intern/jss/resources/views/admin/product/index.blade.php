@extends('admin.layout.admin')
@section('content')
<a href="/admin/product/create" class="btn btn-warning btn-xs pull-right">Add product</a>
<h3>Products</h3>
 <table class="table table-hover ">

    <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Price</th>
                    <th width="10px" class="text-center">Short Description</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">files</th>
                    <th class="text-center">Picture</th>
                    <th class="text-center">Action</th>
    </tr>
           
  
        @forelse($products as $product)
              <tr>
                <td>{{$product->name}}</td>
              <td class="text-center"> &#8360;
                 
                  @if(count($product->prices)>0)
                    @foreach($product->prices as $price)
                        @if($price->status==1)
                          {{$price->price}}
                        @endif
                    @endforeach
                  
                  <a href="{{URL::to('/admin/changeprice/'.$product->id)}}" class="btn btn-primary btn-xs" style="float:right">Modify Price</a>
                  @endif
               
                </td>
                 <td width="10px" class="text-center">{{$product->detail}}</td>
                <td>
                <a href="{{route('product.show',$product->id)}}" class="btn btn-warning btn-xs">show detail</a>
                  
               </td>
                <td class="text-center">{{$product->category->name}}</td>
                <td class="text-center"> <a href="{{URL::to('/admin/addfiles/'.$product->id)}}" class="btn btn-default btn-xs" style="float:right">Add Files</a>
                  <a href="{{URL::to('/admin/showfiles/'.$product->id)}}" class="btn btn-default btn-xs" style="float:right">show Files</a>
                </td>
                <td class="text-center"><img src="{{Storage::url($product->image)}}" style="height:60px; width:75px;"/></td>
               
                <td class="text-center"> 
                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-xs glyphicon glyphicon-edit"  style="float:left"></a>
                    
                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger btn-xs glyphicon glyphicon-trash" value="DELETE" onclick="return confirm('Are you sure to delete?')"></button>
                     </form>
                </td>
             </tr>
                @empty
                <h3>No Products</h3>
           
               @endforelse
    </div>
    @endsection