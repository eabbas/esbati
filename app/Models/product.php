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
use App\Models\product_category;
use App\Models\product_media;
use App\Models\role;
use App\Models\role_permision;
use App\Models\role_user;
use App\Models\cart;
use App\Models\User;
class product extends Model
{
    protected $fillable=[
        'title',
        'description',
        'summary',
        'brand_id',
        'is_active',
        'show_in_home',
        'featured',
        'slug',
        'stock',
        'price',
        'discunt',
    ];
    public function brand(){
        return $this->belongsTo(brand::class , 'brand_id');
    }
    public function medias(){
        return $this->hasMany(product_media::class);
    }
    public function categories(){
        return $this->belongsToMany(category::class , 'product_categories' , 'product_id' , 'category_id');
    }
    public function attributes(){
        return $this->belongsToMany(attribute::class , 'product_attributes' , 'product_id' , 'attribute_id')->withPivot(['value','id']);
    }
    public function packages(){
        return $this->hasMany(package::class);    
    }
    public function cart(){
        return $this->hasMany(cart::class);    
    }
    
}
