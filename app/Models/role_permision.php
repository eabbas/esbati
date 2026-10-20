<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\permision;
use App\Models\role;
use App\Models\role_user;
use App\Models\User;
class role_permision extends Model
{
    protected $fillable=[
        'id',
        'permision_id',
        'role_id',
    ];
}
