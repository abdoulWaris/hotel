<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\chambre;
use App\Models\reservation;
use Illuminate\Http\Request;

class chambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambre = Chambre::all();
        return view('chambre.index',compact('chambre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chambre.create');
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
    public function show(chambre $chambre)
    {
        return view('chambre.edit',compact('chambre'));
    }

    public function afficher(chambre $chambre)
    {
        return view('chambre.reservation',compact('chambre'));
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
        //dd(request());
        $validatedData = $request->validate([
            'num' => 'required',
            'prenom' => 'required',
            'statut' => 'required',
            'type' => 'required',
            'nom' => 'required|',
        ]);

        $chambre->update($validatedData);
        \Session::flash('success', 'Les informations ont bien été modifiées');
        return redirect()->route('chambre');
    }

    public function reserver(Request $request, chambre $chambre){
        $validatedData = $request->validate([
            'num' => 'required',
            'prenom' => 'required',
            'statut' => 'required',
            'type' => 'required',
            'nom' => 'required',
            'fin' => 'required',
            'debut' => 'required',
            'description' => 'required',
        ]);
         $verify = client::where('nom',$request->nom)->where('prenom',$request->prenom)->get();
        
         if (!$verify->isEmpty())
        {
            $id = chambre::where('numero_chambre',$request->num)->first();
            $idC = client::where('nom',$request->nom)->where('prenom',$request->prenom)->first();
        $reservation = new reservation();
        $reservation->client_id =  $idC->id;
        $reservation->chambre_id = $id->id;
        $reservation->description = $request->description;
        $reservation->date_deb = $request->debut;
        $reservation->date_fin = $request->fin;
        $reservation->save();
        return redirect()->route('chambre');
        }else
        {
            $client= new client();
            $client->nom = $request->nom;
            $client->prenom = $request->prenom;
            $client->email = 'hello@example.com';
            $client->telephone = '12569549';
            $client->save();
            $id = chambre::where('numero_chambre',$request->num)->get();
          //  $idC = client::where('nom',$request->nom)->where('prenom',$request->prenom)->get();
        
            $reservation = new reservation();
        $reservation->client_id = $client->id;
        $reservation->chambre_id = $id->id;
        $reservation->descrpition = $request->description;
        $reservation->date_deb = $request->debut;
        $reservation->date_fin = $request->fin;
        $reservation->save();
        return redirect()->route('chambre');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chambre $chambre)
    {
        //
    }
}
