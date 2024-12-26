<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index() {
        $iduser = Auth::id();

        $detailProfile = Profile::where('user_id',$iduser)->first();
        return view('profile.index',['detailProfile' => $detailProfile]);

    }

    public function update(Request $request, $id) {
         $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'age' => ['required'],
            'bio' => ['required'],
            'address' => ['required'],
            'user_id' => ['required'],
        ]);  

        $profile = Profile::find($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->age = $request->age;
        $profile->bio = $request->bio;
        $profile->address = $request->address;
        $profile->user_id = $request->user_id;

        $profile->save();

        return redirect('/profile');
    }
}
