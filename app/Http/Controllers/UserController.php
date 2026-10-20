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
use App\Models\cart;
use App\Models\advertisement;
use App\Models\product_labels;
use App\Models\phone_code;
use App\Models\staticUser;
use App\Models\support_information;
use App\Models\banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\checkUserExist;
use App\Http\Middleware\checkAuthUser;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Str;
use Log;
class UserController extends Controller
{

    public function create(){
        $roles=role::all();
        return view('admin.user.create',['roles'=>$roles]);
    }
    public function store(Request $request){
        // dd($request->all());
        $phone_code=phone_code::where('phoneNumber',$request->phoneNumber)->first();
        if($phone_code->code!=$request->code){
            return redirect('signup');
        }
        $validation=$request->validate(
            [
                'name'=>['required','max:255'],
                'family'=>['required','max:255'],
                'phoneNumber'=>['required','max:11'],
                // 'email'=>['required','max:255'],
                'password'=>['required','max:255'],
            ],[
                'name.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'name.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'family.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'family.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'phoneNumber.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'phoneNumber.max'=>'تعداد کاراکتر های مجاز 11 تا میباشد',
                // 'email.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                // 'email.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
                'password.required'=>'لطفا فیلد مورد نظر را پر فرمایید',
                'password.max'=>'تعداد کاراکتر های مجاز 255 تا میباشد',
            ]
        );
        $user=User::where('phoneNumber',$validation['phoneNumber'])->first();
        if($user){
            Auth::login($user);
            $user=Auth::user();
            return redirect('/');
        }


        $createdUser=User::create([
            "name"=>$validation['name'],
            "family"=>$validation['family'],
            "phoneNumber"=>$validation['phoneNumber'],
            "email"=>$request['email'],
            "password"=>$validation['password'],
        ]);
        $role=role::where('ea_title','user')->first();
        role_user::create([
            'user_id'=>$createdUser->id,
            'role_id'=>$role->id,
        ]);
        Auth::login($createdUser);
        return redirect('/');
    }
    public function login(Request $request){

        $user=User::where('phoneNumber',$request->phoneNumber)->first();
        Auth::login($user);
        return redirect('/');
    }
    public function list(){
        $users=User::all();
        return view('admin.user.list',['users'=>$users]);
    }
    public function single(User $user){
        return view('admin.user.single',['user'=>$user]);
    }
    public function edit(User $user){
        $user->roles;
        $roles=role::all();
        return view('admin.user.edit',['user'=>$user , 'roles'=>$roles]);
    }
    public function update(Request $request , User $user){
        // dd($request->all());
        $user->name=$request->name;
        $user->family=$request->family;
        $user->phoneNumber=$request->phoneNumber;
        $user->email=$request->email;
        if($request->password!=null){
            $user->password=Hash::make($request->password);
        }
        $user->save();
        $user->roles;
        foreach ($user->roles as $role) {
            $role->pivot->delete();
        }
        if(isset($request->roles)){
            foreach ($request->roles as $role_id) {
                role_user::create([
                    'user_id'=>$user->id,
                    'role_id'=>$role_id,
                ]);
            }
        }else{
            $role=role::where('ea_title','user')->first();
            role_user::create([
                'user_id'=>$user->id,
                'role_id'=>$role->id,
            ]);
        }
        return to_route('user.list');
    }
    public function editProfile(Request $request , User $user){
        if($request->name!=null){
            $user->name=$request->name;
        }
        if($request->family!=null){
            $user->family=$request->family;
        }
        if($request->phoneNumber!=null){
            $user->phoneNumber=$request->phoneNumber;
        }
        if($request->email!=null){
            $user->email=$request->email;
        }
        $user->save();
        return response()->json($user);
    }
    public function changeAvatar(Request $request , User $user){
        Log::info($request->all());
        $file=$request->file('avatar');
        $fullName=Str::uuid().$file->getClientOriginalName();
        $extension=$file->getClientOriginalExtension();
        Log::info($fullName);
        Log::info($extension);
        if($user->path!=null){
            storage::disk('public')->delete("user_medias/".$user->path);
            $user->path=null;
        }
        if($user->path==null){
            $file->storeAs("user_medias","$fullName","public");
            $user->path=$fullName;
        }
        $user->save();
        return response()->json([
            'success' => true,
            'avatar_url' => asset('storage/user_medias/' . $user->path)
        ]);
        // return response()->json('moz');
    }
    public function changePassword(Request $request , User $user){
        Log::info($request->password);
        $user->password=Hash::make($request->password);
        $user->save();
        return response()->json(true);
    }
    public function delete(User $user){
        
        foreach ($user->roles as $role) {
            $role->pivot->delete();
        }
        $user->delete();
        return to_route('user.list');
    }
    public function loginPage(){
        // dd('loginPage');
        return view('loginpage');
    }
    public function logOut(){
        Auth::logout();
        return redirect('/');
        // dd('logOut');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function profile(){
        return view('profile');
    }
    public function firstPage(){
        return view('firstPage');
    }
    public function send_code_signup(Request $request){
        $flag = true;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $flag = 'cashSave';
        }
        Log::info($flag);
        if ($flag) {
            $code = rand(1000, 10000);
            phone_code::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);

            $ch = curl_init('https://api.iranpayamak.com/ws/v1/sms/pattern');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept: application/json',
                'Api-Key: M1MIQPQ9s85i6dxdzTeRGx9t87AtRQJlXNiu01e7awuQz94TkI',
                'Content-Type: application/json'
            ]);
            $payload = [
                'code' => '7fvdx77gveizxqn',
                'attributes' => [
                    'activation_code' => $code,
                ],
                'recipient' => $request->phoneNumber,
                'line_number' => '50002178584000',
                'number_format' => 'english'
            ];
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
            $response = curl_exec($ch);

        }
        return response()->json($flag);
    }
    public function send_code_login(Request $request){
        $flag = false;
        $user = User::where('phoneNumber', $request->phoneNumber)->first();
        if ($user) {
            $flag = true;
        }
        Log::info($user);
        if ($flag) {
            $code = rand(1000, 10000);
            phone_code::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);

            $ch = curl_init('https://api.iranpayamak.com/ws/v1/sms/pattern');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept: application/json',
                'Api-Key: M1MIQPQ9s85i6dxdzTeRGx9t87AtRQJlXNiu01e7awuQz94TkI',
                'Content-Type: application/json'
            ]);
            $payload = [
                'code' => '7fvdx77gveizxqn',
                'attributes' => [
                    'activation_code' => $code,
                ],
                'recipient' =>  $request->phoneNumber,
                'line_number' => '50002178584000',
                'number_format' => 'english'
            ];
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
            $response = curl_exec($ch);
        }
        return response()->json($flag);
    }
    public function removeActivationCode(Request $request){
        $row = phone_code::where('phoneNumber', $request->phoneNumber)->first();
        if ($row) {
            $row->delete();
        }
        return response()->json($row);
    }
    public function signup_with_ajax(Request $request){
        $createdUser=User::create([
            "name"=>$request['name'],
            "family"=>$request['family'],
            "phoneNumber"=>$request['phoneNumber'],
            "email"=>null,
            "password"=>$request['password'],
        ]);
        $role=role::where('ea_title','user')->first();
        role_user::create([
            'user_id'=>$createdUser->id,
            'role_id'=>$role->id,
        ]);
        Auth::login($createdUser);
        return redirect()->back();
        // dd($request->all());
    }
    public function signin_with_ajax(Request $request){
        $user=User::where('phoneNumber',$request->phoneNumber)->first();
        Auth::login($user);
        return redirect()->back();
        // dd($request->all());

    }
    public function checkUser(Request $request){
        $exists=false;
        $confirmation=false;
        $confirmation=false;
        $user= User::where('phoneNumber',$request['phoneNumber'])->first();

        if($user){
            $exists=true;
        }
        
        if($request->state=='signin'){
            if($request->password_format=='password'){
                if(Hash::check($request->password_or_code,$user->password)){
                    $confirmation=true;
                }
            }else{
                $phone_code=phone_code::where('phoneNumber',$request->phoneNumber)->first();
                if($phone_code){
                    if($phone_code->code == $request->password_or_code && $request->phoneNumber == $phone_code->phoneNumber){
                        $confirmation=true;
                    }
                }
            }
        }
        if($request->state=='signup'){
            $phone_code=phone_code::where('phoneNumber',$request->phoneNumber)->first();
            if($phone_code){
                if($phone_code->code == $request->password_or_code && $request->phoneNumber == $phone_code->phoneNumber){
                    $confirmation=true;
                }
            }
        }
        return response()->json(
            [
                'exists'=>$exists,
                'state'=>$request->state ,
                'confirmation'=>$confirmation,
                'format'=>$request->password_format,
             ]
            // $request->all()
        );
    }
}
