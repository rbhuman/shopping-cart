<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price','image','description','category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
        
      //  return $this->belongsTo(Category::class);
    }
    public function prices(){
        return $this->hasMany('App\Price','product_id');
    }
    public function files(){
        return $this->hasMany('App\File','product_id');
    }
}
