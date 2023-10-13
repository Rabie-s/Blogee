@extends('blog.layouts.master')

@section('body')
    <div class="my-10">
        <h1 class="text-4xl uppercase text-center">{{ $article->title }}</h1>
    </div>

    <div class="flex flex-col items-center lg:items-start lg:flex-row justify-around">

        <div class="p-5 lg:w-8/12">
            <article class="my-3">
                {!! $article->content !!}
            </article>
        </div>

        <div class="h-full w-full lg:w-3/12">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="bg-slate-700">
                    <p class="text-center text-white font-bold">Most popular articles</p>
                </div>
                <ul class="p-4">
                    @foreach ($mostPopularArticles as $mostPopularArticle)
                    <a href="{{route('article',$mostPopularArticle->slug)}}">
                        <li class="flex items-center gap-x-3 hover:bg-gray-100">
                            <img class="max-h-16 w-28 border-b-2" src="{{ asset('uploads/'.$mostPopularArticle->image) }}">
                            <span class="text-xl">{{$mostPopularArticle->title}}</span>
                        </li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>



    </div>
@endsection

