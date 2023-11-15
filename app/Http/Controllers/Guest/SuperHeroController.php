<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SuperHero;
use App\Models\Helper;

class SuperHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$superherosList = SuperHero::all();
        //paginate per visualizzarli di 10 in 10
        $superherosList = SuperHero::paginate(10);
        return view("superheros.index", compact("superherosList"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $superheros = SuperHero::all();
        $helpers = Helper::all();
        return view("superheros.create", compact("superheros", "helpers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $data = $request->validate([
            'name' => ['required', 'unique:superheros']
        ]);

        $newSuperHero = SuperHero::create($data);
        $newSuperHero->save();

        return redirect()->route('superheros.index');
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
        $helpers = Helper::all();
        return view("superheros.show", compact("superhero", "helpers"));
        //return dd($helpers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperHero $superhero)
    {
        $helpers = Helper::all();
        return view("superheros.edit", compact("superhero", "helpers"));
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
