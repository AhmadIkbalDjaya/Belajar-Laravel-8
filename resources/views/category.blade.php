
@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}      
                </a>
            </h2>
            <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection