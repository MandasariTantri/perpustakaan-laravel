<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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
    $cover = null;

    if($request->hasFile('cover'))
    {
        $cover = $request->file('cover')
                        ->store('covers','public');
    }

    Book::create([
        'category_id' => $request->category_id,
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'tahun' => $request->tahun,
        'stok' => $request->stok,
        'cover' => $cover,
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
    $book = Book::findOrFail($id);

    $cover = $book->cover;

    if($request->hasFile('cover'))
    {
        if($book->cover)
        {
            Storage::disk('public')->delete($book->cover);
        }

        $cover = $request->file('cover')
                        ->store('covers','public');
    }

    $book->update([
        'category_id' => $request->category_id,
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'tahun' => $request->tahun,
        'stok' => $request->stok,
        'cover' => $cover,
    ]);

    return redirect('/buku');
}
    public function hapus($id)
    {
        Book::findOrFail($id)->delete();

        return redirect('/buku');
    }
}