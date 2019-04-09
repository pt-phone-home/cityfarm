<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/magnific.css">
    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">




    <title>@yield('title')</title>
</head>
<body>
    @include('inc.header')

    @yield('content')


    @include('inc.footer')
    @yield('scripts')

    <script src="/js/app.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script> 

        @if(Session::has('success'))
    
        toastr.success("{{Session::get('success')}}")
        @endif
        
        @if(Session::has('info'))
    
        toastr.info("{{Session::get('info')}}")
        @endif
    </script>
    
</body>
</html>