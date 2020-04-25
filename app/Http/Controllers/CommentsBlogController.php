<?php

namespace App\Http\Controllers;

use App\Blog;
use App\CommentsBlog;
use Illuminate\Http\Request;

class CommentsBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $validated = $request->validate([
            'text'    => 'required',
            'author_id' => 'required',
            'blog_id' => 'required',
        ]);

        // Create and save blog with validated data
        $blog = CommentsBlog::create($validated);

        // Redirect the user to the created blog woth a success notification
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentsBlog  $commentsBlog
     * @return \Illuminate\Http\Response
     */
    public function show(CommentsBlog $commentsBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentsBlog  $commentsBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentsBlog $commentsBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentsBlog  $commentsBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentsBlog $commentsBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentsBlog  $commentsBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentsBlog $commentsBlog)
    {
        //
    }
}
