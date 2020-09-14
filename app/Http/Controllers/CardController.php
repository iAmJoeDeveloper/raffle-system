<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
//        $cards = Card::all();
//        $cards = DB::Table('Cards')->paginate(10);
        $cards = Card::paginate(10);
        return view('cards.index', ['cards'=>$cards]);
    }


    public function create()
    {
        return view('cards.create');
    }


    public function store(Request $request)
    {
        $card = new Card();

        $card->name = request('name');
        $card->status = 'Active';

        $card->save();


        return redirect()->route('cards.index')->with('success', 'Tarjeta Registrada con Éxito');

    }


    public function show($id)
    {
        $card = Card::findOrFail($id);

        return view('cards.show', compact('card'));
    }


    public function edit($id)
    {
        $card = Card::findOrFail($id);

        return view('cards.edit', compact('card'));
    }


    public function update(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $card->name = $request->get('name');

        $card->update();

        return redirect()->route('cards.index');
    }


    public function destroy($id)
    {
        Card::destroy($id);

        return redirect()->route('cards.index');
    }
}
