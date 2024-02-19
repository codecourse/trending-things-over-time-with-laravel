<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('articles.index', [
        'articles' => Article::orderBy('trend_score', 'desc')->get(),
    ]);
});

Route::get('/articles/{article}', function (Article $article) {
    $article->increment('trend_score');

    return view('articles.show', [
        'article' => $article
    ]);
})->name('articles.show');
