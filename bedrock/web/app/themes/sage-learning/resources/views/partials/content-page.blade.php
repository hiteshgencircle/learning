@php(the_content())
@include('partials.hero')
@include('partials.flexible')

@if ($pagination())
  <nav class="page-nav" aria-label="Page">
    {!! $pagination !!}
  </nav>
@endif
