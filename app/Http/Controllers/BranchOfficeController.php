<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\BranchOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BranchOfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {

        $branchs = BranchOffice::all();


        return view('branchs.index', ['branchs'=>$branchs]);

    }


    public function create()
    {
        return view('branchs.create');
    }


    public function store(Request $request)
    {

        $sucursal = new BranchOffice();
        $sucursal->name = request('name');
        $sucursal->status = 'Active';
        //Imagen
        if ($request->hasFile('image'))
        {
            $path = Storage::disk('public')->put('uploads',$request->file('image'));
            $sucursal->fill(['image'=> asset($path)])->save();
//            $sucursal->image = request('image')->store('uploads','public');
        }


        return redirect()->route('branchs.index');
    }


    public function show($id)
    {
        $branch = BranchOffice::findOrFail($id);

        return view('branchs.show', compact('branch'));
    }


    public function edit($id)
    {
        return view('branchs.edit',['sucursal'=>BranchOffice::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {
        $sucursal = BranchOffice::findOrFail($id);
        $sucursal->name = $request->get('name');

        $sucursal->update();


        return redirect()->route('branchs.index');
    }


    public function destroy($id)
    {
        BranchOffice::destroy($id);

        return redirect()->route('branchs.index');
    }
}
