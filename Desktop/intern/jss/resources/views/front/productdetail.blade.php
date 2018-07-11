@extends('shared.shared')
@section('css')

@section('content')


	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
            <a href="index.html" class="s-text16">
                Home
                <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
            </a>
    
            <a href="product.html" class="s-text16">
                Women
                <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
            </a>
    
            <a href="#" class="s-text16">
                T-Shirt
                <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
            </a>
    
            <span class="s-text17">
                Boxy T-Shirt with Roll Sleeve Detail
            </span>
        </div>
    
        <!-- Product Detail -->
        <div class="container bgwhite p-t-35 p-b-80">
            <div class="flex-w flex-sb">
                <div class="w-size13 p-t-30 respon5">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
    
                        <div class="slick3"  border="10px solid transparent;">
                            <div class="item-slick3 " data-thumb="{{Storage::url($product->image)}}">
                                <div class="wrap-pic-w border border-primary rounded">
                              
                                <img src="{{Storage::url($product->image)}}"  alt="IMG-PRODUCT" >
                                </div>
                            </div>
    
                            <div class="item-slick3" data-thumb="{{Storage::url($product->image1)}}">
                                <div class="wrap-pic-w border border-primary rounded">
                                        <img src="{{Storage::url($product->image1)}}" alt="IMG-PRODUCT">
                                </div>
                            </div>
    
                            <div class="item-slick3" data-thumb="{{Storage::url($product->image2)}}">
                                <div class="wrap-pic-w border border-primary rounded">
                                        <img src="{{Storage::url($product->image2)}}" alt="IMG-PRODUCT">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
    
                <div class="w-size14 p-t-30 respon5">
                    <h4 class="product-detail-name m-text16 p-b-13">
                    {{$product->name}}
                    </h4>
    
                    <span class="m-text17">
                            @if(count($product->prices)>0)
                            @foreach($product->prices as $price)
                                @if($price->status==1)
                                &#8360;  {{$price->price}}&nbsp; &nbsp; 
                                @endif
                            @endforeach
                            @foreach($product->prices as $price)
                            @if($price->status==0)
                            <strike>&#8360;{{$price->price}}</strike>  
                           
                            @endif
                        @endforeach
                            @endif
                    </span>
    
                    <p class="s-text8 p-t-10">
                        {{$product->detail}}
                    </p>
                    <div class="p-b-45">
                       
                            <span class="s-text8">Categories: {{$product->category->name}}</span>
                            </div>

                    <div class="flex-r-m flex-w p-t-10">
                            <div class="w-size16 flex-m flex-w">
                            
                                <a href="/#">
                                <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                    <!-- Button -->
                                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Buy NOW
                                    </button>
                                    
                                </div>
                              </a>   
                            </div>
                        </div>
                 
    
                  
    
                    <!--  -->
                    <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                            Description
                            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                        </h5>
    
                        <div class="dropdown-content dis-none p-t-15 p-b-23">
                            <p class="s-text8">
                               {!!$product->description!!}
                            </p>
                        </div>
                    </div>
                    <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                                Downloads
                                <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                                <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                            </h5>
        
                            <div class="dropdown-content dis-none p-t-15 p-b-23">
                                <p class="s-text8">
                                    @if(count($files)>0)
                                     @foreach($files as $file)
                                           
                                            <li> {!!$file->filename1!!}&nbsp;&nbsp;&nbsp;
                                            <a href="/storage/files/{{$file->file1}}"download="{{$file->file1}}"><button type="button" class=" btn btn-sm btn btn-primary glyphicon glyphicon-download "> Downlaod</button></a>
                                        @endforeach
                                        <br><br>
                                        @foreach($files as $file)
                                           
                                        <li> {!!$file->filename2!!}&nbsp;&nbsp;&nbsp;
                                        <a href="/storage/files/{{$file->file2}}"download="{{$file->file2}}"><button type="button" class=" btn btn-sm btn btn-primary"> Download</button></a>
                                    @endforeach

                                      @else{{'No file for this product'}}
                                       </li>  
                                      @endif
                                 </p>
                            </div>
                        </div>
    
                   
    
                    <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                            Reviews (0)
                            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                        </h5>
    
                        <div class="dropdown-content dis-none p-t-15 p-b-23">
                            <p class="s-text8">
                                Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        <!-- Relate Product -->
        <section class="relateproduct bgwhite p-t-45 p-b-138">
            <div class="container">
                <div class="sec-title p-b-60">
                    <h3 class="m-text5 t-center">
                        Related Products
                    </h3>
                </div>
    
                <!-- Slide2 -->
                <div class="wrap-slick2">
                   
                    <div class="slick2">
                                  @foreach($rproduct as $product)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="{{Storage::url($product->image)}}"style="width:250px;height:200px;" alt="IMG-PRODUCT">
   
                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class=" hov-pointer trans-0-4">
                                            <i class="" aria-hidden="true"></i>
                                            <i class=" dis-none" aria-hidden="true"></i>
                                        </a>
                                           <a href="/#">
                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Buy Now
                                            </button>
                                        </div>
                                    </a>
                                    </div>
                                </div>
    
                                <div class="block2-txt p-t-20">
                                    <a href="/productdetail/{{$product->id}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$product->name}}
                                    </a>
    
                                    <span class="block2-newprice m-text8 p-r-5">
                                            @if(count($product->prices)>0)
                                            @foreach($product->prices as $price)
                                            @if($price->status==1)
                                            &#8360;  {{$price->price}}&nbsp; &nbsp; 
                                            @endif
                                            @endforeach
                                            @endif
                                       
                                    </span>
                                    <span class="block2-oldprice m-text7 p-r-5">
                                            @if(count($product->prices)>0)
                                                @foreach($product->prices as $price)
                                            @if($price->status==0)
                                            <strike>&#8360;{{$price->price}}</strike>  
                                            @endif
                                           @endforeach
                                            @endif
                                        </span>
                                </div>
                            </div>
                        </div>
    
                        @endforeach
                    </div>
                   
                </div>
               
            </div>
        </section>
    
    
        
@endsection