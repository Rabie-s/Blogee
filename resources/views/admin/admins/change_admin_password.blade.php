@extends('admin.layouts.master')


@section('body')
    <div class="h-screen flex justify-center">
        <div class="w-96 md:w-[52rem] lg:w-[72rem]">

            <div class="my-10 p-5 rounded-lg bg-slate-100 drop-shadow-2xl">
                <h1 class="text-center font-bold text-3xl uppercase">change admin password</h1>
            </div>

            <div class="my-5 space-x-2">
                <a href="{{route('admins.index')}}" class="py-2 px-3 text-white  bg-blue-600 hover:bg-blue-700 rounded text-lg">Admin</a>
            </div>

            <form action="{{ route('admins.updateAdminPassword',$user->id) }}" method="post">
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
                        <h1 class="text-center text-black text-4xl uppercase">Change admin password</h1>
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Password</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" name="password" type="password">
                    </div>

                    <div class="mb-3">
                        <button class="py-1 text-white bg-slate-800 hover:bg-slate-700 rounded text-lg w-full"
                            type="submit">Change password</button>
                    </div>
                </div>

            </form>

        </div>

    </div>
@endsection
