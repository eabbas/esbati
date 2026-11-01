<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\attribute;
use App\Models\attribute_package;
use App\Models\brand;
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
class category extends Model
{
    protected $fillable=[
        'title',
        'description',
        'summary',
        'parent_id',
        'show_in_home',
        'is_active',
        'image_path',
        'slug',
    ];
    public function children(){
        return $this->hasMany(category::class,'parent_id')->with('children');
    }
    public function products(){
        return $this->belongsToMany(product::class , 'product_categories' , 'product_id' , 'category_id');
    }
    public function attributes(){
        return $this->hasMany(attribute::class);
    }
}
