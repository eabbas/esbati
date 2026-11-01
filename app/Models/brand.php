<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\attribute;
use App\Models\attribute_package;
use App\Models\category;
use App\Models\package_attribute;
use App\Models\package_media;
use App\Models\package;
use App\Models\permision;
use App\Models\product_attribute;
use App\Models\product_category;
use App\Models\product_media;
use App\Models\product;
use App\Models\role;
use App\Models\role_permision;
use App\Models\role_user;
use App\Models\User;
class brand extends Model
{
    protected $fillable=[
        "title",
        "description",
        "slug",
        "logo_path",
        "is_active",
        "show_in_home",
    ];
    
    public function products(){
        return $this->hasMany(product::class);
    }
}
