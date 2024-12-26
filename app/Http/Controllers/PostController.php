<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'title' => 'required',
    		'body' => 'required'
    	]);
 
        Post::create([
    		'title' => $request->title,
    		'body' => $request->body
    	]);
 
    	return redirect('/post');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required',
        ]);

        $post = post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->update();
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['store','show']);
    // }
}
