@extends('admin.layouts.master')

@section('body')
    @if (session('error'))
        <div id="notification" class="absolute top-4 left-4 rounded w-60 bg-red-600 text-white py-4 z-30">
            <div class="flex items-center gap-x-5 px-4">
                <i id="closeNotificationBtn" class="fa-solid fa-xmark cursor-pointer"></i>
                <p class="text-center">{{ session('error') }}</p>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-16 mt-9">

        <div class="text-center bg-emerald-600 text-white shadow-2xl p-7 rounded-lg">
            <span class="block text-4xl">{{ $totalArticles }}</span>
            <span class="block text-2xl">Articles</span>
        </div>

        <div class="text-center bg-sky-600 text-white shadow-2xl p-7 rounded-lg">
            <span class="block text-4xl">{{ $totalCategories }}</span>
            <span class="block text-2xl">Category</span>
        </div>

        <div class="text-center bg-blue-600 text-white shadow-2xl p-7 rounded-lg">
            <span class="block text-4xl">{{ $totalAdmins }}</span>
            <span class="block text-2xl">Admins</span>
        </div>


    </div>
@endsection
