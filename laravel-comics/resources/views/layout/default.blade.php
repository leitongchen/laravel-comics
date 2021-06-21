<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('page-title')</title>

    {{-- Vue --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <div id="app">
        
        @include('partials.header')
    
        @yield('main-content')

        @yield('buy-nav')

        @include('partials.footer')

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>