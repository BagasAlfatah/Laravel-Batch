<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::all();
        return view('film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $film = Film::get();
        $genre = Genre::all();
        return view('film.create', ['film' => $film, 'genre' => $genre]);



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genre_id' => 'required|exists:genres,id',
        ]);
    

        $posterPath = null;
    if ($request->hasFile('poster')) {
        $posterPath = $request->file('poster')->store('image', 'public');
    }
 
        Film::create([
    		'title' => $validatedData['title'],
            'summary' => $validatedData['summary'],
            'release_year' => $validatedData['release_year'],
            'poster' => $posterPath,
            'genre_id' => $validatedData['genre_id'],
    	]);
 
    	return redirect('/film')->with('success', 'Film berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return view('film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $film = Film::find($id);
        $genre = Genre::all();
        return view('film.edit', compact(['film','genre']));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'summary' => 'required',
            'release_year' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
        ]);

        $film = Film::find($id);
        $film->title = $request->title;
        $film->summary = $request->summary;
        $film->release_year = $request->release_year;
        $film->poster = $request->poster;
        $film->genre_id = $request->genre_id;
        $film->update();
        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);

        if (!$film) {
            return redirect('/film')->with('error', 'Film not found.');
        }
    

        $film->delete();
        return redirect('/film')->with('success');
    }


   
}
