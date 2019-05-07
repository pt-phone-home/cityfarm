@extends('master')

@section('title')
 Ecology | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Ecology</h1>
</div>
<div class="bg-primary-8">
   
    <div class="container mx-auto">
        <div class="px-12 py-12">
            <p class="leading-loose text-neutral-2 text-center mx-auto w-50p leading-loose text-2xl">Ecology studies the interactions between living organisms - including humans - and their physical environment (i.e. where they live and grow)</p>
            
        </div> 
    </div>
</div>
<div class="bg-neutral-3">
    <div class="container mx-auto py-6">
        <h3 class="text-xl leading-normal text-center" >The Ecology of St. Annes Park is rich with lots of different animals and plants and fabulous trees &amp; grasslands.</h3>
    </div>
    <div>
        <div class="container mx-auto">
            <div class="text-center">
                <object data="/images/divider.svg" type="image/svg+xml" class="w-32 h-auto"></object>
            </div>
        </div>
    </div>
    <div class="container mx-auto py-4">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3">
                <div class="px-4 py-4 bg-primary-6">
                    <img src="/images/park1.jpg" alt="">
                </div>
            </div>
            <div class="w-full md:w-2/3 flex justify-center items-center">
                <div class="flex flex-col items-center justify-center">
                    <p class="px-20 text-lg leading-normal py-2">St. Annes City Farm is surrounded by all this wonderful Ecology and, using our cosy cabin as a base, we will explore the Birds, Bugs, Mammals, Ponds, Wildflowers and Bees of the Park with specially designed classes for children and teens.</p>
                    <p class="px-20 text-lg leading-normal self-start py-2">Keep an eye on our website and Facebook page for more information.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="bg-neutral-2">
    <div class="container mx-auto">
        <div class="flex flex-wrap py-8">
            <div class="w-full md:w-1/4 h-64 px-2 py-2">
                <img src="/images/park2.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="w-full md:w-1/4 h-64 px-2 py-2">
                <img src="/images/park3.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="w-full md:w-1/4 h-64 px-2 py-2">
                <img src="/images/park4.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="w-full md:w-1/4 h-64 px-2 py-2">
                <img src="/images/park5.jpg" alt="" class="w-full h-full object-cover" >
            </div>
            
        </div>
    </div>
</div>



@endsection

@section('scripts')

@endsection