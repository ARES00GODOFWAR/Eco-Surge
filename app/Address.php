<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'name', 'address1', 'address2', 'parish', 'country', 'zip', 'city', 'phoneNum', 'deliveryInstruct'
    ];
}
