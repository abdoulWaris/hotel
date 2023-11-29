<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
       return view('user.list',compact('user'));
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
    public function show(user $user)
    {
        return view('user.Edit',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'email' => 'required|email',
        ]);

        $user->update($validatedData);
        \Session::flash('success', 'Les informations ont bien été modifiées');
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //dd($user->fl_sup);
        $user->fl_sup = 'O';
        $user->save();
        return redirect()->back()->with('success', 'L\'utilisateur a bien été supprimé');
    }
}
