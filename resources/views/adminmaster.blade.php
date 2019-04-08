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




    <title>@yield('title')</title>
</head>
<body>
    <div class="bgi-layer">
        <div class="container mx-auto">
            <h1 class="text-center text-6xl py-8">St. Anne's City Farm - Admin</h1>
        </div>
    </div>
    <div class="bg-green-dark">
        <div class="container mx-auto">
            <ul class="flex justify-between list-reset py-4">
            <li class="text-xl "><a href="{{route('index')}}" class="no-underline text-grey-lightest hover:text-grey">Return to main site</a></li>
            <li class="text-xl "><a href="" class="no-underline text-grey-lightest hover:text-grey">Logout</a></li>
            </ul>
        </div>

    </div>

    @yield('content')


    @include('inc.footer')
    @yield('scripts')

    <script src="/js/app.js"></script>
    <script src="/js/custom.js"></script>
    
</body>
</html>