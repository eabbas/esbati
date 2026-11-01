<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DiscuntCodeController;
use App\Http\Controllers\AddressController;
use App\Http\Middleware\checkAuthUser;
use App\Http\Middleware\checkUserExist;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[UserController::class,'firstPage']);
Route::get('/login', function () { return view('login'); })->middleware(checkAuthUser::class);
Route::get('/signup', function () { return view('signup'); })->middleware(checkAuthUser::class);

Route::group([
    'prefix'=>'user',
    'as'=>'user.',
    'controller'=>UserController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/single/{user}','single')->name('single');
    Route::get('/edit/{user}','edit')->name('edit');
    Route::post('/update/{user}','update')->name('update');
    Route::get('/delete/{user}','delete')->name('delete');
    Route::post('/edit/profile/{user}','editProfile')->name('editProfile');
    Route::post('/change/avatar/{user}','changeAvatar')->name('changeAvatar');
    Route::post('/change/password/{user}','changePassword')->name('changePassword');

    Route::post('/login','login')->name('login')->middleware(checkUserExist::class);
    Route::post('/signup','signup')->name('signup');
    Route::get('/logOut','logOut')->name('logOut');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/profile','profile')->name('profile');
    Route::post('/send/code/login','send_code_login')->name('send_code_login');
    Route::post('/send/code/signup','send_code_signup')->name('send_code_signup');
    Route::post('/remove/activation/code','removeActivationCode')->name('removeActivationCode');
    Route::post('/signup_with_ajax','signup_with_ajax')->name('signup_with_ajax');
    Route::post('/signin_with_ajax','signin_with_ajax')->name('signin_with_ajax');
    Route::post('/checkUser','checkUser')->name('checkUser');
});
Route::group([
    'prefix'=>'role',
    'as'=>'role.',
    'controller'=>RoleController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::post('/update','update')->name('update');
    Route::get('/delete/{role}','delete')->name('delete');
    Route::get('/getRole/{role}','getRole')->name('getRole');
    Route::get('/get/role/users/{role}','getUsers')->name('getUsers');
    Route::get('/get/role/permisions/{role}','getpermisions')->name('getpermisions');
});
Route::group([
    'prefix'=>'permision',
    'as'=>'permision.',
    'controller'=>PermisionController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/edit/{permision}','edit')->name('edit');
    Route::post('/update/{permision}','update')->name('update');
    Route::get('/delete/{permision}','delete')->name('delete');
    Route::get('/getPermision/{permision}','getPermision')->name('getPermision');
    Route::get('/get/permision/users/{permision}','getUsers')->name('getUsers');
    Route::get('/get/permision/roles/{permision}','getroles')->name('getroles');

});


route::group([
    'prefix'=>'product',
    'as'=>'product.',
    'controller'=>ProductController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::post('/searchProduct','searchProduct')->name('searchProduct');
    Route::get('/list','list')->name('list');
    Route::get('/single/product/{product}','single')->name('single');
    Route::get('/single/package/{package}','singlePackage')->name('singlePackage');
    Route::get('/edit/{product}','edit')->name('edit');
    Route::post('/update/{product}','update')->name('update');
    Route::get('/delete/{product}','delete')->name('delete');
    Route::get('category/attributes/{category}','categoryAttributes')->name('categoryAttributes');
    Route::get('/packages/{product}','packages')->name('packages');
    Route::get('/attributes/{product}','attributes')->name('attributes');
    // Route::post('/get/filtered/products','getFilteredProducts')->name('getFilteredProducts');
    Route::post('/get/filtered/products','getFilters')->name('getFilters');

    
    Route::get('/client/product/{product}','client_pro_single')->name('client_pro_single');
    Route::get('/header/test','header_test')->name('header_test');

    Route::get('/get/noAuth/{product}','getNoAuthProduct')->name('getNoAuthProduct');
});
route::group([
    'prefix'=>'cart',
    'as'=>'cart.',
    'controller'=>CartController::class,
],function(){    
    Route::post('/store/cart','store')->name('store');
    Route::post('/update/cart/{cart}','update')->name('update');
    Route::get('/delete/cart/{cart}','delete')->name('delete');
    Route::get('/list/cart','list')->name('list');
    Route::get('/user/cart/list','userCartList')->name('userCartList');
    Route::post('/checkOutForm','checkOutForm')->name('checkOutForm');
});
route::group([
    'prefix'=>'order',
    'as'=>'order.',
    'controller'=>OrderController::class,
],function(){    
    Route::post('/store/order','store')->name('store');
    Route::get('/list/order','list')->name('list');
    Route::get('/edit/order','edit')->name('edit');
    Route::post('/update/order','update')->name('update');
    Route::get('/delete/order','delete')->name('delete');
});
route::group([
    'prefix'=>'category',
    'as'=>'category.',
    'controller'=>CategoryController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/single/{category}','single')->name('single');
    Route::get('/edit/{category}','edit')->name('edit');
    Route::post('/update/{category}','update')->name('update');
    Route::get('/delete/{category}','delete')->name('delete');
});
route::group([
    'prefix'=>'brand',
    'as'=>'brand.',
    'controller'=>BrandController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/single/{brand}','single')->name('single');
    Route::get('/edit/{brand}','edit')->name('edit');
    Route::post('/update/{brand}','update')->name('update');
    Route::get('/delete/{brand}','delete')->name('delete');
});
route::group([
    'prefix'=>'discuntCode',
    'as'=>'discuntCode.',
    'controller'=>DiscuntCodeController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/edit/{discuntCode}','edit')->name('edit');
    Route::post('/update/{discuntCode}','update')->name('update');
    Route::get('/delete/{discuntCode}','delete')->name('delete');
    Route::post('/checkCode','checkCode')->name('checkCode');
});
Route::group([
    'prefix'=>'address',
    'as'=>'address.',
    'controller'=>AddressController::class,
],function(){
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/list','list')->name('list');
    Route::get('/get/address/{address}','getAddress')->name('getAddress');
    Route::post('/update/{address}','update')->name('update');
    Route::get('/delete/{address}','delete')->name('delete');
    Route::post('/get/cities','getCities')->name('getCities');
    Route::post('/create/ajax','createAjax')->name('createAjax');
});
