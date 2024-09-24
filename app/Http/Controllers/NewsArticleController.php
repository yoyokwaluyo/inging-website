<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsArticleController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.newsarticle.index');
    }

    public function detail(Request $request)
    {
        return view('pages.newsarticle.detail');
    }
}
