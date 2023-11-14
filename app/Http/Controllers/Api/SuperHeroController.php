<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SuperHero;
use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
    public function index()
    {
        $superheroes = SuperHero::with('helpers')->paginate(10);
        return response()->json([
            'success' => true,
            'result' => $superheroes,
        ]);
    }
}
