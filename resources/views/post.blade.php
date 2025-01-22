
@extends('layout.app')
@section('content')

<article class="mb-5">
    <h2> <a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>    
    <h5>Author : {{ $post['author'] }}</h5>    
    <p> {{ $post['body'] }}</p>    
    </article>

<a href="/blog"> Back to post</a>
@endsection