@extends('master')

@section('title')
About Us | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">About Us</h1>
</div>
<div class="bg-primary-8">
    <div class="container mx-auto">
        <div class="px-12 py-12">
            <p class="leading-loose text-neutral-2 text-center mx-auto sm:w-90p md:w-80p lg:w-50p leading-loose text-2xl">St. Anne's City Farm is a community space that is open 5 days a week and is free for everyone. So come get involved or come spend time at a beautiful city sanctuary. </p>
            {{-- <div class="text-center text-neutral-2 pt-2">
                    <object data="/images/divider.svg" type="image/svg+xml" class="w-24 h-auto fill-current"></object>
            </div> --}}
        </div> 
    </div>
</div>
<div class="bg-neutral-3">
    <div class="container mx-auto py-4 md:py-6">
        <h3 class="text-xl sm:text-2xl leading-normal text-center text-primary-8" >St. Anne's City Farm is a sustainable farm that promotes education and multiculturalism.</h3>
    </div>
    <div>
        <div class="container mx-auto">
            <div class="text-center">
                <object data="/images/divider.svg" type="image/svg+xml" class="w-16 md:w-24 h-auto"></object>
            </div>
        </div>
    </div>
</div>
<div class="bg-neutral-3">
    <div class="container mx-auto py-2 md:py-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3">
                <div class="px-4 py-4 my-2 md:my-0 bg-primary-8 rounded flex items-center justify-center">
                    <img src="/images/about1.jpg" class="shadow-lg rounded w-40r h-auto object-cover" alt="">
                </div>
            </div>
            <div class="w-full md:w-2/3 flex justify-center items-center">
                <div class="flex flex-col items-center justify-center">
                    <p class="px-10 xl:px-20 text-lg text-grey-darkest leading-normal py-2">Run by volunteers set within the boundaries of a busy city park, 'St. Anne's City Farm' is home to 2 Pigs, 9 Chickens, 3 Goats, a Guinea Pig, and Moses the Pony. </p>

                    <p class="px-10 xl:px-20 text-lg text-grey-darkest leading-normal py-2"> It is also the site of raised beds, a herb garden, and a wooden cabin. They promote holistic education with a program that includes mindfulness, animal therapy and nurturing the whole child - helping children to connect with nature.</p>            
                </div>
            </div>
        </div>

    </div>
</div>
<div class="bg-neutral-3">
    <div class="container mx-auto py-2 md:py-8">
        <div class="flex flex-wrap-reverse">
            <div class="w-full md:w-2/3 flex justify-center items-center">
                <div class="flex flex-col items-center justify-center">
                    <p class="px-10 xl:px-20 text-lg text-grey-darkest leading-normal py-2"> As they develop further, they will serve healthy food and drink onsite, expand their educational program and host cultural events.</p>
                    <p class="px-10 xl:px-20 text-lg text-grey-darkest leading-normal py-2"> They also will develop their site as a showcase for how to thrive as a farm off the grid, using renewable energy sources and water conserving technologies.</p>            
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <div class="px-4 py-4 my-2 md:my-0 bg-primary-8 rounded flex items-center justify-center">
                    <img src="/images/about2.jpg" class="shadow-lg rounded w-40r h-auto object-cover" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-neutral-3">
    <div class="container mx-auto py-2 md:py-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3">
                <div class="px-4 py-4 my-2 md:my-0 bg-primary-8 rounded flex items-center justify-center">
                    <img src="/images/park2.jpg" class="shadow-lg rounded shadow-lg rounded w-40r h-auto object-cover" alt="">
                </div>
            </div>
            <div class="w-full md:w-2/3 flex justify-center items-center">
                <div class="flex flex-col items-center justify-center">
                    <p class="px-10 xl:px-20 text-lg text-grey-darkest leading-normal py-2">Run by volunteers set within the boundaries of a busy city park, 'St. Anne's City Farm' is home to 2 Pigs, 9 Chickens, 3 Goats, a Guinea Pig, and Moses the Pony. </p>

                    <p class="px-10 xl:px-20 text-lg text-grey-darkest leading-normal py-2"> It is also the site of raised beds, a herb garden, and a wooden cabin. They promote holistic education with a program that includes mindfulness, animal therapy and nurturing the whole child - helping children to connect with nature.</p>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection