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
                <div class="flex flex-col bg-green-light-opacity-9 justify-center items-center w-full h-full">
                    
                    <div class="border-b border-grey-lightest pb-4 pt-24 mb-8">
                        <h4 class="text-grey-lightest text-4xl tracking-wide">Official Opening</h4>
                    </div>
                    <div class="flex justify-around w-1/2 pb-4 border-b border-grey-lightest">
                        <div class="flex flex-col items-center ">
                            <span class="py-1 text-grey-lightest text-sm">April</span>
                            <span class="py-1 text-grey-lightest text-4xl">26th</span> 
                            <span class="py-1 text-grey-lightest text-sm">2019</span>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <button class="uppercase text-grey-lightest border-2 px-4 py-2 border-grey-lightest">More</button>
                        </div>
                    </div>
                    <div class="pt-4 flex justify-center w-full">
                            <i class="fas fa-map-marker-alt text-grey-lightest pr-2"></i> <h5 class="text-grey-lightest text-sm ">Location</h5>
                    </div>
                    <div class="pb-12 pt-4 flex justify-center w-full">
                            <i class="far fa-clock pr-2 text-grey-lightest"></i> <h5 class="text-grey-lightest text-sm"> Time</h5>
                    </div>
                    
                </div>
                
            </div>
            <div class="w-full md:w-2/3 flex">
                <div class="w-full flex flex-col items-center justify-center">
                    <h2 class="font-dec text-4xl text-grey-lightest pb-4">St. Anne's City Farm Official Opening</h2>
                    <p class="text-xl text-grey-lightest">Join us for a great day</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container mx-auto py-8 flex flex-col items-center justify-center">
        <h2>Upcoming Events</h2>
        <p>Classes and #####</p>
    </div>
</div>

<div class="bg-events">
    <div class="container mx-auto flex flex-wrap py-8">

        <div class="w-full md:w-1/3 flex justify-center items-center px-2 py-2">
            <div class="relative w-full h-full flex flex-col">
                {{-- Backround Image and Overlay START --}}
                <div class=" w-full h-full absolute pin-t pin-l z-0">
                    <img src="/images/story.jpg" alt="" class="w-full h-full object-cover">
                </div>
                {{-- <div class=" w-full h-full absolute pin-t pin-l bg-green-light-opacity-6 z-10">
                   
                </div> --}}
                {{-- Background Image and Overlay END --}}

                {{-- Top Section START --}}
                <div class="z-20 h-60p ">
                    <div class="w-1/3 bg-green-light-opacity-9 h-full flex flex-col items-center justify-center">
                        <span class="text-grey-lightest text-sm">May</span>
                        <span class="py-1 text-grey-lightest text-4xl">22nd</span> 
                        <span class="text-grey-lightest text-sm">2019</span>
                    </div>
                    <div class="w-2/3 h-full">

                    </div>
                </div>
                {{-- Top Section END --}}
                {{-- Bottom Section START --}}
                <div class="z-20 h-40p flex">
                    <div class="w-70p bg-grey-light h-full px-2 py-2">
                        <h3>Title</h3>
                        <h4 class="py-1">Location</h4>
                        <h5>Time</h5>
                    </div>
                    <div class="flex justify-center items-center bg-green-light w-30p">
                        <button class="uppercase text-grey-lightest border-2 px-4 py-2 border-grey-lightest">More</button>
                    </div>
                </div>
                {{-- Bottom Section END --}}


            </div>
        </div>
        <div class="w-full md:w-1/3  h-64">

        </div>
        <div class="w-full md:w-1/3 h-64">

        </div>
        


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
{{-- <script data-cfasync="false" data-tockify-script="embed"
                                  src="https://public.tockify.com/browser/embed.js"></script>


{!! $calendar->script() !!} --}}


@endsection