<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    //
    protected $table='products_models';
    protected $fillable=['name','id_unique','price','file_path','change_discount'];
    
}
