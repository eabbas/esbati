<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\role;
use App\Models\role_user;
use App\Models\permision;
use App\Models\role_permision;

class RoleController extends Controller
{

    public function create( ){
        $permisions=Permision::all();
        return view('admin.user.roles.create',['permisions'=>$permisions]);
        dd('create');
    }
    public function store( Request $request){
        // dd($request->all());
        $createdRole=Role::create([
            "fa_title" => $request->fa_title,
            "ea_title" => $request->ea_title,
        ]);
        if(isset($request->permisions)){
            foreach ($request->permisions as $permision_id) {
                Role_permision::create([
                    'role_id'=>$createdRole->id,
                    'permision_id'=>$permision_id,
                ]);
            }
        }
        return to_route('role.list');
        dd('list');
    }
    public function list(){
        $roles=Role::all();
        $permisions=Permision::all();
        return view('admin.user.roles.list',['roles'=>$roles , 'permisions'=>$permisions]);
        dd('list');
    }
    public function update( Request $request ){
        $role=Role::find($request->role_id);
        $role->fa_title=$request->fa_title;
        $role->ea_title=$request->ea_title;
        $role->save();
        if(isset($request->permisions)){
            foreach ($request->permisions as $permision_id) {
                Role_permision::create([
                    'role_id'=>$role->id,
                    'permision_id'=>$permision_id,
                ]);
            }
        }
        return to_route('role.list');
        dd('update');
    }
    public function delete( Role $role ){
        
        foreach ($role->permisions as $permision) {
            $permision->pivot->delete();
        }
        $role->delete();
        return to_route('role.list');
        dd('delete');
    }
    public function getRole(Role $role){
        return response()->json($role);
    }
    public function getUsers(Role $role){
        
        return response()->json($role->users);
    }
    public function getpermisions(Role $role){
        
        return response()->json($role->permisions);
    }
}
