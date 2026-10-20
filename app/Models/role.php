<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\permision;
use App\Models\role_permision;
use App\Models\role_user;
use App\Models\User;
class role extends Model
{
    protected $fillable=[
        'id',
        'fa_title',
        'ea_title',
    ];
    public function users(){
        return $this->belongsToMany(User::class,'role_users');
    }
    public function permisions(){
        return $this->belongsToMany(permision::class,'role_permisions');
    }
}
