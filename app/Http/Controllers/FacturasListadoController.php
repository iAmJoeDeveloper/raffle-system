<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;

class FacturasListadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
      	$invoices = Invoice::orderBy('invoiceDate','DESC')->paginate(10);

        return view('listados.index', compact('invoices'));
    }

    public function show($invoice_id)
    {
    	$invoice = Invoice::where('id', $invoice_id)->get();

    	return view('listados.show', compact('invoice'));
    }
}
