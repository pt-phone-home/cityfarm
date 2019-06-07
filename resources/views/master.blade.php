<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Welcome to St. Anne's City Farm. We are a community space that is open 5 days a week and is free for everyone. So come get involved or come spend time at a beautiful city sanctuary. We are always looking for volunteers.">
    <meta name="keywords" content="City Farm, Sanctuary, Volunteers, Education, Raheny, St. Anne's Park,">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/magnific.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   

    


  



    <title>@yield('title')</title>
</head>
<body class="font-Roboto">

    @include('inc.header')

    @yield('content')


    @include('inc.footer')
    @section('scripts')

        <script src="/js/app.js"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script>
        <script src="/js/anime.min.js"></script>
        <script src="/js/aos.js"></script>
        <script src="/js/TweenMax.min.js"></script>
        <script src="/js/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <script>
            AOS.init();
        </script>
        <script> 

            @if(Session::has('success'))
        
            toastr.success("{{Session::get('success')}}")
            @endif
            
            @if(Session::has('info'))
        
            toastr.info("{{Session::get('info')}}")
            @endif
        </script>
    @show
    
</body>
</html>