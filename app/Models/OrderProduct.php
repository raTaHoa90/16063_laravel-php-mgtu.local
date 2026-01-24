<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model {
    public $timestamps = false;

    protected $table = 'order_product';
    protected $fillable = [
        'order_id',      // ссылка на заказ
        'product_id',    // ссылка на товар
        'count_product', // количество этого товара
        'param_values'   // внесенные параметры товара для заказа
    ];

    function product(): Product{
        return Product::find($this->product_id);
    }

}
