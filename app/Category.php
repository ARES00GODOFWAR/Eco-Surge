<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable=['item_name','description','size','category_id','image','item_price','item_quantity','item_id','id'];
   
    public function items()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(Item::class);
    }

}
