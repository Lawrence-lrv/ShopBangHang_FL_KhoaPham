<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 'customers';

    public function bills() {
        return $this->hasMany('App\Models\BillsModel', 'id_customer', 'id');
    }
}
