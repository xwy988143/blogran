<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    //
    public function index()
    {
        $article = Article::orderBy('id','desc')->take(4)->get();
        $article = json_decode(json_encode($article),true);
        return view('home.index',['article'=>$article]);
    }
}
