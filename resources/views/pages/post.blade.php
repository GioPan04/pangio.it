@extends('base.web')
@section('page::title', $post->title)

@section('page::body')
<div class="container mx-auto">
    <div class="prose max-w-none prose-pre:p-4 prose-headings:text-white">
        {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml($post->content()) !!}
    </div>
</div>
@endsection
