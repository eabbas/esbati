<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class discunt_code extends Model
{
    protected $fillable=
    [
        "title",
        "code",
        "number",
        "percent",
        "is_active",
    ];
}
