<?php

namespace App\Models;

use App\Casts\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $visible = ['id', 'name', 'price'];

    protected $casts = [
        'price' => Money::class,
    ];

    public function scopePop($query)
    {
        return $query->where('total_seen', '>', 500);
    }

    public function scopeFav($query)
    {
        return $query->where('total_sell_quantity', '>', 25);
    }

    public function scopeNameLike($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
