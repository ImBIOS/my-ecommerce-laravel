<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - IMAMDVSN</title>
    <link rel="shortcut icon" href='{{ asset('logo512.png') }}' />

    <!-- Styles -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/" />

    <!-- Bootstrap core CSS -->
    <link href='{{ asset('css/bootstrap.min.css') }}' rel="stylesheet" />
    <meta name="theme-color" content="#7952b3" />

    <!-- Custom styles for this template -->
    <link href='{{ asset('css/bootstrap.min.css') }}' rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
</head>

<body>
    @include('components.navbar')

    <main>
        @yield('content')
        @include('components.footer')
    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
