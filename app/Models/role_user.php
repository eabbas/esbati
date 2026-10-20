<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\permision;
use App\Models\role;
use App\Models\role_permision;
use App\Models\User;
class role_user extends Model
{
    protected $fillable=[
        'id',
        'user_id',
        'role_id',
    ];
}
