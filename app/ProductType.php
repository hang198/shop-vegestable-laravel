<?php /** @noinspection ALL */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'productTypes';

    public function products()
    {
        return $this->hasMany(Product::class,'productType_id');
    }
}
