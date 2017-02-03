<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use App\Http\Requests\createArticle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function create()
    {
        return view('backend.article.create');
    }

    public function store(createArticle $request)
    {
        $data = $request->input('article');
        $bool = Article::add($data);
    }
}
