<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@vite('resources/css/app.css')

{{-- site-icon --}}
<link rel="icon" type="image/x-icon" href="{{asset('assets/siteIcon/'.$siteSettings->site_icon)}}">
{{-- end-site-icon --}}

<title>Admin login | {{$siteSettings->site_title}}</title>