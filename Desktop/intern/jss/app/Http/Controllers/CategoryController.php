<?php

namespace App\Http\Controllers;

use App\Type;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= Category::all();
        $type=Type::all();
        return view('admin.category.index',[
        'allcategory'=>$category,
        'categories'=>$category, 
        'productType'=>$type
        

        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all());
    $slug = strtolower($request->name);
    $slug = str_replace(' ','_',$slug);
    
      $category =new Category();
      $category->name=$request->input('name');
      $category->parent_id=$request->parent_category;
      $category->type_id=$request->type_id;
      $category->slug = $slug;

      $category->save(); 
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Category::find($id)->products;

        $categories=Category::all();
        $type=Type::all();
        return view('admin.category.index',[
            'allcategory'=>$categories,
            'products'=>$products,
            'productType'=>$type
                  ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function getcategory($typeid){
            $categorybytype = Category::where('type_id',$typeid)->get();
            return response()->json($categorybytype.$typeid);
    }
}
