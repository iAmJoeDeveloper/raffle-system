<?php

namespace App\Http\Controllers;

use App\Prize;
use App\PrizeGroup;
use App\Raffle;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $prizes = Prize::all();

        return view('premios.index', compact('prizes'));
    }


    public function create()
    {
        $groups = PrizeGroup::pluck('description','id');
        $raffles = Raffle::pluck('name', 'id');

        return view('premios.create', compact('groups','raffles'));
    }


    public function store(Request $request)
    {
        $prize = new Prize();

        $prize->raffle_id = request('raffle_id');
        $prize->prizeGroup_id = request('prizeGroup_id');
        $prize->name = request('name');
        $prize->description = request('description');
        $prize->quantity = request('quantity');
        $prize->value = request('value');

        $prize->save();

        return redirect('/premios');
    }


    public function show(Prize $prize)
    {
        //
    }


    public function edit(Prize $prize)
    {
        //
    }


    public function update(Request $request, Prize $prize)
    {
        //
    }


    public function destroy($id)
    {
        Prize::destroy($id);

        return redirect('/premios');
    }
}
