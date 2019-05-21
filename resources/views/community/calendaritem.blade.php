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
        <div class="w-80p flex justify-center">
            <div class="w-90p flex flex-col justify-center py-2 border-2 border-primary-8 bg-grey-lightest">
                <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">{{$event->title}}</h3>
                <img src="{{$event->img}}" class="h-48 w-full object-cover" alt="">  
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">{{$event->headline}}</h5>
                <p class="leading-normal py-2 px-1">{!! $event->content !!}</p>
                <div>
                <a href="{{route('calendar')}}">Back to News</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection

@section('scripts')
@parent
@endsection