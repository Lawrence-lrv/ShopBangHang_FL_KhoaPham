<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_ProductsModel extends Model
{
    use HasFactory;
    protected $table = 'type_products';

    public function products() {
        return $this->hasMany('App\Models\ProductsModel', 'id_type', 'id');
    }
}
