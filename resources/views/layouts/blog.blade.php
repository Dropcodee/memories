<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pius Adesanmi</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/et-line.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bs-filestyle.css') }}" type="text/css" />

    <!-- Theme Color Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />

    <!-- News Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/news.css') }}" type="text/css" />
    <!-- / -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body style="background: #f2f3f2 !important;">
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    <!-- External JavaScripts
	============================================= -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>

</html>
