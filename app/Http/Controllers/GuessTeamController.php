<?php

namespace App\Http\Controllers;

use App\Blog;
use App\CommentsNews;
use App\GuessTeam;
use App\Highscore;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuessTeamController extends Controller
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
        $id = $request->input('id');
        $variant = $request->input('variant');
        $username = Auth::user()->name;
        // Create and save blog with validated data
        $question = GuessTeam::find($id);
        if ($question->answer == $variant){
            $next = intval($id) + 1;
            $red = '/guess_team/'.$next;
            return redirect($red);

        }
        else
            $score = intval($id) - 1;
            $result = Highscore::create(['name' => $username, 'score' => $score]);
            $highscores = Highscore::orderBy('score', 'desc')->get();
            $news = News::all();
            return view('guessteamfinish', ['result' => $result, 'highscores' =>$highscores, 'news'=>$news]);
        // Redirect the user to the created blog woth a success notification

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GuessTeam  $guessTeam
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $question = GuessTeam::find($id);
        $highscores = Highscore::orderBy('score', 'desc')->get();
//        return view('guessteam', compact('question' : $question));
        return view('guessteam', ['question' => $question, 'highscores' =>$highscores]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GuessTeam  $guessTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(GuessTeam $guessTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GuessTeam  $guessTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuessTeam $guessTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GuessTeam  $guessTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuessTeam $guessTeam)
    {
        //
    }
}
