<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class FacturasRegistradasController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $facturas = Invoice::where('customer_id',$user->id)->get();

        return view('cliente.facturasRegistradas', compact('facturas'));
    }

}
