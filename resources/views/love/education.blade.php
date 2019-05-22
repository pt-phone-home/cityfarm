@extends('master')

@section('title')
 Education | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Education</h1>
</div>
<div class="bg-primary-8">
    <div class="container mx-auto">
        <div class="px-12 py-12">
            <p class="leading-loose text-neutral-2 text-center mx-auto sm:w-90p md:w-80p lg:w-50p leading-loose text-2xl">Education is for all ages at the farm. We run classes for all age groups, from herb school to animal care to forging in the raised beds and cooking what we grow, We will have classes to suit everyone.</p>
            
        </div> 
    </div>
</div>
<div class="bg-pattern-grey-light">
    <div class="container mx-auto py-6 px-4">
        <h3 class="text-xl leading-normal text-center text-grey-darkest" >We have one day a week dedicated to schools, groups, and clubs, we aim to educate wherever possible. The benefits of learning outside the classroom are well documented and widely recognised and we welcome visits from schools of all ages and abilities!</h3>
    </div>
    <div>
        <div class="container mx-auto">
            <div class="text-center">
                <object data="/images/divider.svg" type="image/svg+xml" class="w-24 h-auto"></object>
            </div>
        </div>
    </div>
</div>
<div class="bg-pattern-grey-light py-4">
    <div class="container mx-auto flex justify-center">
        <div class="w-full md:w-80p flex flex-wrap bg-grey-light rounded border-2 border-primary-8 shadow-lg">
            <div class="w-full">
                <h3 class="font-dec text-primary-9 text-4xl text-center">Farm Tours</h3>
            </div>
            <div class="w-full lg:w-1/2 lg:border-r-2 border-primary-8">
                <div class="px-4 py-4 flex justify-center items-center">
                    <object data="/images/farmTour.svg" type="image/svg+xml" class="h-15r"></object>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex items-center">
                <div class="flex flex-col items-center">
                    <p class="px-6 leading-normal py-2 text-grey-darkest">One of the best ways to experience the farm is with one of our Farm Tours, a staff led guided tour around the farm. The tours usually take around one hour. If you’d like to focus on a particular topic then please let us know, if we’re able to personalise your visit to link in with studies in the classroom, we’re happy to help!</p>
                </div>
            </div>
            <div class="my-4 w-full text-center">
                <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec" id="FarmTourBtn">More info</button>
            </div>
            <div class="w-full bg-grey-lighter px-4 py-4 hidden border-t-2 border-primary-8" id="FarmTourSec">
                <p class="px-20 text-lg leading-normal py-2 text-primary-8">Each tour includes:</p>
                <ul class="list-reset">
                    <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>A Staff led tour around the farm</li>
                    <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>The chance to get up close and meet the animals</li>
                    <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>A talk about each animal with the chance to ask any question</li>
                    <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>The use of our classroom – ideal for storage, snacks and lunch</li>
                    <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Time to revisit the animals at your own leisure.</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="bg-pattern-grey-light py-4">
    <div class="container mx-auto flex justify-center">
        <div class="w-full md:w-80p flex flex-wrap bg-grey-light rounded border-2 border-primary-8 shadow-lg">
            <div class="w-full">
                <h3 class="font-dec text-primary-9 text-4xl text-center">Classes</h3>
            </div>
            <div class="w-full lg:w-1/2 border-b-2 lg:border-b-0 lg:border-r-2 border-primary-8 relative">
                <div class="px-4 py-4 flex justify-center items-center">
                    <object data="/images/miniFarmers.svg" type="image/svg+xml" class="h-15r"></object>
                </div>
                <div class="w-full bg-grey-lighter px-4 py-4 hidden absolute pin-t border-t-2 border-b-2 border-primary-8" id="ClassesEducationSec">
                    <p class="px-2 leading-normal py-2 text-grey-darkest">
                        Here at The Farm, we encourage kids to enjoy and learn from the surroundings of a real working farm. Farm Kids inspires and educates children through our programs about where food comes from and introduces them to concepts like the importance of pollination, organic farming, crops, healthy soil, composting and other ethical farming practices. Children can meet up close our beautiful pigs and be amongst our chickens whilst enjoying some of the best things in life, sunshine and fresh air. 
                    </p>
                </div>
                <div>
                    <h5 class="text-center text-lg text-primary-8">Mini Farmers</h5>
                </div>
                <div class="my-4 w-full text-center">
                    <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec" id="ClassesEducationBtn">More info</button>
                </div>
            </div>
            <div class="w-full lg:w-1/2 border-primary-8 relative">
                <div class="px-4 py-4 flex justify-center items-center">
                        <object data="/images/adultClasses.svg" type="image/svg+xml" class="h-15r"></object>
                    </div>
                    <div class="w-full flex-col bg-grey-lighter px-4 py-4 hidden absolute pin-t border-t-2 border-b-2 border-primary-8" id="ClassesEducationSec2">
                        <p class="px-2 leading-normal py-2 text-grey-darkest">
                                Itching to expand your self-sufficiency skills and meet some like-minded people at the same time? Sign up for one of our farm workshops. The varied workshops teach skills for down-to-earth living. Their mission is to help folks cultivate communities that are active, knowledgeable and motivated to create the futures they need.
                        </p>
                        <p class="px-2 leading-normal py-2 text-grey-darkest">
                                We hold a range of workshops covering ethical farming, herbalism,  permaculture design, organic growing, natural building and more.
                        </p>
                    </div>
                    <div>
                        <h5 class="text-center text-lg text-primary-8">Adults</h5>
                    </div>
                    <div class="my-4 w-full text-center">
                        <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec" id="ClassesEducationBtn2">More info</button>
                    </div>
            </div>
            
            
        </div>
    </div>

</div>
{{-- <div class="bg-pattern-grey-light">
    <div class="container mx-auto py-4">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 flex items-center justify-center">
                <div class="px-4 py-4 flex justify-center items-center">
                    <object data="/images/farmTour.svg" type="image/svg+xml" class="h-10r md:h-10r lg:h-15r xl:h-20r"></object>
                </div>
            </div>
            <div class="w-full md:w-2/3 flex justify-center items-center">
                <div class="flex flex-col items-center justify-center">
                    <h3 class="font-dec text-primary-9 text-4xl">Farm Tours</h3>
                    <p class="px-20 text-lg leading-normal py-2 text-grey-darkest">One of the best ways to experience the farm is with one of our Farm Tours, a staff led guided tour around the farm. The tours usually take around one hour. If you’d like to focus on a particular topic then please let us know, if we’re able to personalise your visit to link in with studies in the classroom, we’re happy to help!</p>
                    <hr class="w-50p border-b-2 border-primary-8 mt-4">         
                    <p class="px-20 text-lg leading-normal py-2 text-primary-8">Each tour includes:</p>
                    <ul class="list-reset">
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>A Staff led tour around the farm</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>The chance to get up close and meet the animals</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>A talk about each animal with the chance to ask any question</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>The use of our classroom – ideal for storage, snacks and lunch</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Time to revisit the animals at your own leisure.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div> --}}

@endsection

@section('scripts')
@parent
<script>
let farmTourBtn = document.getElementById("FarmTourBtn");
let farmTourSec = document.getElementById("FarmTourSec");

farmTourBtn.addEventListener("click", function () {
    window.getComputedStyle(farmTourSec).display === 'none' ?
        (farmTourSec.classList.add('show') (farmTourBtn.innerText = 'Less Info')): 
        (farmTourSec.classList.remove('show') (farmTourBtn.innerText = 'More Info')) ;
});

let classesEdBtn = document.getElementById("ClassesEducationBtn");
let classesEdSec = document.getElementById("ClassesEducationSec");

classesEdBtn.addEventListener("click", function () {
    window.getComputedStyle(classesEdSec).display === 'none' ?
        (classesEdSec.classList.add('rise') (classesEdBtn.innerText = 'Less Info')): 
        (classesEdSec.classList.remove('rise') (classesEdBtn.innerText = 'More Info')) ;
});
let classesEdBtn2 = document.getElementById("ClassesEducationBtn2");
let classesEdSec2 = document.getElementById("ClassesEducationSec2");

classesEdBtn2.addEventListener("click", function () {
    window.getComputedStyle(classesEdSec2).display === 'none' ?
        (classesEdSec2.classList.add('rise') (classesEdBtn2.innerText = 'Less Info')): 
        (classesEdSec2.classList.remove('rise') (classesEdBtn2.innerText = 'More Info')) ;
});
</script>
@endsection