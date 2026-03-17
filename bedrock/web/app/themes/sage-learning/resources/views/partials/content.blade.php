<article @php(post_class('bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 mb-8'))>
  @if (has_post_thumbnail())
    <a href="{{ get_permalink() }}" class="block">
      {!! get_the_post_thumbnail(null, 'large', ['class' => 'w-full h-64 object-cover']) !!}
    </a>
  @endif

  <div class="p-6">
    <header class="mb-4">
      <h2 class="entry-title text-2xl md:text-3xl font-bold mb-3">
        <a href="{{ get_permalink() }}" class="text-gray-900 hover:text-blue-600 transition-colors no-underline">
          {!! $title !!}
        </a>
      </h2>

      <div class="entry-meta text-sm text-gray-600 flex flex-wrap gap-4">
        @include('partials.entry-meta')
      </div>
    </header>

    <div class="entry-summary text-gray-700 leading-relaxed">
      @php(the_excerpt())
    </div>

    <a href="{{ get_permalink() }}" class="inline-block mt-4 text-blue-600 hover:text-blue-800 font-medium no-underline">
      {{ __('Read more', 'sage') }} &rarr;
    </a>
  </div>
</article>
