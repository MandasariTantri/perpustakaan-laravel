<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Mpdf\Mpdf;

class LaporanController extends Controller
{
    public function peminjaman()
    {
        $data = Borrowing::with('book')->get();

        $html = view(
            'laporan.peminjaman',
            compact('data')
        )->render();

        $mpdf = new Mpdf();

        $mpdf->WriteHTML($html);

        $mpdf->Output(
            'laporan-peminjaman.pdf',
            'I'
        );
    }
}