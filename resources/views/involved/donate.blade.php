@extends('master')

@section('title')
 Donate | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Donate</h1>
</div>
<div class="bg-primary-8">
   
    <div class="container mx-auto">
        <div class="px-12 py-12">
            <p class="leading-loose text-neutral-2 text-center mx-auto sm:w-90p md:w-80p lg:w-50p leading-loose text-2xl">St. Anne's City Farm is run on a voluntary basis. Any donations you make are greatly appreciated and really make a difference to us and our animals.</p>
            {{-- <div class="text-center text-neutral-2 pt-2">
                    <object data="/images/divider.svg" type="image/svg+xml" class="w-24 h-auto fill-current"></object>
            </div> --}}
        </div> 
    </div>
</div>
<div class="bg-pattern-grey-light">
    <div class="container mx-auto py-8">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/3 px-2 py-2 flex justify-center items-center">
                <div>
                    <i class="fab fa-amazon text-primary-8 text-9xl"></i>
                </div>
            </div>

            <div class="w-full sm:w-2/3 px-2 py-2 flex justify-center items-center">
                <div class="flex flex-col items-center justify-center">
                    <p class="leading-loose tracking-wide pt-2 pb-6">We have set up an Amazon wishlist with a range of items that our animals need. Please give as generously as you can</p>
                    <a href="https://www.amazon.co.uk/hz/wishlist/ls/3IDRJ3GYP4NJR?ref_=wl_share" target="_blank "class="no-underline px-4 py-2 border-2 border-primary-8 text-grey-lightest bg-primary-8 hover:bg-grey-lightest hover:text-primary-8 uppercase rounded">Amazon Wish List</a>
                </div>
            </div>
        </div>

    </div>
    
</div>

@endsection

@section('scripts')
@parent

@endsection