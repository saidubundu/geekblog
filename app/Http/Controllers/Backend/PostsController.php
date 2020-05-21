<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use App\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class PostsController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config('cms.images.blog'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $onlyTrashed = FALSE;
        if (($status = $request->get("status")) && $status == 'trash') {
            $posts = Post::onlyTrashed('category', 'user')->latest()->paginate(5);
            $onlyTrashed = TRUE;
        }
        elseif ($status == 'published') {
            $posts = Post::published()->with('category', 'user')->latest()->paginate(5);
        }
        elseif ($status == 'scheduled') {
            $posts = Post::scheduled()->with('category', 'user')->latest()->paginate(5);
        }
        elseif ($status == 'draft') {
            $posts = Post::draft()->with('category', 'user')->latest()->paginate(5);
        }
        elseif ($status == 'own') {
            $posts = $request->user()->posts()->with('category', 'user')->latest()->paginate(5);
        }
        else {
            $posts = Post::with('category', 'user')->latest()->paginate(5);
        }
        $statusList = $this->statusList($request);
        return view('backend.posts.index', compact('posts', 'onlyTrashed', 'statusList'));
    }

    private function statusList($request)
    {
        return [
            'own' => $request->user()->posts()->count(),
            'all' => Post::count(),
            'published' => Post::published()->count(),
            'scheduled' => Post::scheduled()->count(),
            'draft' => Post::draft()->count(),
            'trash' => Post::onlyTrashed()->count(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        //
        $category = Category::pluck('name','id')->all();
        return view('backend.posts.create', compact('post', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $data = $this->handleRequest($request);

        $request->user()->posts()->create($data);

        return redirect('/backend/posts')->with('message', 'Your post was created successfully!');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $image       = $request->file('image');
            $fileName    = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $image->move($destination, $fileName);

            $data['image'] = $fileName;
        }

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $category = Category::pluck('name','id')->all();
        return view('backend.posts.edit', compact('post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, Post $post)
    {
        //
        $oldImage = $post->image;
        $data = $this->handleRequest($request);
        $post->update($data);
        if ($oldImage !== $post->image){
            $this->removeImage($oldImage);
        }

        return redirect('backend/posts')->with('messages', 'Your post was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Post::findOrFail($id)->delete();
        return redirect('backend/posts')->with('trash-message', ['Your post was move to the trash', $id]);
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->back()->with('message', 'Your post restored successfully');
    }

    public function forceDestroy($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->forceDelete();
        $this->removeImage($post->image);
        return redirect('backend/posts?status=trash')->with('message', 'Your post has been deleted');
    }

    private function removeImage($image)
    {
        if (!empty($image)){
            $imagePath = $this->uploadPath . '/' . $image;

            if (file_exists($imagePath)) unlink($imagePath);
        }
    }
}
