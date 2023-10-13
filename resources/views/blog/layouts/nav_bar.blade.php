<nav>
    <div class="flex flex-col md:flex-row md:items-center gap-y-5 md:gap-x-10 px-6 py-3 bg-white">

        <div class="absolute right-0 text-xl mx-3 cursor-pointer md:hidden" id="toggleNavBtn">
            <i class="fa-solid fa-bars"></i>
        </div>


        <h1 class="text-black text-2xl">{{$siteSettings->site_title}}</h1>

        <div class="hidden md:block" id="navBar">
            <ul class="flex flex-col md:flex-row text-black text-base">

                <!-- menu -->
                <li class="px-4 py-2 md:py-0 rounded hover:bg-gray-200"><a href="{{route('home')}}">Home</a></li>
                <!-- end-menu -->


                <!-- menu-with-sub-menu -->
                <li class="group px-4 py-2 md:py-0 rounded hover:bg-gray-200">
                    <div class="flex gap-x-1">
                        <a href="http://">Categories</a>
                        <i class="fa-solid fa-sort-down"></i>
                    </div>

                    <div
                        class="bg-white text-black md:absolute md:w-48 my-2 mt-0 rounded-lg shadow-lg md:shadow-2xl hidden group-hover:block">
                        <ul class="text-base">
                            @foreach ($categories as $category)
                                <a href="{{route('showArticlesInCategory',$category->id)}}">
                                    <li class="p-2 cursor-pointer hover:bg-gray-100 border-b-2">{{ $category->name }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <!-- end-menu-with-sub-menu -->

                <!-- menu -->
                <li class="px-4 py-2 md:py-0 rounded hover:bg-gray-200"><a href="{{route('about')}}">About</a></li>
                <!-- end-menu -->
            </ul>
        </div>

    </div>

</nav>
