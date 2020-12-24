<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hakak = [
      'nik','name','level'.'username','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',

    ];

    public static function postlogin($username, $password)
    {
        $hakak= Auth::attempt([
        "username"=>$username,
        "password"=>$password], true);

        return $hakak;
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected static $casts = [
        'email_verified_at' => 'datetime',
    ];
}
