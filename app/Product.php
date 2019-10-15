<?php /** @noinspection PhpUndefinedClassInspection */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function bill_detail()
    {
        $this->hasMany('App\BillDetail');
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}
