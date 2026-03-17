<footer class="content-info bg-gray-900 text-gray-300 mt-auto">
  <div class="container mx-auto px-4 lg:px-8 py-12">
    @if (is_active_sidebar('sidebar-footer'))
      <div class="footer-widgets grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
        @php(dynamic_sidebar('sidebar-footer'))
      </div>
    @endif

    <div class="border-t border-gray-700 pt-8 text-center text-sm">
      <p>&copy; {{ date('Y') }} {{ get_bloginfo('name') }}. {{ __('All rights reserved.', 'sage') }}</p>
    </div>
  </div>
</footer>
