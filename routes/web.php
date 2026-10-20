<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisionController;
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