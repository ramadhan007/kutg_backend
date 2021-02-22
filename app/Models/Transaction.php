<?php

namespace App\Models;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use softDeletes;

    protected $fillable=[
        'uuid','name','email','number','address','transaction_total','transaction_status'
    ];

    protected $hidden=[];

    public function details(){
        return $this->hasMany(TransactionDetail::class,'transactions_id');
    }

    
    //
}
