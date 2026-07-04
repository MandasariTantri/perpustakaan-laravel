<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;
use App\Models\Book;

class BorrowingController extends Controller
{
    public function tampil()
    {
        $data = Borrowing::with('book')->get();

        return view('peminjaman.index', compact('data'));
    }

    public function tambah()
    {
        $buku = Book::all();

        return view('peminjaman.tambah', compact('buku'));
    }

    public function simpan(Request $request)
    {
        Borrowing::create([
            'book_id' => $request->book_id,
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => $request->status
        ]);

        return redirect('/peminjaman');
    }

    public function edit($id)
    {
        $data = Borrowing::findOrFail($id);

        $buku = Book::all();

        return view('peminjaman.edit', compact('data','buku'));
    }

    public function ubah(Request $request, $id)
    {
        $data = Borrowing::findOrFail($id);

        $data->update([
            'book_id' => $request->book_id,
            'nama_peminjam' => $request->nama_peminjam,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => $request->status
        ]);

        return redirect('/peminjaman');
    }

    public function hapus($id)
    {
        Borrowing::findOrFail($id)->delete();

        return redirect('/peminjaman');
    }
}   