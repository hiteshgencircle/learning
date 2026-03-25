{{--
  Template Name: Stay Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @while(have_posts()) @php(the_post())

    @if($page_builder && count($page_builder))
        @foreach($page_builder as $section)
            @switch($section["acf_fc_layout"])
                @case("banner")
                    @include('partials.page-builder.banner')
                    @break
                @case("full_width_cta")
                    @include('partials.page-builder.full-width-cta')
                    @break
                @case("two_column_with_image")
                    @include('partials.page-builder.two-column-with-image')
                    @break
                @case("cta_full_width_image")
                    @include('partials.page-builder.cta-full-width-image')
                    @break
                @case("three_column_with_title_description")
                    @include('partials.page-builder.three-column-with-title-description')
                    @break
                @case("testimonials")
                    @include('partials.page-builder.testimonials')
                    @break
                @case("slider")
                    @include('partials.page-builder.slider')
                    @break
            @endswitch
        @endforeach
    @endif

    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
