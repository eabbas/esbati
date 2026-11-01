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
use App\Models\attribute_package;
use App\Models\package_media;
use App\Models\brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function create(){
        $categories = $this->recursiveCategory1('create');
        return view('category.create',['categories'=>$categories]);
        dd("create");
    }
    public function store(Request $request){
        // dd($request->all());
        $validation=$request->validate([
            'title'=>['required','max:255'],
            // 'description'=>['required','max:255'],
            // 'summary'=>['required','max:255'],
        ],[
            'title.required'=>" فیلد مورد نظر خالی است ",
            'title.max'=>" حداکثر کاراکتر 255 میباشد ",
            // 'description.required'=>" فیلد مورد نظر خالی است ",
            // 'description.max'=>" حداکثر کاراکتر 255 میباشد ",
            // 'summary.required'=>" فیلد مورد نظر خالی است ",
            // 'summary.max'=>" حداکثر کاراکتر 255 میباشد ",
        ]);
        if(isset($request['show_in_home'])){
            $show_in_home=$request['show_in_home'];
            }else{
            $show_in_home=0;
        }
        if(isset($request['is_active'])){
            $is_active=$request['is_active'];
            }else{
            $is_active=0;
        }
        $parent_id=0;
        if(isset($request->parent_id)){
            $parent_id=$request->parent_id;
        }
        $created_category=category::create([
            'title'=>$validation['title'],
            'description'=>$request['description'],
            'summary'=>$request['summary'],
            'show_in_home'=>$show_in_home,
            'is_active'=>$is_active,
            'image_path'=>$request['image_path'],
            'slug'=>$request['slug'],
            'parent_id'=>$parent_id,
        ]);
        
        if(isset($request['attributes'])){
            foreach ($request['attributes'] as $attribute) {
                $permision=true;
                if($attribute==null){
                    $permision=false;
                }
                if($permision){
                    $attribute=attribute::create([
                        "title"=>$attribute,
                        "category_id"=>$created_category->id,
                    ]);
                }
            }
        }
        if(isset($request->image_path)){
            $fullName=Str::uuid().$request->image_path->getClientOriginalName();
            $format=$request->image_path->getClientOriginalExtension();
            $request->image_path->storeAs("category_medias","$fullName","public");
            $created_category->image_path=$fullName;
            $created_category->save();
        }
        // dd($created_category);






        
        // if(!isset($request->parent_id)){
        //     $created_category=category::create([
        //         'title'=>$validation['title'],
        //         'description'=>$validation['description'],
        //         'summary'=>$validation['summary'],
        //         'show_in_home'=>$show_in_home,
        //         'is_active'=>$is_active,
        //         'image_path'=>$request['image_path'],
        //         'slug'=>$request['slug'],
        //         'parent_id'=>0,
        //     ]);
            
        //     if(isset($request['attributes'])){
        //         foreach ($request['attributes'] as $attribute) {
        //             $permision=true;
        //             if($attribute==null){
        //                 $permision=false;
        //             }
        //             if($permision){
        //                 $attribute=attribute::create([
        //                     "title"=>$attribute,
        //                     "category_id"=>$created_category->id,
        //                 ]);
        //             }
        //         }
        //     }
        //     if(isset($request->image_path)){
        //         $fullName=Str::uuid().$request->image_path->getClientOriginalName();
        //         $format=$request->image_path->getClientOriginalExtension();
        //         $request->image_path->storeAs("category_medias","$fullName","public");
        //         $created_category->image_path=$fullName;
        //         $created_category->save();
        //     }
        // }else{
        //     foreach ($request->parent_id as $parent_id) {
        //         $created_category=category::create([
        //             'title'=>$validation['title'],
        //             'description'=>$validation['description'],
        //             'summary'=>$validation['summary'],
        //             'show_in_home'=>$show_in_home,
        //             'is_active'=>$is_active,
        //             'image_path'=>1,
        //             'slug'=>$request['slug'],
        //             'parent_id'=>$parent_id,
        //         ]);    

        //         if(isset($request['attributes'])){
        //             foreach ($request['attributes'] as $attribute) {
        //                 $permision=true;
        //                 if($attribute==null){
        //                     $permision=false;
        //                 }
        //                 if($permision){
        //                     $attribute=attribute::create([
        //                         "title"=>$attribute,
        //                         "category_id"=>$created_category->id,
        //                     ]);
        //                 }

        //             }
        //         }
        //         if(isset($request->image_path)){
        //             $fullName=Str::uuid().$request->image_path->getClientOriginalName();
        //             $format=$request->image_path->getClientOriginalExtension();
        //             $request->image_path->storeAs("category_medias","$fullName","public");
        //             $created_category->image_path=$fullName;
        //             $created_category->save();
        //         }
        //     }
        // }


        return to_route('category.list');
        dd("store");
    }
    public function list(){
        $categories=category::all();
        return view('category.list',['categories'=>$categories]);
        dd("list");
    }
    public function single(category $category){
        if($category->id!=1){
            $category->attributes;
            $subCategories=$this->recursive1($category);
            return view('category.single',['category'=>$category , 'subCategories'=>$subCategories]);
        }
            return view('category.single',['category'=>$category]);
        dd("single");
    }
    public function edit(category $category){
        if($category->id!=1){
            $categoriessss = $this->recursiveCategory1('edit' , $category);
            $category->attributes;
            return view('category.edit',['category'=>$category  , 'categoriessss'=>$categoriessss]);
        }
        return view('category.edit',['category'=>$category]);

        dd("edit");
    }
    public function update(Request $request,category $category){
        // dd($request->all());
        $validation=$request->validate([
            'title'=>['required','max:255'],
            // 'description'=>['required','max:255'],
            // 'summary'=>['required','max:255'],
        ],[
            'title.required'=>" فیلد مورد نظر خالی است ",
            'title.max'=>" حداکثر کاراکتر 255 میباشد ",
            // 'description.required'=>" فیلد مورد نظر خالی است ",
            // 'description.max'=>" حداکثر کاراکتر 255 میباشد ",
            // 'summary.required'=>" فیلد مورد نظر خالی است ",
            // 'summary.max'=>" حداکثر کاراکتر 255 میباشد ",
        ]);
        if(isset($request->image_path)){
            storage::disk('public')->delete("category_medias/".$category->image_path);
            $fullName=Str::uuid().$request->image_path->getClientOriginalName();
            $format=$request->image_path->getClientOriginalExtension();
            $request->image_path->storeAs("category_medias","$fullName","public");
            $category->image_path=$fullName;
            $category->save();
        }
        $category->title=$validation['title'];
        $category->description=$request['description'];
        $category->summary=$request['summary'];
        if(isset($request['show_in_home'])){
            $category->show_in_home=$request->show_in_home;
            }else{
            $category->show_in_home=0;
        }
        if(isset($request['is_active'])){
            $category->is_active=$request->is_active;
            }else{
            $category->is_active=0;
        }
        $category->slug=$request->slug;
        if(isset($request->parent_id)){
            if($request->parent_id==$category->id){
                $category->parent_id=0;
            }else{
                $category->parent_id=$request->parent_id;
            }
        }
        $category->save();
        

        if(isset($request['subCategories'])){
            foreach ($request['subCategories'] as $subCategory) {
                // $subCategoryFullName=null;
                // $permision=true;
                // if($subCategory["title"]==null){
                //     $permision=false;
                // }
                // if($permision){
                //     if(isset($subCategory['image'])){
                //         $subCategoryFullName=Str::uuid().$subCategory['image']->getClientOriginalName();
                //         $subCategory['image']->storeAs("category_images","$subCategoryFullName","public");
                    // }
                    if(isset($subCategory['show_in_home'])){
                        $show_in_home=$subCategory->show_in_home;
                    }else{
                        $show_in_home=0;
                    }
                    if(isset($subCategory['is_active'])){
                        $is_active=$subCategory->is_active;
                    }else{
                        $is_active=0;
                    }
                    Category::create([
                        "title"=>$subCategory["title"],
                        "description"=>$subCategory["description"],
                        "summary"=>$subCategory["summary"],
                        "show_in_home"=>$show_in_home,
                        "is_active"=>$is_active,
                        "parent_id"=>$category->id,
                    ]);
                // }
            }
        }
        if(isset($request['attributes'])){
            foreach ($request['attributes'] as $attribute) {
                $permision=true;
                if($attribute==null){
                    $permision=false;
                }
                if($permision){
                    $attribute=attribute::create([
                        "title"=>$attribute,
                        "category_id"=>$category->id,
                    ]);
                }
            }
        }
        if(isset($request['deletedattributes'])){
            foreach ($request['deletedattributes'] as $attribute) {
                attribute::find($attribute)->delete();
            }
        }
        if(isset($request['editedAttributes'])){
            foreach ($request['editedAttributes'] as $id => $title) {
                if($title==null){
                    attribute::find($id)->delete();
                }else{
                    $attribute=attribute::find($id);
                    $attribute->title=$title;
                    $attribute->save();
                }
            }
        }
        if(isset($request->deletedSubCategories)){
            foreach ($request->deletedSubCategories as $subCategory) {
                // dd($subCategory);
                $this->delete(Category::find($subCategory));
            }
        }

        return to_route('category.list');
        dd("update");
    }
    public function delete(category $category){
        
        
        
        

        foreach ($category->children as $subCategory) {

            foreach ($subCategory->products as $product) {

                foreach ($product->packages as $package) {

                    foreach ($package->attributes as $attribute) {

                        $attribute->pivot->delete();

                    }

                }

                foreach ($product->attributes as $attribute) {

                    $attribute->pivot->delete();

                }

                $product->categories[0]->pivot->category_id=1;
                $product->categories[0]->pivot->save();

            }

            foreach ($subCategory->attributes as $attribute) {

                $attribute->delete();

            }
            $subCategory->parent_id=0;
            $subCategory->save();

        }

        foreach ($category->products as $product) {

            foreach ($product->packages as $package) {

                foreach ($package->attributes as $attribute) {

                    $attribute->pivot->delete();

                }

            }

            foreach ($product->attributes as $attribute) {

                $attribute->pivot->delete();

            }

            $product->categories[0]->pivot->category_id=1;
            $product->categories[0]->pivot->save();

        }
        foreach ($category->attributes as $attribute) {

            $attribute->delete();

        }

        Storage::disk('public')->delete("category_medias/".$category->image_path);
        $category->delete();

        return to_route('category.list');
        dd("delete");
    }


    public function recursiveCategory1($state ,$category=null){
        $cats=category::where('parent_id',0)->with('children')->get();
        // dd($cats);
        if($state=='create'){
            $result=$this->recursiveCategory2($cats->all());
        }else{
            // $result=$this->recursiveCategory3($cats->all() ,$category);
            $result=$this->recursiveCategory4($cats->all() ,$category);
        }
        return $result;
    }  
    public function recursiveCategory2($categories , $category=null){
        $result="<ul class='pr-5'>";
        if(!is_array($categories)){
            if($categories->is_active==1){
                if($categories->parent_id==0){
                    $result.="<li class='flex items-center text-center gap-1 -mr-3 text-red-300'><input type='radio' name='parent_id' value='$categories->id'>$categories->title</li>";
                }else{
                    if($categories->id!=1){
                        $result.="<li class='flex items-center text-center gap-1 mr-5 text-blue-300'><input type='radio' name='parent_id' value='$categories->id'>$categories->title</li>";
                    }
                }
                if($categories["children"]){
                    // dd($categories["children"]);
                    foreach ($categories["children"]->all() as $children) {
                        if($children->is_active==1){

                            $result.= "<ul class='pr-5'>";
                            $result.="<li class='flex items-center text-center gap-1 mr-5'><input type='radio' name='parent_id' value='$children->id'>$children->title</li>";
                            $result.= "</ul>";
                            if($children["children"]){
                                $result.=$this->recursiveCategory2($children['children']->all());
                            }
                        }
                    }
                }
            }else{
                $result='';
            }
            return $result;
        }
        foreach ($categories as $category) {
            // $result.='<ul>';
            $result.=$this->recursiveCategory2($category);
            $result.='</ul>';
        }
        $result.='</ul>';
        return $result;
    }
    public function recursiveCategory4($categories , $currentCategory){
        $result="<ul class='pr-5'>";
        // dd($categories);
        if(!is_array($categories)){
            if($categories->is_active==1){
                if($categories->parent_id==0){
                    if($categories->id==$currentCategory->parent_id){
                        $result.="<li class='flex items-center text-center gap-1 -mr-3 text-red-300'><input type='radio' checked name='parent_id' value='$categories->id'>$categories->title</li>";
                    }else{
                        $result.="<li class='flex items-center text-center gap-1 -mr-3 text-red-300'><input type='radio' name='parent_id' value='$categories->id'>$categories->title</li>";
                    }
                }else{
                    if($categories->id!=1){
                        if($categories->id==$currentCategory->parent_id){
                            $result.="<li class='flex items-center text-center gap-1 mr-5 text-blue-300'><input type='radio' checked name='parent_id' value='$categories->id'>$categories->title</li>";
                        }else{
                            $result.="<li class='flex items-center text-center gap-1 mr-5 text-blue-300'><input type='radio' name='parent_id' value='$categories->id'>$categories->title</li>";
                        }
                    }
                }
                if($categories["children"]){
                    // dd($categories["children"]);
                    foreach ($categories["children"]->all() as $children) {
                        if($children->is_active==1){
                            $result.= "<ul class='pr-5'>";
                            if($children->id==$currentCategory->parent_id){
                                $result.="<li class='flex items-center text-center gap-1 mr-5'><input type='radio' checked name='parent_id' value='$children->id'>$children->title</li>";
                            }else{
                                $result.="<li class='flex items-center text-center gap-1 mr-5'><input type='radio' name='parent_id' value='$children->id'>$children->title</li>";
                            }
                            $result.= "</ul>";
                            if($children["children"]){
                                $result.=$this->recursiveCategory4($children['children']->all(),$currentCategory);
                            }
                        }
                    }
                }
            }else{
                $result='';
            }
            return $result;
        }
        foreach ($categories as $category) {
            // $result.='<ul>';
            $result.=$this->recursiveCategory4($category,$currentCategory);
            $result.='</ul>';
        }
        $result.='</ul>';
        return $result;
    }
    public function recursiveCategory3($categories , $category=null){
        $result="<ul class='pr-5'>";
        if(!is_array($categories)){
            if($categories->is_active==1){
                if($categories->parent_id==0){
                    if($category->parent_id!=$categories->parent_id){
                        $result.="<li class='flex items-center text-center gap-1 -mr-3 text-red-300'><input type='radio' name='parent_id' value='$categories->id'>$categories->title</li>";
                    }else{
                        $result.="<li class='flex items-center text-center gap-1 -mr-3 text-red-300'><input type='radio' checked name='parent_id' value='$categories->id'>$categories->title</li>";
                    }
                }else{
                    if($categories->id!=1){
                    if($category->parent_id!=$categories->parent_id){
                        $result.="<li class='flex items-center text-center gap-1 mr-5 text-blue-300'><input type='radio' name='parent_id' value='$categories->id'>$categories->title</li>";
                    }else{
                        $result.="<li class='flex items-center text-center gap-1 mr-5 text-blue-300'><input type='radio' checked name='parent_id' value='$categories->id'>$categories->title</li>";
                    }
    
                    }
                }
                if($categories["children"]){
                    // dd($categories["children"]);
                    foreach ($categories["children"]->all() as $children) {
                        if($children->is_active==1){
                            $result.= "<ul class='pr-5'>";
                            if($category->parent_id!=$categories->parent_id){
                                $result.="<li class='flex items-center text-center gap-1 mr-5'><input type='radio' name='parent_id' value='$children->id'>$children->title</li>";
        
                            }else{
                                $result.="<li class='flex items-center text-center gap-1 mr-5'><input type='radio' checked name='parent_id' value='$children->id'>$children->title</li>";
                            }
                            $result.= "</ul>";
                            if($children["children"]){
                                $result.=$this->recursiveCategory3($children['children']->all());
                            }
                        }
                    }
                }
            }else{
                $result='';
            }
            return $result;
        }
        foreach ($categories as $category) {
            // $result.='<ul>';
            $result.=$this->recursiveCategory3($category);
            $result.='</ul>';
        }
        $result.='</ul>';
        return $result;
    }
    public function recursive1($category){
        return $this->recursive2($category->children->all());
    }
    public function recursive2($categories){
        $result="<ul class='pr-5'>";
        if(!is_array($categories)){
            if($categories->parent_id==0){
                $result.="<li class='flex items-center text-center gap-1 -mr-3'>$categories->title</li>";
            }else{
                if($categories->id!=1){
                    $result.="<li class='flex items-center text-center gap-1 mr-5'>$categories->title</li>";
                }
            }
            if($categories["children"]){
                // dd($categories["children"]);
                foreach ($categories["children"]->all() as $children) {
                    $result.= "<ul class='pr-5'>";
                    $result.="<li class='flex items-center text-center gap-1 mr-5'>$children->title</li>";
                    $result.= "</ul>";
                    if($children["children"]){
                        $result.=$this->recursive2($children['children']->all());
                    }
                }
            }

            return $result;
        }
        foreach ($categories as $category) {
            // $result.='<ul>';
            $result.=$this->recursive2($category);
            $result.='</ul>';
        }
        $result.='</ul>';
        return $result;
    }

}
