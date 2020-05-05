<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        $posts = Post::latest()->take(4)->get();
        $movies = Post::latest()->movie()->take(5)->get();
        $leftMovie = $movies->shift();
        $lifeStyle = Post::life()->take(4)->get();
        $business = Post::latest()->business()->take(9)->get();
        $sports = Post::latest()->sport()->take(6)->get();
        $internations = Post::latest()->internationals()->take(4)->get();
        $local = Post::latest()->local()->take(1)->get();
        $healths = Post::latest()->local()->take(4)->get();
        $techs = Post::latest()->tech()->take(4)->get();

        return view('frontend.index', compact('lifeStyle', 'movies','leftMovie', 'business', 'sports',
            'internations', 'local', 'posts', 'healths', 'techs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $post->increment('view_count');

        return view('frontend.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
