<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillsModel extends Model
{
    use HasFactory;
    protected $table = 'bills';

    public function bill_detail() {
        return $this->hasMany('App\Models\Bill_DetailModel', 'id_bill', 'id');
    }

    public function customers() {
        return $this->belongsTo('App\Models\CustomerModel', 'id_customer', 'id');
    }
}
