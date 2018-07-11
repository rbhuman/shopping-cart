<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontController@index');
Route::get('/product','StoreController@index')->name('store.index');
Route::get('/product/{name}','StoreController@storebycategory')->name('store.newindex');
Route::get('/contact','ContactController@newindex')->name('contact.newindex');
Route::post('/contactupdate','ContactController@newupdate')->name('contact.newupdate');
Route::get('/about','AboutController@index')->name('about.index');


Route::post('/search','SearchController@search')->name('search.product');

Route::get('/searched','SearchController@result')->name('search.result');

Route::resource('productdetail','ProductDetailController');



Route::get('/logout','Auth\LoginController@Logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('support','DownloadController');
Route::get('/support','DownloadController@newindex')->name('download.index');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');
    
    
    
    

    Route::resource('productType','TypeController');
    Route::resource('product','ProductController');
    Route::resource('category','CategoryController');
    Route::get('category','CategoryController@index')->name('category.index');
    Route::resource('productprice','PriceController');
    route::get('changeprice/{id}','PriceController@changeprice'); 
    route::post('updateprice/{id}','PriceController@updateprice');   
    
    route::get('getcategorybytype/{id}','CategoryController@getcategory');

    Route::get('/slidecreate','ProductController@image')->name('product.image');
    Route::post('/slideshow','ProductController@imagestore')->name('image.keep');
    Route::get('/imagedlt','ProductController@imagedelete')->name('image.delete');

    Route::resource('productfiles','FileController');
    Route::get('addfiles/{id}','FileController@newindex');
    route::post('storefiles/{id}','FileController@storing');  
    route::get('showfiles/{id}','FileController@look');  

    Route::resource('contact','ContactController');
  
});






