<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class bankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
//        $banks = Bank::all();
//        $banks = DB::Table('Banks')->paginate(10);
        $banks = Bank::paginate(10);

        return view('banks.index',['banks' => $banks]);
    }


    public function create()
    {
        return view('banks.create');
    }


    public function store(Request $request)
    {
        $bank = new Bank();

        $bank->name = request('name');
        $bank->status = 'Active';
        //Imagen
        if ($request->hasFile('image'))
        {
            $path = Storage::disk('public')->put('uploads',$request->file('image'));
            $bank->fill(['image'=> asset($path)])->save();
        }

        return redirect()->route('banks.index');
    }


    public function show($id)
    {
        $bank = Bank::findOrFail($id);

        return view('banks.show', compact('bank'));
    }


    public function edit($id)
    {
        $bank = Bank::findOrFail($id);

        return view('banks.edit', compact('bank'));
    }


    public function update(Request $request, $id)
    {
        $bank = Bank::findOrFail($id);
        $bank->name = $request->get('name');

        $bank->update();


        return redirect()->route('banks.index');
    }


    public function destroy($id)
    {
        Bank::destroy($id);

        return redirect()->route('banks.index');
    }
}
