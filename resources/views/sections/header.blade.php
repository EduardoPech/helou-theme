<header class="border-b border-gray-200 px-4 py-2">
  <div class="container mx-auto flex justify-between items-center">
    <a class="text-2xl font-bold !no-underline bg-gradient-to-r from-blue-600 via-green-500 to-indigo-400 inline-block text-transparent bg-clip-text" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>
    @if (has_nav_menu('primary_navigation'))
      <nav class="" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex items-center gap-4', 'walker' => new \App\NavWalker(), 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>
