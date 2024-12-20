<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index() {
        $casts = DB::table('casts')->get();
        return view('cast.index', ['casts' => $casts]);        
    }

    public function create() {
        return view('cast.create');
    }

    public function store (Request $request) {
        $validated = $request->validate([
            'name' => ['required'],
            'age' => ['required'],
            'bio' => ['required']
        ]);

        DB::table('casts')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio')
        ]);

        return redirect('/cast');
    }

    public function show($id) {
        $casts = DB::table('casts')->where('id', $id)->first();

        return view('cast.detail', ['casts' => $casts]);
    }

    public function edit($id) {
        $casts = DB::table('casts')->where('id', $id)->first();
        return view('cast.edit', ['casts' => $casts]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => ['required'],
            'age' => ['required'],
            'bio' => ['required']
        ]);  

            DB::table('casts')
              ->where('id', $id)
              ->update(
                [
                    'name' => $request->name,
                    'age' => $request->age,
                    'bio' => $request->bio
                ],
               
              );
              return redirect('/cast');
               
    }

    public function destroy($id) {
        DB::table('casts')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
