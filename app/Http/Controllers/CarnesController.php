<?php

namespace App\Http\Controllers;

use App\Models\Carnes;
use Illuminate\Http\Request;

class CarnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Carnes::all();
        return view("welcome", ["productos" => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productos = Carnes::find($id);
        return view("detalle", compact("productos"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carnes $carnes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carnes $carnes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carnes $Carnes)
    {
        //
    }
}