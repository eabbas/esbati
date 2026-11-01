<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\attribute_package;
use App\Models\brand;
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
class attribute extends Model
{
    protected $fillable=[
    'title',
    'category_id',
    ];
    public function category(){
        return $this->belongsTo(category::class , 'category_id');
    }
    public function products(){
        return $this->belongsToMany(product::class , 'pro_attributes' , 'attribute_id' , 'product_id');
    }
    public function package(){
        return $this->belongsToMany(package::class , 'pack_attributes' , 'attribute_id' , 'pack_id');
    }
}
