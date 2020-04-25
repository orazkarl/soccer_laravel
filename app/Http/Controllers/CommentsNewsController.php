<?php

namespace App\Http\Controllers;

use App\CommentsNews;
use Illuminate\Http\Request;

class CommentsNewsController extends Controller
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
            'news_id' => 'required',
        ]);

        // Create and save blog with validated data
        $blog = CommentsNews::create($validated);

        // Redirect the user to the created blog woth a success notification
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentsNews  $commentsNews
     * @return \Illuminate\Http\Response
     */
    public function show(CommentsNews $commentsNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentsNews  $commentsNews
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentsNews $commentsNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentsNews  $commentsNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentsNews $commentsNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentsNews  $commentsNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentsNews $commentsNews)
    {
        //
    }
}
