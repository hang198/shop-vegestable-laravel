<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    public function bill() {
        $this->belongsTo('App\Bill');
    }
    public function product(){
        $this->belongsTo('App\Product');
    }
}
