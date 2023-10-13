<!DOCTYPE html>
<html lang="en">

<head>
    @include('blog.layouts.head')
</head>

<body class="bg-gray-50 font-SofiaSans">
    @include('blog.layouts.nav_bar')
    @yield('body')

    @include('blog.layouts.scripts')
</body>

</html>
