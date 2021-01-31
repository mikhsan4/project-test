<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function merchant_products()
    {
        return $this->hasMany('App\Models\MerchantProduct');
    }

    
    protected $table = 'products';
    public $timestamps = true;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'name',
        'categoryName',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
