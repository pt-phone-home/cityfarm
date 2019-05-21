@extends('master')

@section('title')
 Sponsors | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Sponsors</h1>
</div>
<div class="bg-pattern-grey-lightest">
    <div class="container mx-auto flex flex-wrap py-4 ">
        <div class="w-full md:w-1/5 flex justify-center items-center py-6 md:py-1">
            <div class="px-4">
                <img src="/images/lcdcLogo.png" class="object-cover h-10r md:h-auto" alt="">
            </div>
        </div>
        <div class="w-full md:w-1/5 flex justify-center items-center py-6 md:py-1">
            <div class="px-4">
                <object data="/images/logo_googledotorg.svg" type="image/svg+xml" class="h-24 w-full"></object>
            </div>
        </div>

    </div>
</div>

@endsection

@section('scripts')
@parent

@endsection