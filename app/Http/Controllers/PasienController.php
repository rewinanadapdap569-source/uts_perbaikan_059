<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
     public function index() {
    $pasiens = Pasien::all();
    return view('pasien.index', compact('pasiens'));
}

public function create() {
    return view('pasien.create');
}

public function store(Request $request) {
    Pasien::create($request->all());
    return redirect()->route('pasien.index');
}   //
    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
   
        //
    

    /**
     * Show the form for editing the specified resource.
     */
   

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
   