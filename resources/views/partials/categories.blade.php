@php
    $categories = get_categories(['hide_empty' => true]);
@endphp

<div class="container mx-auto pt-4">
    <div class="flex flex-wrap justify-center items-center">
        @if(!empty($categories))
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
            @foreach($categories as $category)
            <a href="{{ get_category_link($category->term_id) }}" class="inline-block bg-indigo-50 hover:bg-indigo-200 text-indigo-700 font-semibold px-4 py-2 rounded-lg transition-colors duration-200">
                <h3 class="text-2xl font-bold text-gray-900">{{ $category->name }}</h3>
                <p class="text-sm text-gray-600">{{ $category->description }}</p>
            </a>
            @endforeach
        </div>
        @endif
    </div>
</div>