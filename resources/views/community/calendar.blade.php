@extends('master')


@section('title')
 Farm Calendar | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Farm Calendar</h1>
</div>
<div class="container mx-auto py-8 flex flex-wrap">
       
     <div class="w-full md:w-1/2">
        Testing
    </div>
   <div class="w-full md:w-1/2">
    <div data-tockify-component="calendar" data-tockify-calendar="peter.tiernan"></div>
        {{-- {!! $calendar->calendar() !!} --}}
    </div>     
</div>
    
@endsection

@section('scripts')
<script data-cfasync="false" data-tockify-script="embed"
                                  src="https://public.tockify.com/browser/embed.js"></script>


{!! $calendar->script() !!}


@endsection