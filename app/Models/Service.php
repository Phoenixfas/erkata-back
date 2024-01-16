<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    protected $fillable = [
        'service_name', 'description', 'image', 'category_name', 'number_of_bedrooms',
        'number_of_bathrooms', 'number_of_people', 'area', 'location', 'brand',
        'condition', 'price_type', 'price', 'facilities', 'job_type', 'job_sector',
        'salary_type', 'experience', 'salary_amount', 'responsibility', 'status',
        'charge', 'service_owner', 'created_at', 'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_name', 'name');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'service_owner', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'service_id', 'id');
    }
}
