<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = ['name','Product_Id', 'ProductPrice', 'description', 'image', 'available'];

    // protected $guarded = [];
}
