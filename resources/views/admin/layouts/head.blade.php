<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{-- font-awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- end-font-awesome --}}

{{-- google-fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans&display=swap" rel="stylesheet">
{{-- end-google-fonts --}}

{{-- site-icon --}}
<link rel="icon" type="image/x-icon" href="{{asset('assets/siteIcon/'.$siteSettings->site_icon)}}">
{{-- end-site-icon --}}

@vite('resources/css/app.css')
<title>{{$siteSettings->site_title}}</title>
@yield('cssLinks')
