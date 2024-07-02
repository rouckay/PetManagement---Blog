<x-app-layout>
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        @foreach ($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach
        <!-- Pagination -->
        {{$posts->links()}}
    </section>
    <x-text-widget></x-text-widget>
</x-app-layout>