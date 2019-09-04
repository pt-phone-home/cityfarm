<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/magnific.css">
    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




    <title>@yield('title')</title>
</head>
<body>
    <div class="bgi-layer">
        <div class="container mx-auto">
            <h1 class="text-center text-6xl py-8 font-dec text-grey-lightest">St. Anne's City Farm - Admin</h1>
        </div>
    </div>
    <div class="bg-green-dark">
        <div class="container mx-auto">
            <ul class="flex justify-between list-reset py-4">
            <li class="text-xl "><a href="{{route('index')}}" class="no-underline text-grey-lightest hover:text-grey">Return to main site</a></li>
            @if(!Request::is('admin'))
            <li class="text-xl "><a href="{{route('admin.index')}}" class="no-underline text-grey-lightest hover:text-grey">Return to admin page</a></li>
            @endif
            @Auth<li class="text-xl "><a href="{{route('logout')}}" class="no-underline text-grey-lightest hover:text-grey">Logout</a></li>@endauth
            </ul>
        </div>

    </div>

    @yield('content')


    @include('inc.footer')
    @yield('scripts')

    <script src="/js/app.js"></script>
    <script src="/js/custom.js"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script>

        @if(Session::has('success'))

        toastr.success("{{Session::get('success')}}")
        @endif

        @if(Session::has('info'))

        toastr.info("{{Session::get('info')}}")
        @endif

        @if(Session::has('error'))

        toastr.error("{{Session::get('error')}}")
        @endif
    </script>

        {{-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script> --}}
  <script src="jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>
<script src="jquery.datetimepicker.full.js"></script>


</body>
</html>
