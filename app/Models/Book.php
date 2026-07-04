<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    protected $fillable = [
        'category_id',
        'judul',
        'penulis',
        'tahun',
        'stok'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}