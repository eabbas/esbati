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
use App\Models\province_city;
use App\Models\attribute_package;
use App\Models\package_media;
use App\Models\brand;
use App\Models\cart;
use App\Models\address;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request){
        $cart=cart::create([
            'user_id'=>$request->user_id,
            'product_id'=>$request->product_id,
            'order_id'=>null,
            'quantity'=>1,
            'pack_id'=>null,
        ]);
        $cart->product;
        foreach ($cart->product->medias as $media) {
            if($media->is_main==1){
                $cart->product->path=$media->path;
            }
        }
        return response()->json(['cart'=>$cart , 'product'=>$cart->product]);
    }
    public function update(Request $request , cart $cart){
        $cart->quantity=$request->quantity;
        $cart->save();
        $product=product::find($cart->product_id);
        return response()->json(['cartId'=>$cart->id , 'quantity'=>$cart->quantity , 'product'=>$product]);
        dd('update');
    }
    public function delete(cart $cart){
        $product=product::find($cart->product_id);
        $cart->delete();
        return response()->json($product);
        dd('delete');
    }
    public function list(){
        dd('list');
    }
    public function userCartList(){
        $user=Auth::user();
        if($user){
            $user->load(['carts'=>function($query){$query->where('order_id',null)->get();}]);
            foreach ( $user->carts as $cart) {
                foreach ($cart->product->medias as $media) {
                    if($media->is_main==1){
                        $cart->product->path=$media->path;
                    }
                }
            };
        } 
        return view('client.cart.userCartList' ,['user'=>$user]);
    }
    public function checkOutForm(Request $request){
        $products=json_decode($request->products[0], true);
        // dd($products);
        $sum=0;
        $finalAmount=0;
        $benefit=0;
        $provinces=province_city::where('parent',0)->get();
        $user=Auth::user();
        // dd($user);
        if($user!=null){
            $user->load(['carts'=>function($query){$query->where('order_id',null)->get();}]);
            foreach ( $user->carts as $cart) {
                // هزینه کل
                $sum+=$cart->product->price * $cart->quantity;
                // هزینه قابل پرداخت
                if($cart->product->discunt!=null && $cart->product->discunt>0){
                    $finalAmount+=$cart->product->discunt * $cart->quantity;
                }else{
                    $finalAmount+=$cart->product->price * $cart->quantity;
                }
                // dd($cart);
            };
            $benefit = $sum - $finalAmount;
            $user->address;
            foreach ($user->address as $address) {
                $address->city_name=province_city::find($address->city_id)->title;
                $address->province_name=province_city::find($address->province_id)->title;
            }
            // dd($user);
            return view('client.cart.checkoutForm',
            [
                'provinces'=>$provinces ,
                'cities'=>$provinces[0]->cities ,
                'user'=>$user,
                'sum'=>$sum,
                'finalAmount'=>$finalAmount,
                'benefit'=>$benefit,
            ]);
        }else{
            foreach ($products as $product) {
                $sum+=$product['price'] * $product['quantity'];
                // هزینه قابل پرداخت
                if($product['discunt']!="" && $product['discunt']>0){
                    $finalAmount+=$product['discunt'] * $product['quantity'];
                }else{
                    $finalAmount+=$product['price'] * $product['quantity'];
                }
                
            }
            $benefit = $sum - $finalAmount;
            return view('client.cart.checkoutForm',
            [
                'provinces'=>$provinces ,
                'cities'=>$provinces[0]->cities ,
                'sum'=>$sum,
                'finalAmount'=>$finalAmount,
                'benefit'=>$benefit,
            ]);
        }
    }
}
