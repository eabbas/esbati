<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Log;
use App\Models\permision;
use App\Models\role;
use App\Models\role_permision;
use App\Models\address;
use App\Models\role_user;
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'family',
        'phoneNumber',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles(){
        return $this->belongsToMany(role::class,'role_users');
    }
    public function hasRole($roles){
        Log::info($roles);
        // $flag=false;
        // foreach ($roles as $role) {            
        //     $flag=$this->roles()->whereIn('ea_title',$roles)->exists();
        //     if($flag==true){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // }
        return $this->roles()->whereIn('ea_title',$roles)->exists();
    }
}
