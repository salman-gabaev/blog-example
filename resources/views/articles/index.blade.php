@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>Articles list</h1>
            </div>
        </div>

        <div class="row">
            @foreach($articles as $item)
                <div class="col-4">
                    <div class="card mb-3">
                        <img src="{{ $item->cover }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="{{ route('article.show', $item->slug) }}" class="btn btn-primary">Подробнее...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row justify-content-end">
            <div class="col-12">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
