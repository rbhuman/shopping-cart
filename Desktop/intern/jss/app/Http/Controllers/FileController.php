<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Redirect;
use App\Product; 
use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // Handle File Upload
          if($request->hasFile('file1')){
            // Get filename with the extension
            $filenameWithExt1 = $request->file('file1')->getClientOriginalName();
            // Get just filename
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            // Get just ext
            $extension1 = $request->file('file1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename1.'_'.time().'.'.$extension1;
            // Upload Image
            $path1 = $request->file('file1')->storeAs('public/files', $fileNameToStore1);
        } 
        if($request->hasFile('file2')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('file2')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('file2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename2.'_'.time().'.'.$extension2;
            // Upload Image
            $path2 = $request->file('file2')->storeAs('public/files', $fileNameToStore2);
        } 
        $product_id = $request->product_id;
       //dd( $product_id);
       
        $file=new File;
        $file->product_id=  $request->$product_id;
        $file->filename1=$request->input('filename1');
        $file->filename2=$request->input('filename2');
        $file->file1=$fileNameToStore1;
        $file->file2=$fileNameToStore2;
        $file->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }

    public function newindex($product_id){
        $product=Product::find($product_id);
        
        return  view('admin.product.productfile.create',[
                  'product'=>$product,
                  'product_id'=>$product_id
                  
        ]);
       
    }
    public function storing(Request $request,$product_id)
    {
          // Handle File Upload
          if($request->hasFile('file1')){
            // Get filename with the extension
            $filenameWithExt1 = $request->file('file1')->getClientOriginalName();
            // Get just filename
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            // Get just ext
            $extension1 = $request->file('file1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename1.'_'.time().'.'.$extension1;
            // Upload Image
            $path1 = $request->file('file1')->storeAs('public/files', $fileNameToStore1);
        } 
        if($request->hasFile('file2')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('file2')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('file2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename2.'_'.time().'.'.$extension2;
            // Upload Image
            $path2 = $request->file('file2')->storeAs('public/files', $fileNameToStore2);
        } 
        $product=Product::find($product_id);
       $id=$product->id;
       
        $file=new File;

        $file->product_id=  $id;

        $file->filename1=$request->input('filename1');
        $file->filename2=$request->input('filename2');
        $file->file1=$fileNameToStore1;
        $file->file2=$fileNameToStore2;
        $file->file1path=$path1;
        $file->file2path=$path2;
        $file->save();
     
     return redirect()->route('product.index');
 
    }
    public function look($id){
        $files=Product::find($id)->files;
        return view('admin.product.productfile.index',[
            'files'=>$files
        ]);
    }
}
