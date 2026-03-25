{{--
  Template Name: Stay Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @while(have_posts()) @php(the_post())

    @include('partials.page-builder.builder')

    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
