@extends('blog.layouts.master')

@section('body')
    <div class="container mx-auto">

        <div class="my-10">
            <h1 class="text-center uppercase font-bold text-3xl">Latest article</h1>
        </div>

        <div class="m-4 grid gap-8 justify-center grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

            @foreach ($articles as $article)
                <div class="group cursor-pointer bg-white rounded-lg shadow-lg">
                    <a href="{{route('article',$article->slug)}}">
                        <div>
                            <img class="w-full max-h-40" src="{{ asset('uploads/' . $article->image) }}">
                        </div>
                        <span class="block relative top-2 left-2 text-sm text-blue-600">{{ $article->category->name }}</span>
                        <div class="p-4">
                            <h2 class="text-2xl font-bold group-hover:text-blue-700">{{ $article->title }}
                            </h2>
                           {{--  <p class="text-sm text-gray-400 truncate">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Fugit, atque.</p> --}}
                        </div>
                    </a>
                </div>

                
            @endforeach

            

        </div>
        <div class="my-1">
            {{$articles->links()}}
        </div>
        
    @endsection
