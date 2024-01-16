<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name', 'description', 'image', 'category_id', 'subcategory_id',
        'available_for_sale', 'price_type', 'brand', 'condition', 'model', 'price',
        'status', 'product_owner', 'created_at', 'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(ProductSubCategory::class, 'subcategory_id', 'id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'product_owner', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'product_id', 'id');
    }
}
