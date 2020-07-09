<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Parameter;
use App\Raffle;
use Illuminate\Http\Request;

class ParametersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
        $parameters = Parameter::all();

        return view('parametros.index', compact('parameters'));
    }


    public function create()
    {
        $raffles = Raffle::pluck('name', 'id');
        $conditions = Condition::pluck('name', 'id');

        return view('parametros.create', compact('raffles', 'conditions'));
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Parameter $parameters)
    {
        //
    }


    public function edit(Parameter $parameters)
    {
        //
    }


    public function update(Request $request, Parameter $parameters)
    {
        //
    }

    public function destroy(Parameter $parameters)
    {
        //
    }
}
