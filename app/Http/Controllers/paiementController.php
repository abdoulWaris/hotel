<?php

namespace App\Http\Controllers;

use App\Models\facture;
use Illuminate\Http\Request;

class paiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paie = facture::where('statut','paiement')->get();
        return view('paiement.index',compact('paie'));
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
    public function show(facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(facture $facture)
    {
        //
    }
}
