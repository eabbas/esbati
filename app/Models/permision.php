<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\role;
use App\Models\role_permision;
use App\Models\role_user;
use App\Models\User;
class permision extends Model
{
    protected $fillable=[
        'id',
        'fa_title',
        'ea_title',
    ];
    public function roles(){
        return $this->belongsToMany(role::class,'role_permisions');
    }
}
