@extends('base.web')
@section('page::title', 'Blog')

@section('page::body')
@include('common.socialbar')
<main class="container mx-auto">
    @forelse ($posts as $post)
    <a href="{{ $post->link }}">
        <h3 class="text-2xl font-bold">{{ $post->title }}</h3>
        <span class="text-sm block">Published at {{ $post->created_at->format('d/m/Y') }}</span>
        <span>{{ $post->description }}</span>
    </a>
    @empty
    <div class="h-screen grid justify-center items-center">
        <span class="text-white/60">No posts available</span>
    </div>
    @endforelse
</main>
@endsection
