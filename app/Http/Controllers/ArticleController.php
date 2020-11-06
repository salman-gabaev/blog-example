<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $articles = Article::latest('created_at')->paginate(10);

        return view('articles.index', compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $article = Article::whereSlug($slug)->first();

        return view('articles.show', compact('article'));
    }
}
