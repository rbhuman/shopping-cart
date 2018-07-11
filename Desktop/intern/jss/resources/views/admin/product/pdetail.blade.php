@extends('admin.layout.admin')
@section('content')

<a href="/admin/product"<button  class="btn btn-warning btn-xs pull-left">Back</button></a>
<br><br>
<table class="table table-hover">
    <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Category</th>
            <th class="text-center">Short Detail</th>
            <th class="text-center">Full Detail</th>
    </tr>
    <tr>
            <td class="text-center">{!!$product_detail->name!!}</td>

           <td>
                  @if(count($product_detail->prices)>0)
                        @foreach($product_detail->prices as $price)
                            @if($price->status==1)
                               <li>New Price : &#8360;  {{$price->price}}</li> 
                           
                            @endif
                        @endforeach
                        @foreach($product_detail->prices as $price)
                            @if($price->status==0)
                               <li>Old Price : &#8360;  {{$price->price}}</li> 
                           
                            @endif
                        @endforeach
                 @endif
                        
           </td> 
          
           <td class="text-center"> {!!$product_detail->category->name!!}</td>
           <td class="text-center">{{$product_detail->detail}}</td>
           <td class="text-center"> {!!$product_detail->description!!}</td>
   </tr>
   
</table><br>
<h2><center>Product Images</center></h2><hr>
    <img src="{{Storage::url($product_detail->image)}}" style="height:300px; width:300px; border:solid 1px red;"/>
    <img src="{{Storage::url($product_detail->image1)}}" style="height:300px; width:300px;border:solid 1px red;"/>
    <img src="{{Storage::url($product_detail->image2)}}" style="height:300px; width:300px;border:solid 1px red;"/>
  <br>
    @if(count($files)>0)
      <h2>Uploaded file for this product</h2><hr>
    @foreach($files as $file)
   <ul>  
        <li><h5><a href="/storage/files/{{$file->file1}}" target="blank">{{$file->file1}}</a></h5></li>
        <li><h5><a href="/storage/files/{{$file->file2}}" target="blank">{{$file->file2}}</a></h5></li> 
    </ul>
    @endforeach
    @else<p>No files updated for this product</p>
    @endif
@endsection
