<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Borrowing extends Model
{
    protected $fillable = [
        'book_id',
        'nama_peminjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}