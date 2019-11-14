<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        //articlesテーブルとArticleモデルは対応している
        $articles = Article::all();
        // views/article フォルダのindex.blade.phpに$articleとして変数$articleを返す
        return view('article.index',['articles' => $articles]);
    }    
    public function create(){
        //resources/views/article/create.blade.phpをreturn するだけ
        return view('article.create');
    }

    public function store(Request $request){
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        //resources/views/article/store.blade.phpに返す        
        return view('article.store');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('article.edit',['article' => $article]);
    }

    public function update(Request $request){
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return view('article.update');
    }
    public function show(Request $request, $id){
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    public function delete(Request $request){
        Article::destroy($request->id);
        return view('article.delete');
    }
}
