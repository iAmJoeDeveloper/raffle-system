<?php

namespace App\Http\Controllers;

use App\BranchOffice;
use App\PrizeGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrizeGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
        $groups = PrizeGroup::all();
        return view('grupos.index', compact('groups'));
    }


    public function create()
    {
        $branchs = BranchOffice::orderBy('name', 'DESC')->pluck('name', 'id');

        return view('grupos.create', compact('branchs'));
    }


    public function store(Request $request)
    {
        $group = new PrizeGroup();

        $group->branchOffice_id = request('branchOffice_id');
        $group->description = request('description');

        $group->save();

        return redirect('/grupos');
    }


    public function show(PrizeGroup $prizeGroup)
    {
        //
    }


    public function edit(PrizeGroup $prizeGroup)
    {
        //
    }


    public function update(Request $request, PrizeGroup $prizeGroup)
    {
        //
    }


    public function destroy($id)
    {
        PrizeGroup::destroy($id);

        return redirect('/grupos');
    }
}
