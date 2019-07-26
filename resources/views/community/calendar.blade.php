@extends('master')


@section('title')
 Farm Calendar | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Farm Calendar</h1>
</div>

<div class="hero">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3">
                <div class="flex flex-col bg-primary-8-opacity-7 justify-center items-center w-full h-full">

                    <div class="border-b border-grey-lightest pb-4 pt-24 mb-8">
                        <h4 class="text-grey-lightest text-3xl">Family Day Sundays</h4>
                    </div>
                    <div class="flex justify-around w-1/2 pb-4 border-b border-grey-lightest">
                        <div class="flex flex-col items-center px-4">
                            <span class="py-1 text-grey-lightest text-sm">Every</span>
                            <span class="py-1 text-grey-lightest text-2xl">Sunday</span>
                            {{-- <span class="py-1 text-grey-lightest text-sm">2019</span> --}}
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <a href="https://www.eventbrite.ie/d/ireland--dublin/started-st.-anne's-city-farm---family-day---sundays/" class="uppercase text-grey-lightest border-2 px-4 py-2 border-grey-lightest no-underline hover:text-grey-light hover:border-grey-light" target="_blank">More</a>
                        </div>
                    </div>
                    <div class="pt-4 flex justify-center w-full">
                            <i class="fas fa-map-marker-alt text-grey-lightest pr-2"></i> <h5 class="text-grey-lightest text-sm ">St. Anne's City Farm</h5>
                    </div>
                    <div class="pb-12 pt-4 flex justify-center w-full">
                            <i class="fas fa-money-bill-alt pr-2 text-grey-lightest"></i> <h5 class="text-grey-lightest text-sm"> Price: Free</h5>
                    </div>

                </div>

            </div>
            <div class="w-full md:w-2/3 hidden md:flex">
                <div class="w-full flex flex-col items-center justify-center">
                    <h2 class="font-dec text-3xl text-grey-lightest pb-4 text-center">St. Anne's City Farm is open free to the public every Sunday. </h2>
                    <p class="text-xl text-grey-lightest py-1">Morning Sessions: 10am - 12pm</p>
                    <p class="text-xl text-grey-lightest py-1">Afternoon Sessions: 1pm - 2:30pm</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-pattern-grey-lightest">
    <div class="container mx-auto py-8 flex flex-col ">
        <h2 class="text-5xl font-dec text-primary-8 underline">Upcoming Events</h2>
    </div>
</div>

<div class="bgi-layer3">
    <div class="container mx-auto flex flex-wrap py-8">




        @forelse ($events as $event)
           {{-- @if ($event->date < Carbon::now()->startOfMonth()) --}}


        {{-- @if($event->date > Carbon::now()) --}}

        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center items-center px-1 py-1 h-64">
            <div class="relative w-full h-full flex flex-col">
                {{-- Backround Image and Overlay START --}}
                <div class=" w-full h-full absolute pin-t pin-l z-0">
                    <img src="/{{$event->img}}" alt="" class="w-full h-full object-cover">
                </div>
                {{-- <div class=" w-full h-full absolute pin-t pin-l bg-green-light-opacity-6 z-10">

                </div> --}}
                {{-- Background Image and Overlay END --}}

                {{-- Top Section START --}}
                <div class="z-20 h-60p ">
                    <div class="w-1/3 bg-primary-8-opacity-7 h-full flex flex-col items-center justify-center">
                        <span class="text-grey-lightest text-sm">{{Carbon::parse($event->date)->format('M')}}</span>
                        <span class="py-1 text-grey-lightest text-4xl">{{Carbon::parse($event->date)->format('d')}}</span>
                    <span class="text-grey-lightest text-sm">{{Carbon::parse($event->date)->format('Y')}}</span>
                    </div>
                    <div class="w-2/3 h-full">

                    </div>
                </div>
                {{-- Top Section END --}}
                {{-- Bottom Section START --}}
                <div class="z-20 h-40p flex">
                    <div class="w-70p bg-grey-light h-full text-sm px-1 py-2">
                        <h3 class="text-grey-darkest py-1">{{$event->title}}</h3>
                        <h4 class="py-1 text-grey-darkest">{{$event->location}}</h4>
                    <h5 class="text-grey-darkest">{{$event->time_from}} - {{$event->time_to}}</h5>
                    </div>
                    <div class="flex justify-center items-center bg-primary-8 w-30p">
                    <a href="{{route('calendar.show', ['id' => $event->id])}}" class="uppercase text-grey-lightest border-2 px-4 py-2 border-grey-lightest no-underline hover:bg-grey-lightest hover:text-primary-8">More</a>
                    </div>
                </div>
                {{-- Bottom Section END --}}
            </div>
        </div>
        {{-- @endif --}}
        {{-- @endif --}}

        @empty
        <div class="container">
            <p>No Events listed at the moment, please check back later</p>
        </div>

        @endforelse



    </div>
</div>


{{-- <div class="container mx-auto py-8 flex flex-wrap"> --}}

     {{-- <div class="w-full md:w-1/2">
        Testing
    </div>
   <div class="w-full md:w-1/2">
    <div data-tockify-component="calendar" data-tockify-calendar="peter.tiernan"></div> --}}
        {{-- {!! $calendar->calendar() !!} --}}
    {{-- </div>
</div> --}}

@endsection

@section('scripts')
@parent
{{-- <script data-cfasync="false" data-tockify-script="embed"
                                  src="https://public.tockify.com/browser/embed.js"></script>


{!! $calendar->script() !!} --}}


@endsection
