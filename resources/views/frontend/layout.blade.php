{{--This page will have all the yields to pull contents from the information(sections) provided on the other pages. This page is used to structure your website layout--}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.header-src')

    <title>@yield('title', 'almawashi')</title>

</head>

	@yield('content')
    @include('includes.footer')

</body>
</html>