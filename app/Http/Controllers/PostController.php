<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::latest()->get();
        $tags = Tag::latest()->get();
        return view('User-Side.category-grid',\compact('posts','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(!Auth::check()){
        //     return redirect('/login')->with('warning','Hey, You have to Login first!');
        // }
        $tags = Tag::get();
        return view('User-Side.write-post',\compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'tag_id' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->tag_id = $request->tag;
        $post->user_id = Auth::id();

        dd($post);

        // $post->save();
        // return redirect('/blog-posts')->with('success','Congratulations! Blog has been posted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'tag_id' => 'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->tag_id = $request->tag;
        $post->user_id = Auth::id();

        dd($post);

        // $post->save();
        // return redirect('/blog-posts')->with('success','Congratulations! Blog has been posted.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
