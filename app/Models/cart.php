<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class cart extends Model
{
    protected $fillable=[
        'user_id',
        'product_id',
        'order_id',
        'quantity',
    ];
    public function product(){
        return $this->belongsTo(product::class , 'product_id');
    }
}
