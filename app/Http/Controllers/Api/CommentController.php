<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Jobs\CreateCommentsJob;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  CommentRequest  $request
     * @return JsonResponse
     */
    public function store(CommentRequest $request)
    {
        dispatch(new CreateCommentsJob($request->all()));

        return response()->json(['success' => 'Form sent successfully', 'comment' => $request->all()], 200);
    }
}
