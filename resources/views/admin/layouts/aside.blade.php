  <!-- side-nav -->
  <header>
      <div class="absolute right-4 top-4 z-30" id="navBtnToggle">
          <div class="cursor-pointer py-2 px-3 bg-slate-900 hover:bg-slate-400 rounded-lg">
              <i class="fa-solid fa-bars text-white text-2xl"></i>
          </div>
      </div>

      <nav class="fixed top-0 hidden z-30" id="nav">

          <div class="w-[288px] h-screen bg-slate-900">

              <!-- logo -->
              <div class="p-4">
                  <h1 class="text-3xl text-white uppercase font-bold">{{$siteSettings->site_title}}</h1>
              </div>
              <!-- end-logo -->

              <!-- menu -->
              <div class="mt-5 p-2">
                  <a href="{{ route('admin.dashboard') }}">
                      <div
                          class="flex text-white items-center text-xl gap-x-2 p-2 rounded-lg cursor-pointer hover:bg-slate-400">
                          <i class="fa-solid fa-house"></i>
                          <h4>Home</h4>
                      </div>
                  </a>
              </div>
              <!-- end-menu -->
              @if (Auth::user()->role == App\Enums\UserRole::Admin)
                  <!-- menu-with-sub-menu -->
                  <div class="group p-2">
                      <div
                          class="group flex items-center justify-between cursor-pointer hover:bg-slate-400 rounded-lg p-2">
                          <div class="flex text-white items-center text-xl gap-x-2">
                              <i class="fa-solid fa-user"></i>
                              <h4>Admins</h4>
                          </div>
                          <i class="fa-solid fa-caret-down text-white text-xl group-hover:rotate-180"></i>
                      </div>

                      <div class="bg-slate-700 text-white rounded-lg hidden group-hover:block">
                          <a href="{{ route('admins.index') }}">
                              <h1 class="text-base mt-1 rounded-lg p-1 cursor-pointer hover:text-black hover:bg-white">
                                  Admins
                              </h1>
                          </a>
                          <a href="{{ route('admins.create') }}">
                              <h1 class="text-base mt-1 rounded-lg p-1 cursor-pointer hover:text-black hover:bg-white">
                                  Create Admin
                              </h1>
                          </a>
                      </div>
                  </div>
                  <!-- end-menu-with-sub-menu -->

                  <!-- menu-with-sub-menu -->
                  <div class="group p-2">
                      <div
                          class="group flex items-center justify-between cursor-pointer hover:bg-slate-400 rounded-lg p-2">
                          <div class="flex text-white items-center text-xl gap-x-2">
                              <i class="fa-solid fa-sitemap"></i>
                              <h4>Categories</h4>
                          </div>
                          <i class="fa-solid fa-caret-down text-white text-xl group-hover:rotate-180"></i>
                      </div>

                      <div class="bg-slate-700 text-white rounded-lg hidden group-hover:block">
                          <a href="{{ route('categories.index') }}">
                              <h1 class="text-base mt-1 rounded-lg p-1 cursor-pointer hover:text-black hover:bg-white">
                                  Categories
                              </h1>
                          </a>
                          <a href="{{ route('categories.create') }}">
                              <h1 class="text-base mt-1 rounded-lg p-1 cursor-pointer hover:text-black hover:bg-white">
                                  Create Category
                              </h1>
                          </a>
                      </div>
                  </div>
                  <!-- end-menu-with-sub-menu -->
              @endif


              <!-- menu-with-sub-menu -->
              <div class="group p-2">
                  <div class="group flex items-center justify-between cursor-pointer hover:bg-slate-400 rounded-lg p-2">
                      <div class="flex text-white items-center text-xl gap-x-2">
                          <i class="fa-solid fa-newspaper"></i>
                          <h4>Articles</h4>
                      </div>
                      <i class="fa-solid fa-caret-down text-white text-xl group-hover:rotate-180"></i>
                  </div>

                  <div class="bg-slate-700 text-white rounded-lg hidden group-hover:block">
                      <a href="{{ route('articles.index') }}">
                          <h1 class="text-base mt-1 rounded-lg p-1 cursor-pointer hover:text-black hover:bg-white">
                              Articles
                          </h1>
                      </a>
                      <a href="{{ route('articles.create') }}">
                          <h1 class="text-base mt-1 rounded-lg p-1 cursor-pointer hover:text-black hover:bg-white">
                              Create Article
                          </h1>
                      </a>
                  </div>
              </div>
              <!-- end-menu-with-sub-menu -->

              <!-- menu -->
              <div class="p-2">
                  <a href="{{ route('settings.settings') }}">
                      <div
                          class="flex text-white items-center text-xl gap-x-2 p-2 rounded-lg cursor-pointer hover:bg-slate-400">
                          <i class="fa-solid fa-gear"></i>
                          <h4>Settings</h4>
                      </div>
                  </a>
              </div>
              <!-- end-menu -->



              <!-- profile-with-logout -->
              <div class="fixed w-72 bottom-0">
                  <div class="flex items-center justify-between bg-slate-500 m-2 p-4 rounded-lg">
                      <h3 class="text-xl text-white">{{ Auth::user()->name }}</h3>
                      <a class="text-white hover:text-gray-200" href="{{ route('auth.logout') }}">Log-out</a>
                  </div>
              </div>
              <!-- end-profile-with-logout -->

          </div>
      </nav>
  </header>
  <!-- end-side-nav -->
