<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fullname',
        'phone_number',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public static function boot(){

        parent::boot();
        static::creating(function($user){
            $request = app('request');
            $userDetail=[];
            if ($request->has('password')) {
                $hashedPassword = bcrypt($request->input('password'));
                $userDetail['password'] = $hashedPassword;
            }
            $user->fill($userDetail);
        });
       
        
    }
    public function getStatusAttribute($value){
        return $value ===1 ? "active": "inactive";
    }
}
