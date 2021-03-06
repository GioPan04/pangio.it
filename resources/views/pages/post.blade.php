@extends('base.web')
@section('page::title', $post->title)

@section('page::head')
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ $post->link }}" />
<meta property="og:image" content="{{ route('blog::show::thumbnail', ['slug' => $post->slug]) }}" />
<meta property="article:published_time" content="{{ $post->created_at->toIso8601String() }}" />
<meta property="article:modified_time" content="{{ $post->updated_at->toIso8601String() }}" />
<meta property="article:author" content="Gioele Pannetto" />

<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="pangio.it">
<meta property="twitter:url" content="{{ $post->link }}">
<meta name="twitter:title" content="{{ $post->title }}">
<meta name="twitter:description" content="{{ $post->description }}">
<meta name="twitter:image" content="{{ route('blog::show::thumbnail', ['slug' => $post->slug]) }}">
@endsection

@section('page::description', $post->description)

@section('page::body')
@include('common.socialbar')
<div class="container mx-auto px-8 sm:px-12">
    <div class="text-white/60 text-sm flex justify-between my-4">
        <a class="hover:underline" href="{{ $post->link }}">{{ $post->slug }}</a>
        <span title="{{ $post->created_at->format('d/m/Y H:i') }}">Published at {{ $post->created_at->format('d/m/Y') }}</span>
    </div>
    <div class="prose max-w-none prose-pre:p-4 prose-invert prose-img:xl:max-w-5xl prose-img:mx-auto mb-10">
        {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml($post->content()) !!}
    </div>

    <script src="https://giscus.app/client.js"
        data-repo="GioPan04/pangio.it"
        data-repo-id="R_kgDOHYvRiA"
        data-category="Blog comments"
        data-category-id="DIC_kwDOHYvRiM4CPiSa"
        data-mapping="og:title"
        data-reactions-enabled="0"
        data-emit-metadata="0"
        data-input-position="top"
        data-theme="dark"
        data-lang="en"
        data-loading="lazy"
        crossorigin="anonymous"
        async>
    </script>
</div>
@endsection
