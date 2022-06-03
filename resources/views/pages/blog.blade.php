@extends('base.web')
@section('page::title', 'Blog')

@section('page::body')
<main class="container mx-auto">
    @foreach ($posts as $post)
    <a href="{{ $post->link }}">
        <h3 class="text-2xl font-bold">{{ $post->title }}</h3>
        <span class="text-sm block">Published at {{ $post->created_at->format('d/m/Y') }}</span>
        <span>{{ $post->description }}</span>
    </a>
    @endforeach
</main>
@endsection
