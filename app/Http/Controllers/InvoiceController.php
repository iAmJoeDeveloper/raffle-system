<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Invoice;
use App\PaymentMethod;
use App\Raffle;
use App\Card;
use App\Commerce;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PDF;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       $this->middleware('admin');
    }

    public function index()
    {
        // $raffle = Raffle::findOrFail(3);
       $raffles = Raffle::all();
        return view('facturas.index', compact('raffles'));
    }


    public function create()
    {
        $user = auth()->user();
        $raffle = Raffle::findOrFail(3);
        $payments = PaymentMethod::pluck('name','id');
        $banks = Bank::pluck('name','id');
        $cards = Card::pluck('name','id');

        return view('facturas.create', compact('user','raffle', 'payments', 'banks', 'cards'));
    }


    public function store(Request $request)
    {
        $invoice = new Invoice();
        $invoice->raffle_id = 3;
        $invoice->commerce_id = request('commerce_id');
        $invoice->customer_id = auth()->user()->id;
        $invoice->paymentMethod_id = request('paymentMethod_id');
        $invoice->bank_id = request('bank_id');
        $invoice->card_id = request('card_id');
        $invoice->cardNumber = request('ccnum');
        $invoice->amount = request('amount');
        $invoice->invoiceNumber = request('invoiceNumber');
        $invoice->invoiceDate = request('invoiceDate');
        if ($request->hasFile('image'))
        {
            $path = Storage::disk('public')->put('uploads',$request->file('image'));
            $invoice->fill(['image'=> asset($path)])->save();
        }

        $tickets = $this->tickets($invoice);

        $user = auth()->user();

        Mail::send('emails.e-invoice-register',['customer' => $user, 'invoice'=>$invoice, 'tickets'=>$tickets], function($m) use($user){
            $m->to($user->email)->subject('Registro de Factura');
        });

        return redirect('/facturas')->with('success', 'Su fáctura generó '.$tickets. ' Tickets');
    }

    public function tickets($invoice)
    {
        $commerces = Commerce::where('id', $invoice->commerce_id)->get();
        foreach ($commerces as $commerce) {
            $location = $commerce->location_id;
        }

        if ($location == 7)
        {
            $amountTickets = 1;

            if($invoice->amount >= 6000)
            {
                $amountTickets = $amountTickets + 1;

                $calculo = $invoice->amount / 3000;
                $calculo = floor($calculo);
                $calculo = $calculo - 2;

                $amountTickets = $amountTickets + $calculo;
            }
        }else
        {
                $amountTickets = $invoice->amount / 3000;
                $amountTickets = floor($amountTickets);
        }
        
        
        if ($invoice->card_id == 8)
        {
            $amountTickets = $amountTickets * 2;
        }


        $this->guardarTickets($invoice, $amountTickets);

        return ($amountTickets);

    }

    public function guardarTickets($invoice, $amountTickets)
    {
        for ($i=1; $i <= $amountTickets; $i++)
        {
            $a=rand(1,99);

            $ticket = new Ticket();
            $ticket->invoice_id = $invoice->id;
            $ticket->raffle_id = $invoice->raffle_id;
            $ticket->ticketNumber = "B".$invoice->raffle_id.$invoice->id.$a;
            $ticket->save();
        }

    }

    public function voucher($tickets)
    {
        $pdf = PDF::loadView('voucher',compact('tickets'));

        return $pdf->download('voucher.pdf');
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
