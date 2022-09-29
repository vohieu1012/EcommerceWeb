<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens,Notifiable;
    protected $table ='register_models';
    protected $primarykey = 'id';
    protected $fillable = [
        'user_name', 'email', 'password', 'cf_password'
    ];
    public $timestamps = false;
   
}
