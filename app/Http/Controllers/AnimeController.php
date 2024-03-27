<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anime = Anime::all();
        return view('anime.index', compact('anime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anime.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
    ]);
    $user = auth()->user();
    $anime = new Anime([
        'title' => $request->title,
        // 'user_id' => $user->id, // Set the user_id field
    ]);
    $anime->save();

    return redirect()->route('anime.index')
        ->with('success', 'Anime created successfully.');
}



    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {
        return view('anime.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {
        return view('anime.edit', compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $anime->update($request->all());

        return redirect()->route('anime.index')
            ->with('success', 'Anime updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();

        return redirect()->route('anime.index')
            ->with('success', 'Anime deleted successfully');
    }
}
