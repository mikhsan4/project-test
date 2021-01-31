<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    protected $table='categories';
    public $timestamps = true;
    protected $dates = [
        'deleted_at'
    ];
    
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
    
}
