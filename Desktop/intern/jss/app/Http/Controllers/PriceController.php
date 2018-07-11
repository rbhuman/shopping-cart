<?php

namespace App\Http\Controllers;

use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {      
        $price=Price::find($id);
     
        return view('admin.product.productprice.edit',[
            'price'=>$price
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_price =new price;
        $new_price = Price::find($id);
        $new_price->price = $request->input('price');
        $new_price->status = 1;
        $insert_price->save();
        return redirect()->route('product.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        //
    }
    public function changeprice($product_id){
    //    return "hello";
        $price = Price::where([
            ['product_id',$product_id],['status',1]])->first();
            return view('admin.product.productprice.edit',[
                'price'=>$price,'product_id'=>$product_id
            ]);
        

    }
    public function updateprice(Request $request){
        $product_id = $request->product_id;
        Price::where('product_id',$product_id)->update(['status'=>0]);
        $changeprice = new Price();
        $changeprice->product_id = $product_id;
        $changeprice->price = $request->price;
        $changeprice->status = 1;
        $changeprice->save();
        return redirect()->route('product.index');
        
    }
}
