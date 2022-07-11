<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

      $posts =  Post::all()->where('user_id',1);

//        $data =[
//            'user_name'=> $name,
//            'lastname'=> $family,
//        ];

        return view('posts.index',compact('posts'));

    }

    public function create()
    {
        $categories = Category::all();
        $tags =Tag::all();
        return view('posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
//        dd($request);

        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->post_content;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->save();
        $post->tags()->attach($request->tag);

        return redirect()->route('post.index');
   }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }


    public function edit(Post $post)
    {
//        dd($post);
        $categories = Category::all();
        $tags =Tag::all();
        
        return view('posts.edit',compact('post','categories','tags'));
    }


    public function update(PostRequest $request, Post $post)
    {

        $post->title = $request->title;
        $post->content = $request->post_content;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tag);

        return redirect()->route('post.index');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
