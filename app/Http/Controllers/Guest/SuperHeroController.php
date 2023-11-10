<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SuperHero;

class SuperHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superherosList = SuperHero::all();
        return view("superheros.index", compact("superherosList"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $superhero = SuperHero::findOrFail($id);
        return view("superheros.show", compact("superhero"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperHero $superhero)
    {
        return view("superheros.edit", compact("superhero"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperHero $superhero)
    {
        //*nella request se obbligo di richiesta mettere ('unique:superheros,name,' . $superhero->id)
        //*altrimenti visto che univoco, segna che esiste gia il nome
        $data = $request->validate(['name' => ['required', 'unique:superheros,name,' . $superhero->id]]);
        $superhero->update($data);

        return redirect()->route('superheros.show', compact('superhero'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperHero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheros.index', compact('superhero'));
    }
}
