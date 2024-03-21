<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
        'provider_id',
    ];

    protected $guarded = ['id'];

    public function provider() {
        return $this->belongsTo(Provider::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
