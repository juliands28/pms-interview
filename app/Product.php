<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','price','total','description','categories_id','suppliers_id','units_id'
    ];

    protected $hidden = [

    ];

    public function category()
    {
       return $this->belongsTo(Category::class,'categories_id','id');
       //karna didalam prduct terdapat category
    }

    public function supplier()
    {
       return $this->hasOne(Supplier::class,'id','suppliers_id');
       //karna didalam prduct terdapat category
    }

    public function unit()
    {
       return $this->belongsTo(Unit::class,'units_id','id');
       //karna didalam prduct terdapat category
    }
}