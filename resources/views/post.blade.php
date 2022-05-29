
@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By Ahmad Ikbal Djaya in 
        <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
<a href="/blog">
    <button>Back To Post</button>
</a>
@endsection