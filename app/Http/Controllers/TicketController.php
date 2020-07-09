<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       $this->middleware('admin');
    }

    public function index()
    {
        $tickets = Ticket::all();

        $user = auth()->user();

        $facturas = Invoice::where('customer_id',$user->id)->get();



        return view('tickets.index', compact('tickets','facturas', 'user'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
