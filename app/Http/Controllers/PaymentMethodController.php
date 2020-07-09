<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
        $payments = PaymentMethod::all();

        return view('pagos.index', compact('payments'));
    }


    public function create()
    {
        return view('pagos.create');
    }


    public function store(Request $request)
    {
        $payment = new PaymentMethod();
        $payment->name = request('name');

        $payment->save();

        return redirect('/pagos');
    }


    public function show($id)
    {
        $payment = PaymentMethod::findOrFail($id);

        return view('pagos.show', compact('payment'));
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
        PaymentMethod::destroy($id);

        return redirect('/pagos');

    }
}
