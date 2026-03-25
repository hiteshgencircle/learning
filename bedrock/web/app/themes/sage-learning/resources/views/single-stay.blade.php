@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  @include('partials.page-builder.builder')
  @endwhile
@endsection
