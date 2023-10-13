@extends('admin.layouts.master')

@section('body')
    <div class="h-screen flex justify-center">

        <div class="w-80 md:w-[52rem] lg:w-[82rem] bg-white rounded-lg">

            <div class="my-10 p-5 rounded-lg bg-slate-100 drop-shadow-2xl">
                <h1 class="text-center font-bold text-3xl uppercase">Articles</h1>
            </div>

            <div class="overflow-auto rounded-lg shadow drop-shadow-2xl">

                <div class="my-5 space-x-2">
                    <a href="{{route('articles.create')}}" class="py-2 px-3 text-white  bg-blue-600 hover:bg-blue-700 rounded text-lg">Add article</a>
                </div>

                <table class="text-black w-full ">
                    <thead class="border-b-2 bg-gray-200">
                        <tr>
                            <th class="text-left text-lg p-2">Title</th>
                            <th class="text-left text-lg p-2">Slug</th>
                            <th class="text-left text-lg p-2">Views</th>
                            <th class="text-left text-lg p-2">Category</th>
                            <th class="text-left text-lg p-2">Created by</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articles as $article)
                            <tr class="odd:bg-gray-100">
                                <td class="text-base p-2 mb-5 whitespace-nowrap">{{ $article->title }}</td>
                                <td class="text-base p-2 mb-5 whitespace-nowrap">{{ $article->slug }}</td>
                                <td class="text-base p-2 mb-5 whitespace-nowrap">{{ $article->views }}</td>
                                <td class="text-base p-2 mb-5 whitespace-nowrap">{{ $article->category->name }}</td>
                                <td class="text-base p-2 mb-5 whitespace-nowrap">{{ $article->user->name }}</td>
                                <td class="space-x-3 whitespace-nowrap">
                                    <a href='{{route('articles.edit',$article->id)}}' class="text-blue-700 hover:text-blue-600">Edit</a>
                                    <form class="inline" action="{{route('articles.destroy',$article->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="text-red-700 hover:text-red-600" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
@endsection
