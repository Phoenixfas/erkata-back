<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'image', 'created_at', 'updated_at'
    ];
    public function services()
    {
        return $this->hasMany(Service::class, 'category_name', 'name');
    }
}
