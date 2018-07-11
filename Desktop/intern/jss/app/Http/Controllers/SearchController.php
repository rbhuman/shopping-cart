<?php

namespace App\Http\Controllers;
use App\Category;
use App\Search;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $category=Category::all();
        $search=new Search();
        $name= $search->search=$request->input('search');

        $result = Product::where('name','LIKE','%'.$name.'%')->orderBy('created_at','desc')->paginate(9);
        return view('front.searched', [
            'result'=>$result,
            'categories'=>$category
            ]);         
    }
   
}
   
