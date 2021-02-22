<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class ProductGallery extends Model
{
use softDeletes;

    protected $fillable = [
        'products_id','photo','is_default'
    ];

        protected $hidden = [

    ];

    public function Product(){
        return $this->belongsTo(Product::class,'products_id','id');
    }

    public function getPhotoAttribute($value)
    {
return url('storage/' . $value);
    }

    //
    //
}
