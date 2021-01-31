<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function merchant_products()
    {
        return $this->hasMany('App\Models\MerchantProduct');
    }

    protected $table = 'merchants';
    public $timestamps = true;
    protected $dates = [
        'deleted_at'
    ];
    
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'created_at',
        'updated_at'
    ];
}
