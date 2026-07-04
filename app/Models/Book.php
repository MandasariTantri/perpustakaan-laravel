<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Borrowing;
class Book extends Model
{
    protected $fillable = [
        'category_id',
        'judul',
        'penulis',
        'tahun',
        'stok',
        'cover'
    ];
public function borrowings()
{
    return $this->hasMany(Borrowing::class);
}
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}