
@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in 
        <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
    </p>
    {!! $post->body !!}
</article>
<a href="/blog">
    <button>Back To Post</button>
</a>
@endsection