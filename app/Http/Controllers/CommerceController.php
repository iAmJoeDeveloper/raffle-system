<?php

namespace App\Http\Controllers;

use App\Commerce;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CommercesExport;

class CommerceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
//        $commerces = DB::Table('commerces')->paginate(10);
//        $commerces = Commerce::paginate(10);
        $commerces = Commerce::orderBy('location_id','ASC')->paginate(10);

        return view('comercios.index', compact('commerces'));
    }


    public function create()
    {
        $locations = Location::orderBy('description', 'ASC')->pluck('description', 'id');
        return view('comercios.create', compact('locations'));
    }


    public function store(Request $request)
    {
       $commerce = new Commerce();

       $commerce->location_id = request('location');
       $commerce->name = request('name');
       $commerce->legalName = request('legalName');
       $commerce->rnc = request('rnc');

       $commerce->save();

       return redirect('/comercios')->with('success', 'Comercio Registrado con Éxito');
    }


    public function show($id)
    {
        $commerce = Commerce::findOrFail($id);

        return view('comercios.show', compact('commerce'));
    }


    public function edit($id)
    {
        $commerce = Commerce::findOrFail($id);
        $locations = Location::orderBy('description', 'DESC')->pluck('description','id');

        return view('comercios.edit', compact('commerce','locations'));
    }


    public function update(Request $request, $id)
    {
       $commerce = Commerce::findOrFail($id);

       $commerce->location_id = request('location');
       $commerce->name = request('name');
       $commerce->legalName = request('legalName');
       $commerce->rnc = request('rnc');

       $commerce->update();

       return redirect('/comercios');
    }


    public function destroy($id)
    {
        Commerce::destroy($id);

        return redirect('/comercios');
    }

    public function exportExcel()
    {
        return Excel::download(new CommercesExport, 'commerces-list.xlsx');
    }
}
