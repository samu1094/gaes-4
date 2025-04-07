<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use Illuminate\Http\Request;

class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ambientes = Ambiente::all();

        return view('ambientes.index', ['ambientes'=>$ambientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ambientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_amb'=>'required|min:5|max:50|unique:res_ambiente',
            'capacidad_amb'=>'required|min:1|max:10',
            'piso_amb'=>'required|min:1|max:2'
        ]);

        Ambiente::create($request->all());

        return redirect()->route('ambientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ambiente $ambiente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ambiente $ambiente)
    {
        return view('ambientes.edit', ['ambiente'=>$ambiente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ambiente $ambiente)
    {
        $request->validate([
            'nom_amb'=>'required|min:5|max:50',
            'capacidad_amb'=>'required|min:1|max:3',
            'piso_amb'=>'required|min:1|max:2'
        ]);

        $ambiente->update($request->all());

        return redirect()->route('ambientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ambiente $ambiente)
    {
        $ambiente->delete();

        return redirect()->route('ambientes.index');
    }
}
