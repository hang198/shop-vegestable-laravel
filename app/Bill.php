<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function customer() {
        $this->belongsTo('App\Customer');
    }
    public function bill_details() {
        $this->hasMany('App\BillDetail');
    }
}
