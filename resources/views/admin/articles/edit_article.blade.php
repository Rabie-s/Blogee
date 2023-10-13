@extends('admin.layouts.master')


@section('body')
    <div class="h-screen flex justify-center">

        <div class="w-96 md:w-[52rem] lg:w-[72rem]">

            <div class="my-10 p-5 rounded-lg bg-slate-100 drop-shadow-2xl">
                <h1 class="text-center font-bold text-3xl uppercase">Add article</h1>
            </div>

            <div class="my-2 space-x-2">
                <a href="{{route('articles.index')}}" class="py-2 px-3 text-white  bg-blue-600 hover:bg-blue-700 rounded text-lg">Articles</a>
            </div>

            <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="p-4 bg-white rounded-lg shadow-2xl">

                    @if ($errors->any())
                        <div class="bg-red-600 text-white p-1 rounded mb-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="bg-emerald-600 text-white p-1 rounded mb-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-600 text-white p-1 rounded mb-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <h1 class="text-center text-black text-4xl uppercase">Create new article</h1>
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Title</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" name="title" type="text"
                            value="{{ $article->title }}">
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Article image</label>
                        <input name="image" type="file"
                            class="outline outline-1 rounded w-full p-1 text-slate-600 file:bg-slate-700 hover:file:bg-slate-800 file:p-2 file:rounded-lg file:text-white file:outline-none file:border-0 file:cursor-pointer">
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Choose a category</label>
                        <select class="outline outline-1 w-full py-1 px-1 rounded bg-white text-lg" name="category">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}" @if ($article->category_id == $categorie->id) selected @endif>
                                    {{ $categorie->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for=""
                            value="{{ $article->content }}">Content</label>
                        <textarea name="content" id="tinyEditor">{{ $article->content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <button class="py-1 text-white bg-slate-800 hover:bg-slate-700 rounded text-lg w-full"
                            type="submit">Publish</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/libraries/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/tinymce.config.js') }}"></script>
@endsection
