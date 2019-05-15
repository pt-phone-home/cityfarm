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
            <p class="leading-loose text-neutral-2 text-center mx-auto w-50p leading-loose text-2xl">Education is for all ages at the farm. We run classes for all age groups, from herb school to animal care to forging in the raised beds and cooking what we grow, We will have classes to suit everyone.</p>
            
        </div> 
    </div>
</div>
<div class="bg-neutral-3">
    <div class="container mx-auto py-6">
        <h3 class="text-xl leading-normal text-center text-grey-darkest" >We have one day a week dedicated to schools, groups, and clubs, we aim to educate wherever possible. The benefits of learning outside the classroom are well documented and widely recognised and we welcome visits from schools of all ages and abilities!</h3>
    </div>
    <div>
        <div class="container mx-auto">
            <div class="text-center">
                <object data="/images/divider.svg" type="image/svg+xml" class="w-24 h-auto"></object>
            </div>
        </div>
    </div>
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
</div>

@endsection

@section('scripts')
@parent

@endsection