<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'photo',
        'address',
        'city',
        'phone',
        'email',
    ];

    protected $guarded = ['id'];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
