<article class="flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="hover:opacity-75">
        <img src="{{$post->getImageUlr()}}">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        @foreach ($post->categories as $cats)
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$cats->title}}</a>
        @endforeach
        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on
            {{$post->created_at}}
        </p>
        <a href="#" class="pb-6">{{ $post->shortBody() }}</a>
        <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                class="fas fa-arrow-right"></i></a>
    </div>
</article>