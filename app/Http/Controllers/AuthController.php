<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register () {
        return view('page.register');
    }

    public function welcome (Request $request) {
        $fullname = $request->input('fullname');
        $umur = $request->input('umur');

        return view('page.welcome', ['fullname' => $fullname, 'umur' => $umur]);
    }
}
