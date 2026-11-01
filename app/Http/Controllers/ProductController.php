<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\attribute;
use App\Models\user;
use App\Models\product_category;
use App\Models\product_media;
use App\Models\product_attribute;
use App\Models\package;
use App\Models\headerSetting;
use App\Models\attribute_package;
use App\Models\package_media;
use App\Models\brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Log;

class ProductController extends Controller
{
    public function create(){
        $categories = category::all();
        $categories = $categories->all();
        // $brands = brand::all()->all();
        $brands = brand::all();
        // dd($brands);
        array_shift($categories);
        return view('product.create',['categories'=>$categories,'brands'=>$brands]);
        // dd('create');
    }
    public function store(Request $request ,product $product){

        // dd($request->all());
        $validation=$request->validate([
            'title'=>['required'],
            // 'description'=>['required'],
            // 'price'=>['required'],
            // 'stock'=>['required'],
        ],[
            "title.required"=>"عنوان محصول را پرکنید",
            // "description.required"=>"توضیحات را پر کنید",
            // "price.required"=>"قیمت را صحیح وارد کنید",
            // "stock.required"=>"موجودی را مشخص کنید",
        ]);

        if(isset($request['is_active'])){
            $is_active=1;
        }else{
            $is_active=0;
        }
        if(isset($request['show_in_home'])){
            $show_in_home=1;
        }else{
            $show_in_home=0;
        }
        if(isset($request['featured'])){
            $featured=1;
        }else{
            $featured=0;
        }
        // ایجاد محصول
        $createdProduct=product::create([
            'title'=>$validation['title'],
            'description'=>$request['description'],
            'summary'=>$request->summary,
            'brand_id'=>$request->brand_id,
            'is_active'=>$is_active,
            'show_in_home'=>$show_in_home,
            'featured'=>$featured,
            'slug'=>$request->slug,
            'stock'=>$request['stock'],
            'price'=>$request['price'],
            'discunt'=>$request->discunt,
        ]);

        //ذخیره کردن عکس اصلی برای پروداکت
        if(isset($request['is_main'])){
            $fullName=Str::uuid().$request->is_main->getClientOriginalName();
            $extension=$request->is_main->getClientOriginalExtension();
            $request->is_main->storeAs('product_medias',"$fullName","public");
            product_media::create([
                'path'=>$fullName,
                'product_id'=>$createdProduct->id,
                'is_main'=>1,
                'is_active'=>1,
                'type'=>$extension,
            ]);
        }

        //ذخیره کردن عکس های گالری
        if(isset($request['gallery'])){

            foreach ($request->gallery as $image) {
                $fullNameGallery=Str::uuid().$image->getClientOriginalName();
                $extensionGallery=$image->getClientOriginalExtension();
                $image->storeAs('product_medias',"$fullNameGallery","public");
                product_media::create([
                    'path'=>$fullNameGallery,
                    'product_id'=>$createdProduct->id,
                    'is_main'=>0,
                    'is_active'=>1,
                    'type'=>$extensionGallery,
                ]);
            }
        }
        
        //ایجاد کتگوری پروداکت
        $createdProductCategory=product_category::create([
            'product_id'=>$createdProduct->id,
            'category_id'=>$request->category,
        ]);

        //ایجاد پروداکت اتریبیوت
        // if(isset($request['attributes'])){
        //     foreach ($request['attributes'] as $att_id => $atts_array) {
        //         foreach ($atts_array as $attribute_value) {
        //             product_attribute::create([
        //                 'product_id'=>$createdProduct->id,
        //                 'attribute_id'=>$att_id,
        //                 'value'=>$attribute_value,
        //             ]);
        //         }
        //     }
        // }

        if(isset($request['attributes_id'])){
            foreach ($request['attributes_id'] as $key => $id) {
                product_attribute::create([
                    'product_id'=>$createdProduct->id,
                    'attribute_id'=>$id,
                    'value'=>$request['attributes_value'][$key],
                ]);
            }
        }
        

            //////////////////////////////   قسمت پروداکت  🔼

            /////////////////////////////////   قسمت پکیج  🔽
        if(isset($request['packages'])){

            foreach ($request->packages as $package) {
                if(isset($package['is_active'])){
                    $is_active=1;
                }else{
                    $is_active=0;
                }
                if(isset($package['featured'])){
                    $featured=1;
                }else{
                    $featured=0;
                }

                // ذخیره پکیچ
                $creratedPackage=package::create([
                    'product_id'=>$createdProduct->id,
                    'description'=>$package['description'],
                    'summary'=>$package['summary'],
                    'is_active'=>$is_active,
                    'stock'=>$package['stock'],
                    'price'=>$package['price'],
                    'discunt'=>$package['discunt'],
                    'featured'=>$featured,
                ]);
                
                //ذخیره عکس پکیچ ها
                if(isset($package['is_main'])){
                    $fullName_ismain=Str::uuid().$package['is_main']->getClientOriginalName();
                    $extension_ismain=$package['is_main']->getClientOriginalExtension();
                    $package['is_main']->storeAs('package_medias',"$fullName_ismain","public");
                    package_media::create([
                        'path'=>$fullName_ismain,
                        'package_id'=>$creratedPackage->id,
                        'is_main'=>1,
                        'is_active'=>1,
                        'type'=>$extension_ismain,
                    ]);
                }

                //ذخیره کردن عکس های گالری
                if(isset($package['gallery'])){

                    foreach ($package['gallery'] as $image) {
                        $fullName_package_gallery=Str::uuid().$image->getClientOriginalName();
                        $extension_package_gallery=$image->getClientOriginalExtension();
                        $image->storeAs('package_medias',"$fullName_package_gallery","public");
                        package_media::create([
                            'path'=>$fullName_package_gallery,
                            'package_id'=>$creratedPackage->id,
                            'is_main'=>0,
                            'is_active'=>1,
                            'type'=>$extension_package_gallery,
                        ]);
                    }
                }

                //افزودن اتریبیوت برای پکیج
                // if(isset($package['attributes'])){
                //     foreach ($package['attributes'] as $att_id => $atts_array) {
                //         foreach ($atts_array as $attribute_value) {
                //             attribute_package::create([
                //                 'attribute_id'=>$att_id,
                //                 'package_id'=>$creratedPackage->id,
                //                 'value'=>$attribute_value,
                //             ]);
                //         }
                //     }
                // }
                if(isset($package['attribute_id'])){
                    foreach ($package['attribute_value'] as $key => $id) {
                        product_attribute::create([
                            'product_id'=>$createdProduct->id,
                            'attribute_id'=>$id,
                            'value'=>$package['attribute_value'][$key],
                        ]);
                    }
                }
            

            }
        }

        return to_route('product.list');


        // dd('store');
    }
    public function list(){
        $products=product::all();
        foreach ($products as $product) {
            $result= brand::where('id',$product->brand_id)->first();
            if($result){
                $product->brand_id=brand::find($product->brand_id)->title;
            }else{
                $product->brand_id='ندارد';
            }
            $product->categories;
            $product->medias;
            foreach ($product['medias'] as $media) {
                if($media->is_main==1){
                    $product->is_main_media=$media->path;
                }
            }
            if ($product->discunt) {
                $campare = $product->price - $product->discunt;
                $x = $campare / $product->price;
                $product->percent = intval($x * 100);
            }
        }

        return view("product.list",['products'=>$products]);
        // dd('list');
    }
    public function single(product $product){
        $result= brand::where('id',$product->brand_id)->first();
        if($result){
            $product->brand_id=brand::find($product->brand_id)->title;
        }else{
            $product->brand_id='ندارد';
        }
        $product->categories;
        $product->medias;
        $packages=$product->packages;
        $product->attributes;
        foreach ($product->packages as $package) {
            $package->attributes;
            $package->medias;
        }
        // $is_main='';
        // $gallery=[];
        // foreach ($product->medias as $media) {
        //     if($media->is_main==1){
        //         $is_main=$media->path;
        //     }else{
        //         $gallery[]=$media->path;
        //     }
        // }
        // $product->is_main=$is_main;
        // $product->gallery=$gallery;
        // dd($product);
        return view("product.single",['product'=>$product]);
        // dd('single');
    }
    public function singlePackage(Package $package){
        $package->product;
        $result= brand::where('id',$package->product->brand_id)->first();
        if($result){
            $package->product->brand_id=brand::find($package->product->brand_id)->title;
        }else{
            $package->product->brand_id='ندارد';
        }
        $package->product->categories;

        $package->medias;
        $packages=$package->packages;
        $package->attributes;
        return view("product.singlePackage",['package'=>$package ]);
        // dd('single');
    }
    public function edit(product $product){
        $categories = category::all();
        $categories = $categories->all();
        array_shift($categories);
        $brands = brand::all()->pluck('title','id')->all();
        $product->categories;
        $product->medias;
        $product->attributes;
        $packages=$product->packages;
        foreach ($product->packages as $package) {
            $package->attributes;
            $package->medias;
        }
        // dd($product->packages);
        return view('product.edit',['categories'=>$categories,'brands'=>$brands,'product'=>$product]);
        // dd('edit');
    }
    public function update(Request $request ,product $product){
        // dd($request->all());


        //////قسمت اپدیت و فیلد های اصلی محصول
        $product["title"]=$request['title'];
        $product["description"]=$request['description'];
        $product["summary"]=$request['summary'];
        $product["brand_id"]=$request['brand_id'];
        $product["slug"]=$request['slug'];
        $product["discunt"]=$request['discunt'];
        $product["price"]=$request['price'];
        $product["stock"]=$request['stock'];
        $product["is_active"]=$request['is_active'];
        $product["featured"]=$request['featured'];
        $product["show_in_home"]=$request['show_in_home'];
        $product->save();
        ////
        // $product["category"]=$request['category'];
        ////


        //////   قسمت حذف و ایجاد مدیا های محصول   

        if(isset($request['deletedProductMedias'])){
            foreach ($request['deletedProductMedias'] as $media_id) {
                $medias=product_media::where('id',$media_id)->get();
                foreach ($medias as $media) {
                    Storage::disk('public')->delete("product_medias/".$media->path);
                    $media->delete();
                }
            }

        }

        if(isset($request['is_main'])){
            $media=product_media::where('product_id',$product->id)->where('is_main',1)->first();
            if($media){
                $media->is_main=0;
                $media->save();
            }
            $fullName=Str::uuid().$request->is_main->getClientOriginalName();
            $extension=$request->is_main->getClientOriginalExtension();
            $request->is_main->storeAs("product_medias","$fullName","public");
            product_media::create([
                'path'=>$fullName,
                'type'=>$extension,
                'product_id'=>$product->id,
                'is_main'=>1,
                'is_active'=>1,
            ]);
        }
        if(isset($request['gallery'])){
            foreach ($request['gallery'] as $gallery) {
                $fullName=Str::uuid().$gallery->getClientOriginalName();
                $extension=$gallery->getClientOriginalExtension();
                $gallery->storeAs("product_medias","$fullName","public");
                product_media::create([
                'path'=>$fullName,
                'type'=>$extension,
                'product_id'=>$product->id,
                'is_main'=>0,
                'is_active'=>1,
                ]);
            }
        }

        /////// قسمت حذف و ایجاد اتریبیوت های محصول
        if(isset($request['deletedProductAttributes'])){
            foreach ($request['deletedProductAttributes'] as $attribute_id) {
                $att=product_attribute::find($attribute_id);
                if($att){
                    $att->delete();
                }
            }

        }

        // if(isset($request['attributes'])){
        //     foreach ($request['attributes'] as $att_id => $atts_array) {
        //         foreach ($atts_array as $attribute_value) {
        //             product_attribute::create([
        //                 'product_id'=>$product->id,
        //                 'attribute_id'=>$att_id,
        //                 'value'=>$attribute_value,
        //             ]);
        //         }
        //     }
        // }
        if(isset($request['attributes_id'])){
            foreach ($request['attributes_id'] as $key => $id) {
                product_attribute::create([
                    'product_id'=>$product->id,
                    'attribute_id'=>$id,
                    'value'=>$request['attributes_value'][$key],
                ]);
            }
        }

 
        ////// آپدیت و جذف مدیا ها و اتریبیوت پکیج های قدیمی 
        if(isset($request['createdPackages'])){
            foreach ($request['createdPackages'] as $package_id => $oldpackage) {
                $package=package::find($package_id);
                $package["description"]=$oldpackage['description'];
                $package["summary"]=$oldpackage['summary'];
                $package["stock"]=$oldpackage['stock'];
                $package["price"]=$oldpackage['price'];
                $package["discunt"]=$oldpackage['discunt'];
                $package["is_active"]=$oldpackage['is_active'];
                $package["featured"]=$oldpackage['featured'];
                $package->save();
                // if(isset($oldpackage['attributes'])){
                //     foreach ($oldpackage['attributes'] as $att_id => $atts_array) {
                //         foreach ($atts_array as $attribute_value) {
                //             attribute_package::create([
                //                 'attribute_id'=>$att_id,
                //                 'package_id'=>$package->id,
                //                 'value'=>$attribute_value,
                //             ]);
                //         }
                //     }
                // }
                if(isset($oldpackage['attribute_id'])){
                    foreach ($oldpackage['attribute_id'] as $key => $id) {
                        attribute_package::create([
                            'attribute_id'=>$id,
                            'package_id'=>$package->id,
                            'value'=>$oldpackage['attribute_value'][$key],
                        ]);
                    }
                }
                                
                //ذخیره عکس پکیچ ها
                if(isset($oldpackage['is_main'])){
                    $fullName=Str::uuid().$oldpackage['is_main']->getClientOriginalName();
                    $extension=$oldpackage['is_main']->getClientOriginalExtension();
                    $oldpackage['is_main']->storeAs('package_medias',"$fullName","public");
                    package_media::create([
                        'path'=>$fullName,
                        'package_id'=>$package->id,
                        'is_main'=>1,
                        'is_active'=>1,
                        'type'=>$extension,
                    ]);
                }

                //ذخیره کردن عکس های گالری
                if(isset($oldpackage['gallery'])){
                    foreach ($oldpackage['gallery'] as $image) {
                        $fullName=Str::uuid().$image->getClientOriginalName();
                        $extension=$image->getClientOriginalExtension();
                        $image->storeAs('package_medias',"$fullName","public");
                        package_media::create([
                            'path'=>$fullName,
                            'package_id'=>$package->id,
                            'is_main'=>0,
                            'is_active'=>1,
                            'type'=>$extension,
                        ]);
                    }
                }

            }
        }

        if(isset($request['deletedPackageMedias'])){
            foreach ($request['deletedPackageMedias'] as $media_id) {
                $medias=package_media::where('id',$media_id)->get();
                foreach ($medias as $media) {
                    Storage::disk('public')->delete("package_medias/".$media->path);
                    $media->delete();
                }
            }
        }
        /////// قسمت حذف و ایجاد اتریبیوت های محصول
        if(isset($request['deletedPackageAttributes'])){
            foreach ($request['deletedPackageAttributes'] as $attribute_id) {
                attribute_package::find($attribute_id)->delete();
            }

        }

        

        if(isset($request['deleteCreatedPackage'])){
            foreach ($request['deleteCreatedPackage'] as $package_id) {
                $package=package::find($package_id); 
                $medias=package_media::where('package_id',$package_id)->get();
                foreach ($medias as $media) {
                    Storage::disk('public')->delete("package_medias/".$media->path);
                    $media->delete();
                }
                attribute_package::where('package_id',$package->id)->delete();
                $package->delete();
            }
        }


        ///// ایجاد پکیج جدید 

        if(isset($request['packages'])){

            foreach ($request->packages as $package) {
                if(isset($package['is_active'])){
                    $is_active=1;
                }else{
                    $is_active=0;
                }
                if(isset($package['featured'])){
                    $featured=1;
                }else{
                    $featured=0;
                }

                // ذخیره پکیچ
                $creratedPackage=package::create([
                    'product_id'=>$product->id,
                    'description'=>$package['description'],
                    'summary'=>$package['summary'],
                    'is_active'=>$is_active,
                    'stock'=>$package['stock'],
                    'price'=>$package['price'],
                    'discunt'=>$package['discunt'],
                    'featured'=>$featured,
                ]);
                
                //ذخیره عکس پکیچ ها
                if(isset($package['is_main'])){
                    $fullName=Str::uuid().$package['is_main']->getClientOriginalName();
                    $extension=$package['is_main']->getClientOriginalExtension();
                    $package['is_main']->storeAs('package_medias',"$fullName","public");
                    package_media::create([
                        'path'=>$fullName,
                        'package_id'=>$creratedPackage->id,
                        'is_main'=>1,
                        'is_active'=>1,
                        'type'=>$extension,
                    ]);
                }

                //ذخیره کردن عکس های گالری
                if(isset($package['gallery'])){

                    foreach ($package['gallery'] as $image) {
                        $fullName=Str::uuid().$image->getClientOriginalName();
                        $extension=$image->getClientOriginalExtension();
                        $image->storeAs('package_medias',"$fullName","public");
                        package_media::create([
                            'path'=>$fullName,
                            'package_id'=>$creratedPackage->id,
                            'is_main'=>0,
                            'is_active'=>1,
                            'type'=>$extension,
                        ]);
                    }
                }

                //افزودن اتریبیوت برای پکیج
                // if(isset($package['attributes'])){
                //     foreach ($package['attributes'] as $att_id => $atts_array) {
                //         foreach ($atts_array as $attribute_value) {
                //             attribute_package::create([
                //                 'attribute_id'=>$att_id,
                //                 'package_id'=>$creratedPackage->id,
                //                 'value'=>$attribute_value,
                //             ]);
                //         }
                //     }
                // }
                if(isset($package['attribute_id'])){
                    foreach ($package['attribute_id'] as $key => $id) {
                        attribute_package::create([
                            'attribute_id'=>$id,
                            'package_id'=>$creratedPackage->id,
                            'value'=>$package['attribute_value'][$key],
                        ]);
                    }
                }
            }
        }



        return to_route('product.list');


        // dd('update');
    }
    public function delete(product $product){
        $product->medias;
        $product->packages;
        foreach ($product['medias'] as $media) {
            Storage::disk('public')->delete("product_medias/".$media->path);
            $media->delete();
        }
        product_attribute::where('product_id',$product->id)->delete();
        foreach ($product['packages'] as $package) {
            $package->medias;

            foreach ($package['medias'] as $media) {
                Storage::disk('public')->delete("package_medias/".$media->path);
                $media->delete();
            }
            attribute_package::where('package_id',$package->id)->delete();
            $package->delete();
        }
        $product->delete();

        return to_route('product.list');
        // dd('delete');
    }
    public function categoryAttributes(category $category){
        $attributes = $category->attributes->pluck('title' , 'id');
        return response()->json($attributes);
        // return response()->json($category);
    }
    public function packages(product $product){
        $packages=$product->packages;
        return view('product.packages',['packages'=>$packages]);
    }
    public function attributes(product $product){
        $attribut_array=[];
        $product->attributes;
        // dd($product->attributes);
        foreach ($attributes as $attribute) {
            $attribute=attribute::find($attribute->attribute_id);
            $attribut_array[]=1;
        }
        return view('product.attributes',['attributes'=>$attributes]);
    }
    public function client_pro_single(product $product){
        $user=Auth::user();
        $flag=false;
        if($user){
            $user->load(['carts'=>function($query){$query->where('order_id',null)->get();}]);
            if(count($user->carts)>0){
                foreach ($user->carts as $cart) {
                    foreach ($cart->product->medias as $media) {
                        if($media->is_main==1){
                            $cart->product->path=$media->path;
                        }
                    }
                    if ($cart->product->discunt!=null ||$cart->product->discunt>0 ) {
                        $campare = $cart->product->price - $cart->product->discunt;
                        $x = $campare / $cart->product->price;
                        $cart->product->percent = intval($x * 100);
                    }
                    
                }
            }
            foreach ($user->carts as $cart) {
                if($cart->product->id==$product->id){
                    $flag=true;
                }
            }
            $is_mainpicture='';
            $galleryPicture=[];
        }
        
        foreach ($product->medias as $media) {
            if($media->is_main==1){
                $product->is_main=$media->path;
            }else{
                $galleryPicture[]=$media->path;
            }
        }
        $product->gallery=$galleryPicture;
        if ($product->discunt) {
            $campare = $product->price - $product->discunt;
            $x = $campare / $product->price;
            $product->percent = intval($x * 100);
        }
        $attributes=$this->arranged_attributes($product->attributes);
        // dd($attributes);
        return view('client.product.single',['product'=>$product, 'user'=>$user,'flag'=>$flag,'attributes'=>$attributes]);
    }
    public function searchProduct(Request $request){
        $products=product::where('title','like','%'.$request['title'].'%')->with('medias')->get();
        $bishtarin=0;
        $kamtarin=0;
        foreach ($products as $product) {
            if($product->price > $bishtarin){
                $bishtarin=$product->price;
            }
            foreach ($product->medias as $media) {
                if($media->is_main==1){
                    $product->image=$media->path;
                }
            }
        }
        $kamtarin=$bishtarin;
        foreach ($products as $product) {
            if($product->price < $bishtarin){
                if($kamtarin>$product->price){
                    $kamtarin=$product->price;
                }
            }
            if ($product->discunt) {
                $campare = $product->price - $product->discunt;
                $x = $campare / $product->price;
                $product->percent = intval($x * 100);
            }
        }
        // dd(['bishtarin'=>$bishtarin,'kamtarin'=>$kamtarin]);
        $categories=category::all();
        $brands=brand::all();
            // dd($products);
        return view('search',['products'=>$products,'searchTitle'=>$request->title,'categories'=>$categories,'brands'=>$brands,'bishtarin'=>$bishtarin,'kamtarin'=>$kamtarin]);
    }
    // public function getFilteredProducts(Request $request){

    //     // Log::info($filters);
    //     dd($request['filters']);

    //     return response()->json($filters);
    // }
    public function getFilters(Request $request){
        $filters = $request->input('filters');
        // Log::info($filters);
        //  در این شرط تک حطی اگر قسمت اول ترو باشه اون جایگذاری میشه اگه فالس باشه قسمت دوم
        $category = $filters['category'] ?? null;
        $brand = $filters['brand'] ?? null;
        $exists = $filters['exists'] ?? 1;
        $hasDescount = $filters['hasDescount'] ?? 0;
        $fromPrice = $filters['fromPrice'] ?? 0;
        $toPrice = $filters['toPrice'] ?? null;
        $sortType = $filters['sortType'] ?? 'asc';
        $sortBy = $filters['sortBy'] ?? 'created_at';
        $keyword = $filters['keyword'] ?? null;
        $products = Product::where(function ($query) use ( $exists, $hasDescount, $fromPrice, $toPrice) {
            
            if ($fromPrice && !$toPrice) {
                $query->where('products.price', '>=', $fromPrice);
            }
            if ($toPrice && !$fromPrice) {
                $query->where('products.price', '<=', $toPrice);
            }
            if ($fromPrice && $toPrice) {
                $query->whereBetween('products.price', [$fromPrice, $toPrice]);
            }
            if ($exists == 1) {
                $query->where('products.stock', '!=', 0);
            }
            if ($hasDescount == 1) {
                $query->whereNotNull('products.discunt');
            }
        });
        if ($brand && is_array($brand) && count($brand) > 0) {
            $products = $products->whereHas('brand', function ($q) use ($brand) {
                $q->whereIn('brands.id', $brand);
            });
        }
        
        if ($category && is_array($category) && count($category) > 0) {
            $products = $products->whereHas('categories', function ($q) use ($category) {
                $q->whereIn('categories.id', $category);
            });
        }
        if ($keyword) {
            $products = $products->where(function ($q) use ($keyword) {
                $q
                    ->where('products.title', 'like', '%' . $keyword . '%')
                    ->orWhere('products.summary', 'like', '%' . $keyword . '%')
                    ->orWhere('products.description', 'like', '%' . $keyword . '%');
            });
        }
        $products = $products->orderBy($sortBy, $sortType)->get();
        Log::info($products);
        foreach ($products as $product) {
            if ($product->medias->isNotEmpty()) {
                foreach ($product->medias as $media) {
                    if ($media->is_main) {
                        $product->image  = $media->path;
                        break;
                    } else {
                        $product->image = 'default.jpg';
                    }
                }
            } else {
                $product->image = 'default.jpg';
            }

            if ($product->discunt) {
                $campare = $product->price - $product->discunt;
                $x = $campare / $product->price;
                $product->percent = intval($x * 100);
            }
        }
        return response()->json($products);
    }
    public function header_test(){
        $logo = headerSetting::first();
        $product=product::find(8);
        $user=Auth::user();
        $flag=false;
        if($user){
            $user->load(['carts'=>function($query){$query->where('order_id',null)->get();}]);
            if(count($user->carts)>0){
                foreach ($user->carts as $cart) {
                    foreach ($cart->product->medias as $media) {
                        if($media->is_main==1){
                            $cart->product->path=$media->path;
                        }
                        if ($cart->product->discunt!=null ||$cart->product->discunt>0 ) {
                            $campare = $cart->product->price - $cart->product->discunt;
                            $x = $campare / $cart->product->price;
                            $cart->product->percent = intval($x * 100);
                        }
                    }
                    
                    
                }
            }
            foreach ($user->carts as $cart) {
                // dd($product);
                if($cart->product->id==$product->id){
                    $flag=true;
                }
            }
            $is_mainpicture='';
            $galleryPicture=[];
        }
            return view('header',['user'=>$user,'flag'=>$flag,'logo'=>$logo]);
    }
    public function arranged_attributes($attributes){
        $array=[];
        foreach ($attributes as $attribute) {
            if (!array_key_exists($attribute->title, $array)) {
                $array[$attribute->title]=[];
            }
        }
        foreach ($attributes as $attribute) {
            if (array_key_exists($attribute->title, $array)) {
                $array[$attribute->title][]=$attribute->pivot->value;
            }
        }
        return $array;
    }
    public function getNoAuthProduct(product $product){
        return response()->json($product);
    }

}
