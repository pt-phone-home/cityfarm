@extends('master')

@section('title')
 Grow | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Grow</h1>
</div>

<div class="bg-grey-lightest">
    <div class="container mx-auto flex justify-center flex-wrap">

        <div class="w-full md:w-1/2 flex justify-center py-2 border-2 my-2">
            <div class="w-full px-4 py-4 flex flex-col items-center">
                <h2 class="bg-green text-grey-lightest text-4xl px-4 py-2 text-center w-full max-h-full">Demonstration Bed</h2>
                <div class="h-auto py-2 bg-grey px-2 py-2 w-full flex justify-center items-center">
                    <img src="/images/placeholder.png" class="w-80p h-auto object-cover" alt="">
                </div>
                <p class="leading-normal text-lg py-2 px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, odit! Minima a voluptas rerum nobis in, minus nisi? Beatae saepe, nulla cum dolorem et neque. Dignissimos, velit voluptatum. Distinctio, quaerat commodi itaque dolores perspiciatis nemo veniam eligendi saepe, numquam, ipsa doloribus maxime soluta nam voluptatibus facilis excepturi fugit aliquid quod!</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex justify-center py-2 border-2 my-2">
            <div class="w-full px-4 py-4 flex flex-col items-center ">
                <h2 class="bg-green text-grey-lightest text-4xl px-4 py-2 text-center w-full max-h-full">Pollytunnel</h2>
                <div class="h-auto py-2 bg-grey px-2 py-2 w-full flex justify-center items-center">
                    <img src="/images/pollytunnel.jpg" class="w-80p h-auto object-cover" alt="">
                </div>
                <p class="leading-normal text-lg py-2 px-4 self-start">The <strong>Pollytunel</strong> is a nursery with so much more than plants</p>
                <p class="leading-normal text-lg py-2 px-4">Overflowing with organic farm grown flowers, lush indoor plants, herbs and vegetable plants.</p>
                <p class="leading-normal text-lg py-2 px-4">Throughout the year we run a collection of seasonal workshops for kids and adults, locals and visitors. Our range covers specialty gardening and growing techniques, botanical crafts and much more.</p>
                <p class="leading-normal text-lg py-2 px-4">Our growing team is currently busy growing a variety of seasonal produce for our Community kitchen and Animals.</p>
                <p class="leading-normal text-lg py-2 px-4">We believe healthy plants begin with healthy soil. Healthy plants mean less pests and disease. We use the following techniques to keep our soil in the best of health: cover cropping with green manures, crop rotation, mulching, composting, interplanting and animal rotations.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center flex-wrap">
        <div class="w-full md:w-1/2 flex justify-center py-2 border-2 my-2">
            <div class="w-full px-4 py-4 flex flex-col items-center">
                <h2 class="bg-green text-grey-lightest text-4xl px-4 py-2 text-center w-full max-h-full">Herb Garden</h2>
                <div class="h-auto py-2 bg-grey px-2 py-2 w-full flex justify-center items-center">
                    <img src="/images/placeholder.png" class="w-80p h-auto object-cover" alt="">
                </div>
                <p class="leading-normal text-lg py-2 px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, odit! Minima a voluptas rerum nobis in, minus nisi? Beatae saepe, nulla cum dolorem et neque. Dignissimos, velit voluptatum. Distinctio, quaerat commodi itaque dolores perspiciatis nemo veniam eligendi saepe, numquam, ipsa doloribus maxime soluta nam voluptatibus facilis excepturi fugit aliquid quod!</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex justify-center py-2 border-2 my-2">
            <div class="w-full px-4 py-4 flex flex-col items-center">
                <h2 class="bg-green text-grey-lightest text-4xl px-4 py-2 text-center w-full max-h-full">Animal Fodder</h2>
                <div class="h-auto py-2 bg-grey px-2 py-2 w-full flex justify-center items-center">
                    <img src="/images/fodder.jpg" class="w-80p h-auto object-cover" alt="">
                </div>
                <p class="leading-normal text-lg py-2 px-4">Our long term plan is to grow all the food for our animals on the farm. Between our raised beds, allotment and polytunnel. We have lots of lush beds of grass, kale, spinach and wild herbs that meet the needs of our Goats, chickens, pony, rabbits, and guinea pigs. We've planted the allotment full of root vegetables for our piggie girls.</p>
                <p class="leading-normal text-lg self-start py-2 px-4">If you'd like more information or advice please contact us at the farm.</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection