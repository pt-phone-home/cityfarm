@extends('master')

@section('title')
 News | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="text-grey-darkest text-6xl font-dec">Latest News</h1>
</div>

<div class="bg-pattern-grey-lightest">
    <div class="container mx-auto">
        <h2 class="text-center text-4xl py-2 font-dec text-primary-8">Latest News</h2>
    </div>
    @if($newsitem)
    <div class="container mx-auto flex justify-center ">
        <div class="w-95p md:w-80p flex justify-center px-2 py-2 border-2 border-primary-8 bg-grey-lightest">
            <div class="w-95p md:w-80p flex flex-col justify-center my-4">
                <h3 class="text-primary-8 text-3xl text-center py-2">{{$newsitem->title}}</h3>
                <img src="/{{$newsitem->img}}" class="h-48 w-full object-cover" alt="">  
                <h5 class="text-grey-darkest py-2 mt-6 text-xl">{{$newsitem->headline}}</h5>
                <hr class="border-2 border-grey-darkest w-full">
                <div class="output leading-loose py-2 px-1 text-grey-darkest">{!! $newsitem->body !!}</div>
            </div>
            
        </div>
    </div>
    <div class="py-4 flex justify-center">
        <a href="{{route('news')}}" class="bg-primary-8 text-grey-lightest px-4 py-2 rounded border-2 border-primary-8 no-underline hover:text-primary-8 hover:bg-grey-lightest">Back to News</a>
    </div>
    @endif
</div>

@endsection

@section('scripts')
@parent
@endsection