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

        <div class="w-full lg:w-1/2 py-2 flex justify-center">
            <div class="w-90p px-2 py-2 flex flex-col items-center border-2 border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="bg-primary-8 text-grey-lightest rounded font-dec text-5xl px-4 py-2 w-full max-h-full">Demonstration Bed</h2>
                <div class="h-auto py-2 px-2  w-full flex justify-center items-center">
                    <img src="/images/placeholder.png" class="w-80p h-auto object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, odit! Minima a voluptas rerum nobis in, minus nisi? Beatae saepe, nulla cum dolorem et neque. Dignissimos, velit voluptatum. Distinctio, quaerat commodi itaque dolores perspiciatis nemo veniam eligendi saepe, numquam, ipsa doloribus maxime soluta nam voluptatibus facilis excepturi fugit aliquid quod!</p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 py-2 flex justify-center">
            <div class="w-90p px-2 py-2 flex flex-col items-center border-2 border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="text-grey-lightest bg-primary-8 rounded text-center font-dec text-5xl px-4 py-2 w-full max-h-full">Pollytunnel</h2>
                <div class="h-auto py-2 px-2 w-full flex justify-center items-center">
                    <img src="/images/pollytunnel.jpg" class="w-80p h-auto object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn2">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem2">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2 self-start">The <strong>Pollytunel</strong> is a nursery with so much more than plants</p>
                    <p class="leading-normal py-1 px-2">Overflowing with organic farm grown flowers, lush indoor plants, herbs and vegetable plants.</p>
                    <p class="leading-normal py-1 px-2">Throughout the year we run a collection of seasonal workshops for kids and adults, locals and visitors. Our range covers specialty gardening and growing techniques, botanical crafts and much more.</p>
                    <p class="leading-normal py-1 px-2">Our growing team is currently busy growing a variety of seasonal produce for our Community kitchen and Animals.</p>
                    <p class="leading-normal py-1 px-2">We believe healthy plants begin with healthy soil. Healthy plants mean less pests and disease. We use the following techniques to keep our soil in the best of health: cover cropping with green manures, crop rotation, mulching, composting, interplanting and animal rotations.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center flex-wrap">
        <div class="w-full lg:w-1/2 py-2 flex justify-center">
            <div class="w-90p px-2 py-2 flex flex-col items-center border-2 border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="bg-primary-8 text-grey-lightest font-dec text-5xl px-4 py-2  w-full max-h-full">Herb Garden</h2>
                <div class="h-auto py-2 px-2 w-full flex justify-center items-center">
                    <img src="/images/pollytunnel.jpg" class="w-80p h-auto object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn3">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem3">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2 self-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci eum, ab itaque ut optio iure et delectus! Cumque, molestiae voluptatibus?</p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 py-2 flex justify-center">
            <div class="w-90p px-4 py-4 flex flex-col items-center border-2 border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="bg-primary-8 text-grey-lightest font-dec text-5xl px-4 py-2 w-full max-h-full">Animal Fodder</h2>
                <div class="h-auto py-2 px-2  w-full flex justify-center items-center">
                    <img src="/images/fodder.jpg" class="w-80p h-auto object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn4">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem4">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2 self-start">Our long term plan is to grow all the food for our animals on the farm. Between our raised beds, allotment and polytunnel. We have lots of lush beds of grass, kale, spinach and wild herbs that meet the needs of our Goats, chickens, pony, rabbits, and guinea pigs. We've planted the allotment full of root vegetables for our piggie girls.</p>
                    <p class="leading-normal py-1 px-2 self-start">If you'd like more information or advice please contact us at the farm.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent

<script>
let growBtn = document.getElementById("GrowBtn");
let growItem = document.getElementById("GrowItem");

growBtn.addEventListener("click", function () {
    window.getComputedStyle(growItem).display === 'none' ?
        (growItem.classList.add('show')) (growBtn.innerText = 'Less') : 
        (growItem.classList.remove('show')) (growBtn.innerText = 'More') ;
    
})
let growBtn2 = document.getElementById("GrowBtn2");
let growItem2 = document.getElementById("GrowItem2");

growBtn2.addEventListener("click", function () {
    window.getComputedStyle(growItem2).display === 'none' ?
        (growItem2.classList.add('show')) (growBtn2.innerText = 'Less') : 
        (growItem2.classList.remove('show')) (growBtn2.innerText = 'More') ;
    
})
let growBtn3 = document.getElementById("GrowBtn3");
let growItem3 = document.getElementById("GrowItem3");

growBtn3.addEventListener("click", function () {
    window.getComputedStyle(growItem3).display === 'none' ?
        (growItem3.classList.add('show')) (growBtn3.innerText = 'Less') : 
        (growItem3.classList.remove('show')) (growBtn3.innerText = 'More') ;
    
})
let growBtn4 = document.getElementById("GrowBtn4");
let growItem4 = document.getElementById("GrowItem4");

growBtn4.addEventListener("click", function () {
    window.getComputedStyle(growItem4).display === 'none' ?
        (growItem4.classList.add('show')) (growBtn4.innerText = 'Less') : 
        (growItem4.classList.remove('show')) (growBtn4.innerText = 'More') ;
    
})
</script>

@endsection