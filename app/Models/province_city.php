<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class province_city extends Model
{
    protected $fillable=[
        'parent',
        'title'
    ];
    public function cities(){
        return $this->hasMany(province_city::class,'parent')->with('cities');
    }
}
