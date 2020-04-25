<?php

namespace App\Http\Controllers;

use App\CommentsBlog;
use App\User;
use Illuminate\Http\Request;
use App;

class HomeViewController extends Controller
{
    public function index()
    {
//        $tournaments = App\Tournaments::all();
        $news = App\News::all();
        $blogs = App\Blog::all();
        return view('index', [
            'news' => $news,
            'blogs' => $blogs
        ]);
    }

    public function news()
    {
        $news = App\News::all();
        $blogs = App\Blog::all();
        return view('news', [
            'news' => $news,
            'blogs' => $blogs
        ]);
    }

    public function detail_news($id)
    {
        $detail_news = App\News::find($id);
        $news = App\News::all();
        $blogs = App\Blog::all();
        $comments = App\CommentsNews::all();
        $users = User::all();
        return view('detail_news', [
            'detail_news' => $detail_news,
            'news' => $news,
            'blogs' => $blogs,
            'comments' =>$comments,
            'users' => $users
        ]);
    }

    public function detail_blog($id)
    {
        $detail_blog = App\Blog::find($id);
        $news = App\News::all();
        $blogs = App\Blog::all();
        $comments = CommentsBlog::all();
        $users = User::all();
        return view('detail_blog', [
            'blog' => $detail_blog,
            'news' => $news,
            'blogs' => $blogs,
            'comments' =>$comments,
            'users' => $users
        ]);
    }

}
