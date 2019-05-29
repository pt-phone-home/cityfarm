@extends('master')

@section('title')
 News | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Latest News</h1>
</div>

<div class="bg-pattern-grey-lightest bg-grey-lightest">
    <div class="container mx-auto">
        <h2 class="text-5xl py-4 font-dec text-primary-8 underline">News</h2>
    </div>
    @if($news)
    <div class="container mx-auto flex flex-wrap justify-center">
        @foreach($news as $article)
        <div class="w-full lg:w-1/3 flex justify-center my-2">
            <div class="w-95p md:w-80p flex flex-col border-2 border-primary-8 bg-grey-lightest">
                <h3 class="text-primary-8 text-2xl text-center py-2">{{$article->title}}</h3>
                <div class="w-full h-10r"><img src="/{{$article->img}}" class="h-full w-full object-cover" alt=""></div>  
                <div class="flex-1">
                    <h5 class="text-grey-darkest px-1 py-4 capitalize">{{str_limit($article->headline, $limit = 50, $end = '...')}}</h5>
                </div>
                {{-- <p class="leading-normal py-2 px-1 h-full">{!! str_limit($article->body, $limit=50, $end='...')!!}</p> --}}
                <div class="flex justify-center py-2 bg-primary-8 text-grey-lightest">
                    <a href="{{route('news.newsitem', ['$id' => $article->id])}}" class="no-underline text-grey-lightest text">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>

@endsection

@section('scripts')
@parent
@endsection