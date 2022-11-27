<x-layout>
    @include('_posts-header')
    {{--    @foreach ($posts as $post)--}}
    {{--        <article>--}}
    {{--            <a href="/posts/{{$post->id}}">--}}
    {{--                <h1>{!!$post->title!!}</h1>--}}
    {{--            </a>--}}

    {{--            <p>--}}
    {{--                By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a--}}
    {{--                    href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
    {{--            </p>--}}

    {{--            <div>{{$post->excerpt}}</div>--}}
    {{--        </article>--}}
    {{--    @endforeach--}}


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-post-featured-card :post="$posts[0]"/>

            @if($posts->count()>1)
                <div class="lg:grid lg:grid-cols-2">
                    @foreach($posts->skip(1) as $post)
                        <x-post-card :post="$post"/>
                    @endforeach
                </div>
            @endif
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
