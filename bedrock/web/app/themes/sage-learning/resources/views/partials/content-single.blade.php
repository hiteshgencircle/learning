<article @php(post_class('h-entry bg-white rounded-lg shadow-md overflow-hidden'))>
  @if (has_post_thumbnail())
    <div class="featured-image">
      {!! get_the_post_thumbnail(null, 'full', ['class' => 'w-full h-96 object-cover']) !!}
    </div>
  @endif

  <div class="p-6 md:p-8 lg:p-12">
    <header class="mb-8">
      <h1 class="p-name text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
        {!! $title !!}
      </h1>

      <div class="entry-meta text-sm text-gray-600 flex flex-wrap gap-4 pb-6 border-b border-gray-200">
        @include('partials.entry-meta')
      </div>
    </header>

    <div class="e-content max-w-none">
      @php(the_content())
    </div>

    @if ($pagination())
      <footer class="mt-8 pt-8 border-t border-gray-200">
        <nav class="page-nav" aria-label="Page">
          {!! $pagination !!}
        </nav>
      </footer>
    @endif
  </div>

  <div class="p-6 md:p-8 lg:p-12 bg-gray-50 border-t border-gray-200">
    @php(comments_template())
  </div>
</article>
