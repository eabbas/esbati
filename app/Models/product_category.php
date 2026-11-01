<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\attribute;
use App\Models\attribute_package;
use App\Models\brand;
use App\Models\category;
use App\Models\package_attribute;
use App\Models\package_media;
use App\Models\package;
use App\Models\permision;
use App\Models\product_attribute;
use App\Models\product_media;
use App\Models\product;
use App\Models\role;
use App\Models\role_permision;
use App\Models\role_user;
use App\Models\User;
class product_category extends Model
{
    protected $fillable=[
        'product_id',
        'category_id',
    ];
}
