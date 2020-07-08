<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function voucher($id)
    {
        $factura = Invoice::findOrFail($id);

        $pdf = PDF::loadView('voucher', compact('factura'));
        return $pdf->stream('voucher.pdf');
    }

}
