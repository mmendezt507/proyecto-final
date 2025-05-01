<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role != "Administrador"){
            return redirect()->('start');
        }
        $branches = Branches::all();
        return view('modules.users.branches')->with('success',"Sucursal creada con exitos");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Branches::create([
            'name' => $request->name,
            'state' => 1,
        ]);
        return redirect()->route('branches.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branches $branches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branches $branches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branches $branches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branches $branches)
    {
        //
    }
}
