<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class TransactionDetail extends Model
{
    use softDeletes;

    protected $fillable=[
'transactions_id','products_id'
    ];

    protected $hidden=[

    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class,'transactions_id','id');

    }

    public function product(){
        return $this->belongsTo(Product::class,'products_id','id');
    }
    //
}
