<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
    ];

    protected $guarded = ['id'];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
