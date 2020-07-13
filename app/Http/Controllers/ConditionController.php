<?php

namespace App\Http\Controllers;

use App\Condition;
use DemeterChain\C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConditionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
//        $conditions = DB::Table('conditions')->paginate(10);
        $conditions = Condition::paginate(10);
        return view('condiciones.index', ['conditions'=>$conditions]);
    }


    public function create()
    {
        return view('condiciones.create');
    }


    public function store(Request $request)
    {
        $condition = new Condition();

        $condition->conditionType = request('conditionType');
        $condition->name = request('name');
        $condition->status = 'Active';

        $condition->save();

        return redirect('/condiciones');
    }


    public function show($id)
    {
        $condition = Condition::findOrFail($id);

        return view('condiciones.show', compact('condition'));
    }


    public function edit($id)
    {
        $condition = Condition::findOrFail($id);

        return view('condiciones.edit', compact('condition'));
    }


    public function update(Request $request, $id)
    {
        $condition = Condition::findOrFail($id);

        $condition->conditionType = $request->get('conditionType');
        $condition->name = $request->get('name');

        $condition->update();

        return redirect('/condiciones');
    }


    public function destroy($id)
    {
        Condition::destroy($id);

        return redirect('/condiciones');
    }
}
