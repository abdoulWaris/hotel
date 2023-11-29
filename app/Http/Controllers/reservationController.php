<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index(){
        $reserver = reservation::all();
        return view('reservation.index', compact('reserver'));
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
    public function show(reservation $reservation)
    {
        return view('reservation.edit',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chambre $chambre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chambre $chambre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chambre $chambre)
    {
        //
    }
}
