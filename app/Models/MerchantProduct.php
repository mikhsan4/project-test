<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function merchants()
    {
        return $this->belongsTo('App\Models\Merchant');
    }

    protected $table = 'merchant_products';
    protected $dates = ['deleted_at'];

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'merchantName',
        'productName',
        'price',
        'product_id',
        'merchant_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
