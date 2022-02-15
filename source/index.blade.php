@extends('_layouts.master')

@section('content')
    <h1>Welcome to Work Talk</h1>

    <ul>
        @forelse ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
