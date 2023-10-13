@extends('blog.layouts.master')

@section('body')
{{--     <div class="my-10">
        <h1 class="text-4xl uppercase text-center">{{ $article->title }}</h1>
    </div> --}}

    <div class="flex flex-col items-center lg:items-start lg:flex-row justify-around">

        <div class="p-5 lg:w-8/12">
            <article class="my-3">
                {!! $siteSettings->about_page_content !!}
            </article>
        </div>

    </div>
@endsection
