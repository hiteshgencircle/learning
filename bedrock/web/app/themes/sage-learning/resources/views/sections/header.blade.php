<header class="banner bg-white shadow-md sticky top-0 z-50">
  <div class="container mx-auto px-4 lg:px-8">
    <div class="flex items-center justify-between h-16 md:h-20">
      <a class="brand text-2xl md:text-3xl font-bold text-gray-900 hover:text-blue-600 transition-colors" href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a>

      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex gap-6 text-sm md:text-base font-medium', 'echo' => false]) !!}
        </nav>
      @endif
    </div>
  </div>
</header>
