<?php

namespace App\Http\Controllers;

use App\Slideimage;
use App\Type;
use App\Price;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductInsertationValidationRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::with('prices')->get();
      
        // $price=Price::where('status','1')->get();
       
        return view('admin.product.index',[
            'products'=>$product,
          

            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::pluck('name','id');
        $type = Type::all();
        return view('admin.product.create',[
            'categories'=>$categories,
            'types'=>$type

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInsertationValidationRequest $request)
    {  
      
        $slug = strtolower($request->name);
        $slug = str_replace(' ','_',$slug);
       

         $product =new Product();
       
        if($request->has('image')){
            
            $file=$request->file('image')->store('public/images');
            $product->image=$file;
        }
        if($request->has('image1')){
            
            $file=$request->file('image1')->store('public/images');
            $product->image1=$file;
        }
        if($request->has('image2')){
            
            $file=$request->file('image2')->store('public/images');
            $product->image2=$file;
        }
      
       
       $product->name=$request->input('name');
       $product->detail=$request->input('detail');
       $product->description=$request->input('description');
       $product->category_id=$request->input('category_id');
     
       $product->slug = $slug;
       
       $product->save();
       

      
       $insert_price = new Price();
       $insert_price->product_id = $product->id;
       $insert_price->price = $request->input('price');
      
       $insert_price->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = Product::find($id)->files;
        $products = Product::find($id);
        $price =Price::find($products);

    // dd($products->description);
        return view('admin.product.pdetail',[
            'product_detail'=>$products,
            'price'=>$price,
            'files'=>$file
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $category=Category::all();
        return view('admin.product.edit',[
            'categories'=>$category,
            'product'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductInsertationValidationRequest $request, $id)
    {
        $product=Product::find($id);

        if($request->has('file1')){
            
            $file=$request->file('file1')->store('public/files');
            $product->file1=$file;
        }
        if($request->has('file2')){
            
            $file=$request->file('file2')->store('public/files');
            $product->file2=$file;
        }

        if($request->has('image')){
            
            $file=$request->file('image')->store('public/images');
            $product->image=$file;
        }
        if($request->has('image1')){
            
            $file=$request->file('image1')->store('public/images');
            $product->image1=$file;
        }
        if($request->has('image2')){
            
            $file=$request->file('image2')->store('public/images');
            $product->image2=$file;
        }
       
       
       $product->name=$request->input('name');
       $product->detail=$request->input('detail');
       $product->description=$request->input('description');
       $product->category_id=$request->input('category_id');
      
       $product->save();
       if(count($product->prices)>0){
        $update_price= Price::where('product_id',$product->id)->first();
        $update_price->product_id = $product->id;
        $update_price->price = $request->input('price');
       
        $update_price->save();
       }
       return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->Delete();
        return redirect('AdminGallary.index');
    }
    
    public function image(){
        $slideimage=Slideimage::orderBy('created_at','desc')->paginate(3);

        
        return view('admin.slideimage.index',[
            'slideimage'=>$slideimage
        ]);
    }
    public function imagestore(Request $request){

           $slideimage=new Slideimage();

           if($request->has('image1')){
            
            $file=$request->file('image1')->store('public/images');
            $slideimage->image1=$file;
    }
    if($request->has('image2')){
            
        $file=$request->file('image2')->store('public/images');
            $slideimage->image2=$file;
    }
    if($request->has('image3')){
                
        $file=$request->file('image3')->store('public/images');
        $slideimage->image3=$file;
    }
    $slideimage->save();
    return redirect()->route('product.image');
    }
    
   public function imagedelete($id){
       $slideimage=Slideimage::find($id);
    $slideimage->Delete();
    return redirect()->route('product.image');

   } 

}