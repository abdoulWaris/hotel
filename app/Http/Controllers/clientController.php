<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $client = client::all();
        return view('client.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd(request());
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            //'name' => ['required', 'min:2', 'max:50'],
        ]);

        $client = client::create($validatedData);

        return redirect()->route('client');
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
       return view('client.edit',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        //dd(request());
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            //'name' => ['required', 'min:2', 'max:50'],
            'email' => 'required|email',
        ]);

        $client->update($validatedData);
        \Session::flash('success', 'Les informations ont bien été modifiées');
        return redirect()->route('client');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }

    
}
