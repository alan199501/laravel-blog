@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Latest Posts</h1>
            </div>
        </div>

        @foreach ($posts as $post)
            <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
            <p>{{ Str::limit($post->content, 150) }}</p>
            <hr>
        @endforeach
    </div>
@endsection
