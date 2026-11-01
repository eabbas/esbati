<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\role;
use App\Models\role_user;
use App\Models\permision;
use App\Models\role_permision;
use App\Models\headerSetting;
use App\Models\hero;
use App\Models\category;
use App\Models\product;
use App\Models\advertisement;
use App\Models\product_labels;
use App\Models\phone_code;
use App\Models\staticUser;
use App\Models\support_information;
use App\Models\banner;
use App\Models\address;
use App\Models\province_city;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use Log;
class AddressController extends Controller
{
    public function create(){
        $provinces=province_city::where('parent',0)->get();
        return view('client.address.create',['provinces'=>$provinces , 'cities'=>$provinces[0]->cities]);
        dd('create');
    }
    public function store(Request $request){
        // dd($request->all());
        $phoneNumber=Auth::user()->phoneNumber;
        // dd($phoneNumber);
        address::create([
            'user_id'=>Auth::id(),
            'title'=>$request->title,
            'city_id'=>$request->city_id,
            'province_id'=>$request->province_id,
            'location'=>$request->location,
            'phoneNumber'=>$phoneNumber,
            'description'=>$request->description,
            'postalCode'=>$request->postalCode,
        ]);
        return to_route('address.list');
        dd('store');
    }
    public function list(){
        $addresses=Auth::user()->address;
        foreach ($addresses as $address) {
            $address->city=province_city::find($address->city_id)->title;
            $address->province=province_city::find($address->province_id)->title;
        }
        return view('client.address.list',['addresses'=>$addresses]);
    }
    public function update(Request $request ,address $address){
        // dd($request->all());
        $address->title=$request->title;
        $address->location=$request->location;
        $address->city_id=$request->city_id;
        $address->province_id=$request->province;
        $address->postalCode=$request->postalCode;
        $address->description=$request->description;
        $address->phoneNumber=$request->phoneNumber;
        $address->save();
        $address->province_id=province_city::find($address->province_id)->title;
        $address->city_id=province_city::find($address->city_id)->title;
        return response()->json(['address'=>$address]);
    }
    public function delete(Address $address){
        $address->delete();
        return to_route('address.list');
        dd('delete');
    }
    public function getCities(Request $request){
        // dd($request->all());
        $province=province_city::find($request->province_id);
        $x=$province->cities;
        return response()->json($x);
    }
    public function createAjax(Request $request){
        $address=address::create([
            'user_id'=>Auth::id(),
            'city_id'=>$request->city_id,
            'location'=>$request->location,
        ]);
        $address->city=province_city::find($request->city_id)->title;
        return response()->json($address);
    }
    public function getAddress(address $address){
        // $city=province_city::find($address->city_id);

        //city
        $address->cities=province_city::find($address->province_id)->cities;
        // $address->province=$city->parent;

        //province
        $address->provinces=province_city::where('parent',0)->get();
        return response()->json($address);
    }
}
