<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'brand_id'];
    public $timestamps = true;

    // Relación con Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // Relación con Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
