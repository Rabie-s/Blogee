@extends('admin.layouts.master')


@section('body')
    <div class="h-screen flex justify-center">
        <div class="w-96 md:w-[52rem] lg:w-[72rem]">

            <div class="my-10 p-5 rounded-lg bg-slate-100 drop-shadow-2xl">
                <h1 class="text-center font-bold text-3xl uppercase">Site settings</h1>
            </div>


            <form action="{{route('settings.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="p-4 bg-white rounded-lg drop-shadow-2xl">

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

                    <div class="mb-3">
                        <h1 class="text-center text-black text-4xl uppercase">Update settings site</h1>
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Site title</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="{{ $setting->site_title }}"
                            name="site_title" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Site icon</label>
                        <input name="site_icon" type="file"
                            class="outline outline-1 rounded w-full p-1 text-slate-600 file:bg-slate-700 hover:file:bg-slate-800 file:p-2 file:rounded-lg file:text-white file:outline-none file:border-0 file:cursor-pointer">
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">About bage content</label>
                        <textarea name="about_page_content" id="tinyEditor">{{ $setting->about_page_content }}</textarea>
                    </div>


                    <div class="mb-3">
                        <button class="py-1 text-white bg-slate-800 hover:bg-slate-700 rounded text-lg w-full"
                            type="submit">Save</button>
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
