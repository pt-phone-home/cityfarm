@extends('master')

@section('title')
 Events | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="text-grey-darkest text-6xl">Events</h1>
</div>

<div class="bg-pattern-grey-lightest">
    @if($event)
    <div class="container mx-auto flex flex-wrap justify-center py-4">
        <div class="w-80p flex justify-center px-2 py-2 border-2 border-primary-8 bg-grey-lightest">
            <div class="w-80p flex flex-col justify-center my-4">
                <h3 class="bg-grey-lightest text-primary-8 text-3xl text-center py-2">{{$event->title}}</h3>
                <img src="/{{$event->img}}" class="h-48 w-full object-cover" alt="">  
                <h5 class="bg-grey-lightest text-grey-darkest py-2 text-xl">{{$event->headline}}</h5>
                <div class="flex flex-wrap py-2 text-grey-darkest">
                    <div class="w-full sm:w-1/3"><p class="text-sm"><i class="far fa-clock"></i> From: {{$event->time_from}}</p></div> <div class="w-full sm:w-1/3"><p class="text-sm"> <i class="far fa-clock"></i> To: {{$event->time_to}}</p></div><div class="w-full sm:w-1/3"><p class="text-sm"><i class="far fa-calendar-alt"></i> {{Carbon::parse($event->date)->format('d-M-Y')}}</p></div>
                </div>
                <hr class="border-2 border-grey-darkest w-full my-4">
                <div class="output leading-normal py-2 px-1 text-grey-darkest">{!!$event->content!!}</div>
                <hr class="border-2 border-grey-darkest w-full my-4">
                <div>
                <p class="text-grey-darkest">Click <a href="{{$event->link}}" target="_blank" class="no-underline text-primary-8 hover:text-grey-darkest">here</a> for more information</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="flex justify-center py-4">
        <a href="{{route('calendar')}}" class="bg-primary-8 text-grey-lightest px-4 py-2 rounded border-2 border-primary-8 no-underline hover:text-primary-8 hover:bg-grey-lightest">Back to Calendar</a>
    </div>
    @endif
</div>

@endsection

@section('scripts')
@parent
@endsection