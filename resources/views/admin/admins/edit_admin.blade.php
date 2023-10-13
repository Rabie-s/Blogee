@extends('admin.layouts.master')


@section('body')
    <div class="h-screen flex justify-center">
        <div class="w-96 md:w-[52rem] lg:w-[72rem]">

            <div class="my-10 p-5 rounded-lg bg-slate-100 drop-shadow-2xl">
                <h1 class="text-center font-bold text-3xl uppercase">Add admin</h1>
            </div>

            <div class="my-5 space-x-2">
                <a href="{{route('admins.index')}}" class="py-2 px-3 text-white  bg-blue-600 hover:bg-blue-700 rounded text-lg">Admin</a>
            </div>

            <form action="{{ route('admins.update', $user->id) }}" method="post">
                @method('PUT')
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
                        <h1 class="text-center text-black text-4xl uppercase">Create new article</h1>
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Name</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="{{ $user->name }}"
                            name="name" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Email</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="{{ $user->email }}"
                            name="email" type="email">
                    </div>

                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Phone number</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="{{ $user->phone_number }}"
                            name="phone_number" type="text">
                    </div>


                    <div class="mb-3">
                        <label class="block text-base text-black mb-1" for="">Role</label>
                        <select class="outline outline-1 w-full py-1 px-1 rounded bg-white text-lg" name="role">
                            <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                            @foreach (App\Enums\UserRole::cases() as $role)
                                <option value="{{ $role->value }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <button class="py-1 text-white bg-slate-800 hover:bg-slate-700 rounded text-lg w-full"
                            type="submit">Add</button>
                    </div>

                    <div class="mb-3">
                        <a class="block text-center py-1 text-white bg-slate-800 hover:bg-slate-700 rounded text-lg w-full" href="{{route('admins.changeAdminPassword',$user->id)}}">Change password</a>
                    </div>

                </div>

            </form>

        </div>



    </div>
@endsection
