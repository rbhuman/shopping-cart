<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Type;
use App\Category;

class FrontController extends Controller
{
    public function index(){

        $productmob= Product::whereHas('category', function ($query) {      
             $query->where('name', 'mobile'); 
        })->get();

       $productm=$productmob->first();

        $productlaptop= Product::whereHas('category', function ($query) {      
            $query->where('name', 'laptop'); 
       })->get();
       $productl=$productlaptop->first();
     
       $producttv= Product::whereHas('category', function ($query) {      
        $query->where('name', 'tv'); 
   })->get();
   $productt=$producttv->first();

   $productcctv= Product::whereHas('category', function ($query) {      
    $query->where('name', '-i_phone'); 
   })->get();
   $productc=$productcctv->first();

   //  featured product //
   $fproduct=Product::take(4)->get(); 
   //  featured product //
   return view('front.main',[
       'productm'=>$productm,
       'productc'=>$productc,
       'productl'=>$productl,
       'productt'=>$productt,
       'fproduct'=>$fproduct
   ]);
  
    }
    
}
