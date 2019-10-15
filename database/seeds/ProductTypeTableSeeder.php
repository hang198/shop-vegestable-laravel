<?php

use Illuminate\Database\Seeder;

class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productType = new \App\ProductType();
        $productType->id = '1';
        $productType->name = 'Vegetables';
        $productType->description = 'Trong bữa cơm hàng ngày của chúng ta không thể không thiếu món rau bởi vậy nên các bà nội trợ đều mua rau củ';
        $productType->image = 'category-1.jpg';
        $productType->save();

        $product_type = new \App\ProductType();
        $product_type->id = '2';
        $product_type->name = 'Fruits';
        $product_type->description = 'Các loại quả đều cung cấp cho chúng ta hàm lượng vitamin rất tốt cho cơ thể';
        $product_type->image = 'category-2.jpg';
        $product_type->save();

        $product_type = new \App\ProductType();
        $product_type->id = '3';
        $product_type->name = 'Juices';
        $product_type->description = 'Hẳn là nhiều người trong chúng ta thích uống nước ép hơn là ăn rau củ vì nó rất dễ uống mà lại vẫn cung cấp đủ vitamin';
        $product_type->image = 'category-3.jpg';
        $product_type->save();

        $product_type = new \App\ProductType();
        $product_type->id = '4';
        $product_type->name = 'Dried';
        $product_type->description = 'Các loại hạt rất bổ cho tim mạch';
        $product_type->image = 'category-4.jpg';
        $product_type->save();

    }
}
