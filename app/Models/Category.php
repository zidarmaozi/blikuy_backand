<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Jika primary key bukan 'id', tentukan di sini
    protected $primaryKey = 'category_id';

    // Fields yang boleh diisi secara massal
    protected $fillable = ['category'];

    public function products()
    {
        // Relasi One-to-Many ke tabel products
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}