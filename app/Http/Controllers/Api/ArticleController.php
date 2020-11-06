<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    /**
     * incrementing article likes.
     *
     * @param Article $article
     * @return JsonResponse
     */
    public function incrementLikes(Article $article): JsonResponse
    {
        $article->increment('likes_count');

        return response()->json(['success' => true], 200);
    }

    /**
     * incrementing article views.
     *
     * @param Article $article
     * @return JsonResponse
     */
    public function incrementViews(Article $article): JsonResponse
    {
        $article->increment('views_count');

        return response()->json(['success' => true], 200);
    }
}
