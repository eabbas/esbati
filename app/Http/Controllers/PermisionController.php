<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\role;
use App\Models\role_user;
use App\Models\permision;
use App\Models\role_permision;
use Log;
class PermisionController extends Controller
{
    public function create(){
        return view('admin.user.permisions.create');
        dd('create');
    }
    public function store( Request $request ){
        // dd($request->all());
        Permision::create([
            "fa_title" => $request->fa_title,
            "ea_title" => $request->ea_title,
        ]);
        return to_route('permision.list');
        dd('list');
    }
    public function list(){
        $permisions=Permision::all();
        return view('admin.user.permisions.list',['permisions'=>$permisions]);
        dd('list');
    }

    public function update( Request $request , Permision $permision){
        $permision->fa_title=$request->fa_title;
        $permision->ea_title=$request->ea_title;
        $permision->save();
        return response()->json($permision);
        dd('update');
    }
    public function delete( Permision $permision ){
        foreach ($permision->roles as $role) {
            $role->pivot->delete();
        }
        $permision->delete();
        return to_route('permision.list');
        dd('delete');
    }
    public function getPermision(Permision $permision){
        Log::info($permision);
        return response()->json($permision);
    }
    public function getroles(Permision $permision){
        return response()->json($permision->roles);
    }
}
