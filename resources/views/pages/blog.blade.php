@extends('base.web')
@section('page::title', 'Blog')

@section('page::body')
@foreach ($posts as $post)
    {{ $post->title }}
@endforeach
@endsection
