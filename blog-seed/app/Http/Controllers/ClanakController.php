<?php

namespace App\Http\Controllers;

use App\Models\Clanak;

class ClanakController extends Controller
{
    // Prikaz svih objavljenih clanaka
    public function index()
    {
        $clanci = Clanak::with('komentari')       // ucitaj i komentare (eager loading)
                        ->where('objavljeno', true)
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('clanci.index', compact('clanci'));
    }

    // Prikaz jednog clanka s komentarima
    public function show(string $id)
    {
        $clanak = Clanak::with(['komentari' => function($query) {
            $query->where('odobren', true)->orderBy('created_at', 'asc');
        }])->findOrFail($id);

        return view('clanci.show', compact('clanak'));
    }
}