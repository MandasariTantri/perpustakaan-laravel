<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function tampil()
    {
        $data = Category::all();

        return view('kategori.index', compact('data'));
    }

    public function tambah()
    {
        return view('kategori.tambah');
    }

    public function simpan(Request $request)
    {
        Category::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    public function edit($id)
    {
        $data = Category::findOrFail($id);

        return view('kategori.edit', compact('data'));
    }

    public function ubah(Request $request, $id)
    {
        Category::findOrFail($id)->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    public function hapus($id)
    {
        Category::findOrFail($id)->delete();

        return redirect('/kategori');
    }
}