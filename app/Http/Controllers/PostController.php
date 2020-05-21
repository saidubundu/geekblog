<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
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
        $posts = Post::with('category', 'user')->published()->latest()->take(4)->get();
        $movies = Post::with('category', 'user')->published()->latest()->movie()->take(5)->get();
        $leftMovie = $movies->shift();
        $lifeStyle = Post::with('category', 'user')->published()->latest()->life()->take(4)->get();
        $business = Post::with('category', 'user')->published()->latest()->business()->take(9)->get();
        $sports = Post::with('category', 'user')->published()->latest()->sport()->take(6)->get();
        $internations = Post::with('category', 'user')->published()->latest()->internationals()->take(4)->get();
        $local = Post::with('category', 'user')->published()->latest()->local()->take(1)->get();
        $healths = Post::with('category', 'user')->published()->latest()->health()->take(4)->get();
        $techs = Post::with('category', 'user')->published()->latest()->tech()->take(4)->get();

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

        $post->published()->increment('view_count');

        return view('frontend.show', compact('post'));
    }

    public function category(Category $category)
    {
        $categoryName = $category->name;
        $posts = $category->posts()->with('user', 'category')->published()->latest()->paginate(7);
        return view('frontend.category', compact('category', 'posts', 'categoryName'));
    }


    public function user(User $user)
    {
        $userName = $user->name;
       $userPost =  $user->posts()->published()->paginate(7);
        return view('frontend.user', compact('user', 'userName', 'userPost'));
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
