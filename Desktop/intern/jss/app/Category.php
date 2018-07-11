<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','parent_id'];
    public function products(){
        //     return $this->hasMany('App\Product');
             return $this->hasMany(Product::class);
         }
         public function parent(){
             return $this->belongsTo('App\Category','parent_id');
         }
         public function child(){
             return $this->hasMany('App\Category','parent_id');
         }
         public function type(){
            return $this->belongsTo('App\Type','type_id');
        }
     
}
