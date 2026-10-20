<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\phone_code;

class checkUserExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $result= '';
        $user=User::where('phoneNumber',$request->phoneNumber)->first();
        // dd($user);
        if($user){
            if(isset($request['code'])){
                $phone_code=phone_code::where('phoneNumber',$request->phoneNumber)->first();
                if($phone_code){
                    if($phone_code->code == $request->code && $request->phoneNumber == $phone_code->phoneNumber){
                        return $next($request);
                    }
                }
            }else{
                if(Hash::check($request->password,$user->password)){
                    return $next($request);
                }
            }
        }
        return to_route('user.loginPage');
    }
}
