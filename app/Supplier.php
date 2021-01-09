<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name','address','country','zip_code','phone_number'
    ];

    protected $hidden = [

    ];
}