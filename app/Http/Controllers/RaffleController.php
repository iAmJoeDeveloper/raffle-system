<?php

namespace App\Http\Controllers;

use App\BranchOffice;
use App\Commerce;
use App\Condition;
use App\Location;
use App\Parameter;
use App\Raffle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class RaffleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
        $raffles = Raffle::all();

        return view('sorteos.index', compact('raffles'));
    }


    public function create()
    {
        $branchs = BranchOffice::orderBy('name', 'DESC')->pluck('name', 'id');
        $commerces = Commerce::pluck('name','id');
        $conditions = Condition::pluck('name','id');
        $locations = Location::pluck('description','id');
        $parameters = Parameter::all();

        return view('sorteos.create', compact('branchs', 'commerces','conditions','parameters','locations'));
    }


    public function store(Request $request)
    {
        $raffle = new Raffle();

        $raffle->branchOffices_id = request('branchOffice');
        $raffle->name = request('name');
        $raffle->description = request('description');
        $raffle->start = request('start');
        $raffle->end = request('end');
        $raffle->voucherMessage = request('voucherMessage');
        //Imagen
        if ($request->hasFile('image'))
        {
            $path = Storage::disk('public')->put('uploads',$request->file('image'));
            $raffle->fill(['image'=> asset($path)])->save();
        }

        $raffle->commerces()->sync($request->commerces);


        return redirect('/sorteos');

    }


    public function show($id)
    {
        $raffle = Raffle::findOrFail($id);

        //Refactorizar Esto
        $conditions = Condition::with(['parameters' => function($query)
        {$query->with('raffles');}])->get();

        return view('sorteos.show', compact('raffle', 'conditions'));
    }


    public function edit(Raffle $raffle)
    {
        //
    }


    public function update(Request $request, Raffle $raffle)
    {
        //
    }


    public function destroy($id)
    {
        Raffle::detroy($id);

        return redirect('/sorteos');
    }
}
