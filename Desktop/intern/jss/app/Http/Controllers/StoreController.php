<?php

namespace App\Http\Controllers;

use App\Price;
use App\Category;
use App\Product;
use App\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $products =Product::orderBy('created_at','desc')->paginate(9);
        $allproducts =Product::all();
        $category=Category::all();

        // $data=[];
        // $i=0;
        // foreach($products as $product){
        //     $status_1_price = Price::where([['product_id',$product->id],['status',1]])->first();
        //     if($status_1_price!=null){
        //         $current_status = $status_1_price->price;
        //     }else{
        //         $current_status = "";
        //     }
        //     // dd($staus_1_price);
        //     $status_0_price =  Price::where([['product_id',$product->id],['status',0]])->OrderBy('created_at','desc')->first();
        //     if($status_0_price!=null){
        //         $previous_status = $status_0_price->price;

        //     }else{
        //         $previous_status= "";
        //     }
        //     $product_name = $product->name;
        //     $product_category = $product->category_id;
        //     $product_image = $product->image;
        //     $data[$i]=[
        //         'id'=>$product->id,
        //         'name'=>$product_name,
        //         'product_category'=>$product_category,
        //         'image'=>$product_image,
        //         'current_price'=>$current_status,
        //         'previous_price'=>$previous_status,
        //     ];
        //     $i= $i+1;
        // }
        
        // $price = Price::where('product_id',$products)
        //recent product having status = 0 
       
        return view('front.product',[
        'products'=>$products,
        'allproducts'=>$allproducts,
        'categories'=>$category
        ]);
    }
    public function storebycategory($id){
           
        $product=Product::where('category_id',$id)->orderBy('created_at','desc')->paginate(9);
        $category=Category::all();
        return view('front.storebycategory',[
                  'products'=>$product,
                  'categories'=>$category
        ]);

    }
}
