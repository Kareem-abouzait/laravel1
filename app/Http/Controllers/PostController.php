<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = post::get();
        return view('index', ['posts' => $posts]);
    }

   
    public function create()
    {
        return view('create');
        
    }

   
    public function store(Request $request)
    {
        

        post::create($request->all());
        return redirect()->route('index');
    }

    public function show( $id)
    {
        $post = post::find($id);
        return view('show', ['post' => $post]);
    }

   
    public function edit(request $request, string $id)
    {
       
        
        $post=post::find($id);
        $post->update($request->except(['_method', '_token' , 'id' , 'created_at' , 'updated_at']));
        return redirect()->route('index');
    }

   
    public function update(Request $request, string $id)
    {
        $post = post::find($id);
        return view('update', ['post' => $post]);
    }

   
    public function destroy(string $id)
    {
        $post = post::find($id);

        $post->delete();
        return redirect()->route('index');
    }
}
