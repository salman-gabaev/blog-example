@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ $article->image }}" class="card-img-top" alt="...">
            </div>

            <div class="col-6">
                <h2 class="blog-post-title">{{ $article->title }}</h2>
                <p class="blog-post-meta mb-1">
                    <span>{{ $article->created_at }}</span>

                    <span>
                        <article-views :id="{{ $article->id }}" :count="{{ $article->views_count }}"></article-views>
                        <article-likes :id="{{ $article->id }}" :count="{{ $article->likes_count }}" class="mb-2"></article-likes>
                    </span>
                </p>

                <div class="tags">
                    @foreach($article->tags as $tag)
                        <a href="{{ $tag->url }}" class="badge badge-primary">{{ $tag->label }}</a>
                    @endforeach
                </div>

                <div class="description my-3">
                    <strong>
                        {{ $article->description }}
                    </strong>
                </div>

                <hr>

                <div class="text lead">
                    {{ $article->text }}
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <h1>Leave a comment</h1>
                <hr>
                <comments-form :article-id="{{ $article->id }}"></comments-form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <h1>Comments</h1>
                <hr>
                <comments-list :items="{{ $article->comments }}"></comments-list>
            </div>
        </div>
    </div>
@endsection
