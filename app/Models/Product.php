<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Jika primary key bukan 'id', tentukan di sini
    protected $primaryKey = 'product_id';

    // Fields yang boleh diisi secara massal
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price',
        'img',
        'stock',
        'slug'
    ];

    public function category()
    {
        // Relasi One-to-Many (Inverse) ke tabel categories
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}