<?php

namespace App\Http\Controllers;

use App\BranchOffice;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
//        $locations = DB::Table('locations')->paginate(10);

        $locations = Location::paginate(10);

        return view('locations.index',compact('locations'));
    }


    public function create()
    {
        $branchs = BranchOffice::orderBy('name', 'DESC')->pluck('name', 'id');
        return view('locations.create', compact('branchs'));
    }


    public function store(Request $request)
    {
        $location = new Location();

        $location->branchOffice_Id = request('branchOffice');
        $location->description = request('description');

        $location->save();

        return redirect()->route('locations.index');
    }


    public function show($id)
    {
        $location = Location::findOrFail($id);

        return view('locations.show', compact('location'));
    }


    public function edit($id)
    {
        $location = Location::findOrFail($id);
        $branchs = BranchOffice::orderBy('name', 'DESC')->pluck('name', 'id');

        return view('locations.edit', compact('location', 'branchs'));
    }


    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->branchOffice_id = $request->get('branchOffice');
        $location->description = $request->get('description');

        $location->update();

        return redirect()->route('locations.index');
    }


    public function destroy($id)
    {
        Location::destroy($id);

        return redirect()->route('locations.index');
    }
}
