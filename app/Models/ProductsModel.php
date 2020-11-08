<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function type_products() {
        return $this->belongsTo('App\Models\Type_ProductsModel', 'id_type', 'id');
    }

    public function bill_detail() {
        return $this->hasMany('App\Models\Bill_DetailModel', 'id_product', 'id');
    }
}
