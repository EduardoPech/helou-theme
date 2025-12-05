<a href="{{ get_permalink() }}">
  <article class="cursor-pointer bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 border border-indigo-100">
    @if(has_post_thumbnail())
      <div class="w-full h-48 overflow-hidden bg-gray-200">
        {!! get_the_post_thumbnail(null, 'medium_large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 rounded-t-lg']) !!}
      </div>
    @endif
    <header class="px-6 py-4">
      <h2 class="entry-title text-xl font-semibold text-gray-900">
        {!! $title !!}
      </h2>
      {{-- @include('partials.entry-meta') --}}
    </header>

    <div class="entry-summary px-6 text-gray-700 pb-4">
      @php
        $excerpt = get_the_excerpt();
        $max_length = 150;
        if (mb_strlen($excerpt, 'UTF-8') > $max_length) {
          $excerpt = mb_substr($excerpt, 0, $max_length, 'UTF-8') . '...';
        }
        echo $excerpt;
      @endphp
    </div>
  </article>
</a>