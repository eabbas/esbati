<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;

class BrandController extends Controller
{
    public function create(){
        return view('brand.create');
        dd('create');
    }
    public function store(Request $request){
        // dd($request->all());

        $validate=$request->validate(
        [
            'title'=>['required'],
            // 'slug'=>['required'],
        ],[
            'title.required'=>'فیلد مورد نظر را پر کنید',
            // 'slug.required'=>'فیلد مورد نظر را پر کنید',
        ]);
        $created_brand=brand::create([
            'title'=>$validate['title'],
            'logo_path'=>$request['logo_path'],
            'slug'=>$request['slug'],
            'description'=>$request['description'],
            'show_in_home'=>$request['show_in_home'],
            'is_active'=>$request['is_active'],
        ]);
        return to_route('brand.list');
        dd('store');
    }
    public function list(){
        $brands=brand::all();
        return view('brand.list',['brands'=>$brands]);
        dd('list');
    }
    public function single(brand $brand){
        return view('brand.single',['brand'=>$brand]);
        dd('single');
    }
    public function edit(brand $brand){
        return view('brand.edit',['brand'=>$brand]);
        dd('edit');
    }
    public function update(Request $request, brand $brand){
        // dd($request->all());
        $validate=$request->validate(
        [
            'title'=>['required'],
            'slug'=>['required'],
        ],[
            'title.required'=>'فیلد مورد نظر را پر کنید',
            'slug.required'=>'فیلد مورد نظر را پر کنید',
        ]);
        $brand->title=$validate['title'];
        $brand->logo_path=$request['logo_path'];
        $brand->slug=$validate['slug'];
        $brand->description=$request['description'];
        $brand->show_in_home=$request['show_in_home'];
        $brand->is_active=$request['is_active'];
        $brand->save();
        return to_route('brand.list');
        dd('update');
    }
    public function delete(brand $brand){
        $brand->delete();
        return to_route('brand.list');
        dd('delete');
    }
}
