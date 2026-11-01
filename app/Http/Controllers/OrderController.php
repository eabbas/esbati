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
use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use Log;
class OrderController extends Controller
{
    public function store(Request $request){
        $user=Auth::user();
        $code = rand(1000, 100000000);
        $order=order::create([
            'address_id'=>$request->address,
            'user_id'=>$user->id,
            'order_status_id'=>1,
            'order_code'=>$code,
        ]);
        $user->load(['carts'=>function($query){$query->where('order_id',null)->get();}]);
        foreach ($user->carts as $cart) {
            $cart->order_id=$order->id;
            $cart->save();
        }
        return view('waitingPage',['code'=>$code]);
    }
    public function list(){
        $orders=Auth::user()->orders;
        foreach ($orders as $order) {
            $total_price=0;
            $order->address;
            foreach ($order->carts as $cart) {
                $cart->product;
                $total_price+=$cart->product->price*$cart->quantity;
                foreach ($cart->product->medias as $media) {
                    if($media->is_main==1){
                        $cart->product->image=$media->path;
                    }
                }
            }
            $order->total_price=$total_price;
        }
        // dd($orders);
        return view('client.order.list',['orders'=>$orders]);
        dd('list');
    }
    public function edit(){
        dd('edit');
    }
    public function update(){
        dd('update');
    }
    public function delete(){
        dd('delete');
    }
}
