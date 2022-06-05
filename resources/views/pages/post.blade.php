@extends('base.web')
@section('page::title', $post->title)

@section('page::body')
@include('common.socialbar')
<div class="container mx-auto">
    <div class="text-white/60 text-sm flex justify-between my-4">
        <a class="hover:underline" href="{{ $post->link }}">{{ $post->slug }}</a>
        <span title="{{ $post->created_at->format('d/m/Y H:i') }}">Published at {{ $post->created_at->format('d/m/Y') }}</span>
    </div>
    <div class="prose max-w-none prose-pre:p-4 prose-invert">
        {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml($post->content()) !!}
    </div>
</div>
@endsection
