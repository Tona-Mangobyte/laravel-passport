<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $response = ['data' => $articles];
        return response($response, 200);
    }
}
