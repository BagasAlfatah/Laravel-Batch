<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
// use App\Models\Film;


class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::all();
        return view('genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::get();
        return view('genre.create', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'name' => 'required'
    	]);
 
        Genre::create([
    		'name' => $request->name
    	]);
 
    	return redirect('/genre');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::find($id);
        return view('genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genres',
        ]);

        $genre = Genre::find($id);
        $genre->name = $request->name;
        $genre->update();
        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->films()->delete();
        $genre->delete();
        return redirect('/genre')->with('success', 'Genre dan semua film terkait berhasil dihapus');
    }


}
