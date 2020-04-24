<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Get all Posts, ordered by the newest first
//        $blogs = Blog::latest()->get();
        $blogs = Blog::all();
        // Pass Post Collection to view
        return view('blog.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('blog.create');
    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request)
    {
        // Validate posted form data
        $validated = $request->validate([
            'name'    => 'required|string|unique:blogs|min:5|max:100',
            'content'  => 'required|string|min:5|max:2000',
        ]);

        // Create and save blog with validated data
        $blog = Blog::create($validated);

        // Redirect the user to the created blog woth a success notification
        return redirect('/blogs');
    }

    public function show(Blog $blog)
    {
        // Pass current post to view
        return view('detail_blog', compact('blog'));
    }
//    public function edit(Blog $blog)
//    {
//        return view('blog.edit', compact('blog'));
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Post  $blog
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Post $blog)
//    {
//        // Delete the specified Post
//        $blog->delete();
//
//        // Redirect user with a deleted notification
//        return redirect(route('posts.index'))->with('notification', '"' . $blog->title .  '" deleted!');
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Post  $blog
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Post $blog)
//    {
//        // Validate posted form data
//        $validated = $request->validate([
//            'title'    => 'required|string|unique:posts|min:5|max:100',
//            'content'  => 'required|string|min:5|max:2000',
//            'category' => 'required|string|max:30'
//        ]);
//
//        // Create slug from title
//        $validated['slug'] = Str::slug($validated['title'], '-');
//
//        // Update Post with validated data
//        $blog->update($validated);
//
//        // Redirect the user to the created blog woth an updated notification
//        return redirect(route('posts.show', $blog))->with('notification', 'Post updated!');
//    }
}
