@extends('shared.shared')
@section('css')


@endsection

@section('content')



<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
								Categories
							</h4>
	
							<ul class="p-b-54">
								@foreach($categories as $cat)
								<li class="p-t-4">
									<a href="#" class="s-text13 active1">
										{{$cat->name}}
									</a>
								</li>
								@endforeach
							<br><br>
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						{{-- <span class="s-text8 p-t-5 p-b-5">
							Showing  {{count($products)}} of {{count($allproducts)}} results
						</span> --}}
					</div>

					<!-- Product -->
					<div class="row">
                            
                            @if(count($result)>0)
                            @foreach($result as $res)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50 ">
                           
                               
							<!-- Block2 -->
                             <div class="block2 border border-primary rounded">
                                   
                                   <div class="  block2-img wrap-pic-w of-hidden pos-relative "> 
										
											 <img src="{{Storage::url($res->image)}}" style="width:250px;height:170px"/>


									 <div class="block2-overlay trans-0-4">

									   <a href= "/#">
										<div class="block2-btn-addcart w-size1 trans-0-4">
										 <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Buy Now
										 </button>
									
										</div> 
									 </a>
                                   
									 </div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="/productdetail/{{$res->id}}" class="block2-name dis-block s-text3 p-b-5">
										{{$res->name}}
									</a>

									<span class="block2-price m-text6 p-r-5 block2-newprice">

                                           @if(count($res->prices)>0)
											@foreach($res->prices as $price)
												@if($price->status==1)
												&#8360;  {{$price->price}}&nbsp; &nbsp; 
												@endif
											@endforeach
											
											@endif
									</span>
									<span class="block2-price m-text6 p-r-5 block2-oldprice">
											@if(count($res->prices)>0)
											@foreach($res->prices as $price)
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
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						{{$result->links()}}

                        @else
                        <h1>No Product in this category</h1>
                        @endif
				</div>
			</div>
		</div>
	</section>
@endsection