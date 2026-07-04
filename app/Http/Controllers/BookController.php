<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function tampil()
    {
        $data = Book::with('category')->get();

        return view('buku.index', compact('data'));
    }

    public function tambah()
    {
        $kategori = Category::all();

        return view('buku.tambah', compact('kategori'));
    }

    public function simpan(Request $request)
    {
        Book::create([
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'stok' => $request->stok,
        ]);

        return redirect('/buku');
    }

    public function edit($id)
    {
        $data = Book::findOrFail($id);
        $kategori = Category::all();

        return view('buku.edit', compact('data','kategori'));
    }

    public function ubah(Request $request, $id)
    {
        Book::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'stok' => $request->stok,
        ]);

        return redirect('/buku');
    }

    public function hapus($id)
    {
        Book::findOrFail($id)->delete();

        return redirect('/buku');
    }
}