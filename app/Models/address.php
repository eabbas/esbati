<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable=[
        'user_id',
        'city_id',
        'location',
        'province_id',
        'phoneNumber',
        'description',
        'postalCode',
        'title',
    ];
    public function user(){
        return $this->belongsTo(user::class);
    }
}
