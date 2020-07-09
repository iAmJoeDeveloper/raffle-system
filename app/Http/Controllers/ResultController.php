<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\PaymentMethod;
use App\Prize;
use App\PrizeGroup;
use App\Raffle;
use App\Result;
use App\Ticket;
use App\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;

class ResultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index($id)
    {
        $sorteo = Raffle::findOrFail($id);
        $prizes = Prize::all();
        $prizeGroup = PrizeGroup::all();
        $results = Result::all();
        $customers = User::all();
        $tickets = Ticket::all();
        $invoices = Invoice::all();

        return view('resultados.index',compact('sorteo','prizeGroup','results', 'customers', 'tickets','invoices','prizes'));
    }

    public function winner($raffle_id, $prize_id)
    {
        $ticketWinner = Ticket::where('raffle_id', $raffle_id)->inRandomOrder()->limit(1)->get();;
        foreach ($ticketWinner as $detail){
         $ticketNumber = $detail->ticketNumber;
         $invoice_id = $detail->invoice_id;
         $ticket_id = $detail->id;
        }

        $invoice = Invoice::where('id', $invoice_id)->get();
        foreach ($invoice as $ivc)
        {
            $customer_id = $ivc->customer_id;
            $invoiceNumber = $ivc->invoiceNumber;
            $paymentMethod_id = $ivc->paymentMethod_id;
        }

        $paymentMethod = PaymentMethod::where('id', $paymentMethod_id)->get();
        foreach ($paymentMethod as $method)
        {
            $paymentName = $method->name;
        }


        $customer = User::where('id', $customer_id)->get();
        foreach ($customer as $cust)
        {
            $name = $cust->name;
            $lastName = $cust->lastName;
            $documentType = $cust->documentType;
            $documentNumber = $cust->documentNumber;
        }

        $prize = Prize::where('id', $prize_id)->get();
        foreach ($prize as $p) {
            $prize_id = $p->id;
        }

        $winner = new Result();
        $winner->ticket_id = $ticket_id;
        $winner->customer_id = $customer_id;
        $winner->prize_id = $prize_id;
        $winner->save();

        Alert::html('¡FELICITACIONES!', "
        <br>
        <h2>{$name} {$lastName}</h2>
        <br>
        <p><b>{$documentType}: </b>{$documentNumber}</p>
        <p><b>Ticket Ganador: </b>{$ticketNumber} <i class=\"fas fa-ticket-alt\" style=\"color: #00A1DF\"></i></p>
        <p><b>Número de Factura: </b>{$invoiceNumber}</p>
        <p><b>Método de Pago: </b>{$paymentName}</p>
        ", 'Type')->autoClose(false);;
        return back();
    }
}
