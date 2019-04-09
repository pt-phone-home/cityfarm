@extends('master')

@section('title')
 News | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="text-grey-darkest text-6xl">Latest News</h1>
</div>

<div class="bg-grey-lightest">
    <div class="container mx-auto">
        <h2 class="text-center text-4xl py-2">News</h2>
    </div>
    @if($newsitem)
    <div class="container mx-auto flex flex-wrap justify-center">
        <div class="w-80p flex justify-center">
            <div class="w-80p flex flex-col justify-center border-2 my-4">
                <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">{{$newsitem->title}}</h3>
                <img src="/{{$newsitem->image}}" class="h-48 w-full object-cover" alt="">  
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">{{$newsitem->headline}}</h5>
                <p class="leading-normal py-2 px-1">{!! $newsitem->body !!}</p>
                <div>
                <a href="{{route('news')}}">Back to News</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection

@section('scripts')

@endsection