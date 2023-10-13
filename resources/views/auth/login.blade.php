@extends('auth.layouts.master')

@section('body')
    <div class="h-screen flex justify-center items-center">
        <div class="w-96 p-4 bg-white rounded-lg drop-shadow-2xl">

            @if (session('status'))
                <div class="bg-red-600 text-white p-1 rounded mb-3">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('auth.authenticate') }}" method="post">
                @csrf

                <div class="mb-3">
                    <h1 class="text-center text-black text-4xl uppercase">Login</h1>
                </div>

                <div class="mb-2">
                    <label class="block text-black mb-1" for="">Email</label>
                    <input class="outline outline-1 w-full px-1 rounded text-lg" type="text" name="email"
                        value="{{ old('email') }}">
                    <span class="text-red-600">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-2">
                    <label class="block text-black mb-1" for="">Password</label>
                    <input class="outline outline-1 w-full px-1 rounded text-lg" type="password" name="password">
                    <span class="text-red-600">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-2">
                    <button class="py-1 text-white bg-slate-800 hover:bg-slate-700 rounded text-lg w-full"
                        type="submit">Login</button>
                </div>

            </form>
        </div>
    </div>
@endsection
