<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeViewController extends Controller
{
    public function index() {
//        $tournaments = App\Tournaments::all();
        $news = App\News::all();
        $blogs = App\Blog::all();
        return view('index', [
            'news' => $news,
            'blogs' => $blogs
        ]);
    }

    public function detail_news($id) {
        $detail_news = App\News::find($id);
        return view('detail_news', ['detail_news' => $detail_news]);
    }

    public function detail_blog($id) {
        $detail_blog = App\Blog::find($id);
        return view('detail_blog', ['blog' => $detail_blog]);
    }

}
