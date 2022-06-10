<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function scopeParentCategory($query)
    {
        return $query->whereNull('parent_id');
    }

    public function scopeShow($query)
    {
        return $query->where('status', '=', 'show');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Product::class);
    }

    protected function parentId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => is_null($value) ? "ندارد" : $value
        );
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if ($value == 'show') return 'منتشر شده';
                if ($value == 'notShow') return 'منتشر نشده';
            }
        );
    }
}
