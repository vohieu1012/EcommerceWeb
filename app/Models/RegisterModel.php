<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class RegisterModel extends Model
{
    use HasApiTokens;
    //
    protected $table ='register_models';
    protected $primarykey = 'id';
    protected $fillable = [
        'user_name', 'email', 'password', 'cf_password'
    ];
    public function post()
    {
        return $this->hasMany('App\Models\ProductUsersModel','user_id', 'id');
    }
    public $timestamps = false;
}
