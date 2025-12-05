<article class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 border border-indigo-100 my-4">
  <header>
    @if(has_post_thumbnail())
      <div class="w-full h-48 overflow-hidden bg-gray-200">
        {!! get_the_post_thumbnail(null, 'medium_large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 rounded-t-lg']) !!}
      </div>
    @endif

    <h1 class="text-2xl font-bold text-gray-900 px-6 mt-4">
      {!! $title !!}
    </h1>

    <div class="px-6 pb-4">
    @include('partials.entry-meta')
    </div>

  </header>

  <div class="px-6 pb-6">
    @php(the_content())
  </div>

  {{-- @if ($pagination())
    <footer>
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </footer>
  @endif --}}

  {{-- @php(comments_template()) --}}
</article>
