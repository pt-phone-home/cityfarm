@extends('adminmaster')

@section('title')
 Admin | St. Anne's City Farm
@endsection

@section('content')

<div class="bg-grey-lightest">
    <div class="container mx-auto flex flex-wrap justify-around py-8">
        <div class="w-full md:w-40p">
            <h2 class="text-center">News</h2>
            <div>
            <a href="{{route('news.create')}}">Create News Item</a>
            </div>
        </div>

        <div class="w-full md:w-40p">
            <h2 class="text-center">Events</h2>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection