@extends('base.web')
@section('page::title', $post->title)

@section('page::body')
<div class="container mx-auto">
    <div class="text-white/60 text-sm flex justify-between my-4">
        <a href="{{ route('blog::show', ['slug' => $post->slug]) }}">{{ $post->slug }}</a>
        <span title="{{ $post->created_at->format('d/m/Y H:M') }}">Published at {{ $post->created_at->format('d/m/Y') }}</span>
    </div>
    <div class="prose max-w-none prose-pre:p-4 prose-headings:text-white prose-a:text-white">
        {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml($post->content()) !!}
    </div>
</div>
@endsection
