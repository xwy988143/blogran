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
        if($bool)
        {
            return redirect('backend/article');
        }
    }

    public function index()
    {
        $data = Article::orderBy('id','desc')->paginate(10);
        return view('backend.article.index',['data'=>$data]);
    }

    public function edit($id)
    {
        $data = Article::find($id);
        return view('backend.article.edit',['data'=>$data]);
    }

    public function update(createArticle $request,$id)
    {
        $data = $request->input('article');
        $bool = Article::modify($data,$id);
        if($bool)
        {
            return redirect('backend/article');
        }else
        {
            abort('503');
        }
    }

    public function delete($id)
    {
        $article = Article::find($id);
        if($article->delete()){
            return redirect('backend/article');
        }else{
            return 'failed';
        }
    }

}
