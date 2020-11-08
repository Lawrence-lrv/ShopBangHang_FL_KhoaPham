<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill_DetailModel extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';

    public function products() {
        return $this->belongsTo('App\Models\ProductsModel', 'id_products','id');
    }

    public function bills() {
        return $this->belongsTo('App\Models\BillsModel', 'id_bill','id');
    }
}