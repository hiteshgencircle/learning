{{-- resources/views/partials/hero.blade.php --}}
{{--@php--}}
{{--$title = get_field("hero_title");--}}
{{--@endphp--}}

<section class="hero">
  @if($hero_title)
      <h1 class="text-xl mt-4">{{ $hero_title }}</h1>
  @endif
</section>
