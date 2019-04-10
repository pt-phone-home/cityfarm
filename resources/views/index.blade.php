@extends('master')

@section('title')

St. Anne's City Farm | Our Community

@endsection

@section('content')

{{-- Hero Section --}}

<div class="hero flex flex-col w-full h-30r md:h-40r justify-center bg-fixed">

    <h1 class="text-white self-center text-4xl md:text-6xl hero-title uppercase mb-12">St. Anne's City Farm</h1>
    <h4 class="text-white self-center text-2xl text-center mx-2 lg:mx-0 md:text-3xl my-4 hero-subtitle">Promoting ecological awareness and sustainable living. Teaching ethics on every level.
    </h4>


</div>

{{-- Intro Quote --}}
<div class="bg-grey-lightest bgi-g2">
    <div class="container mx-auto">
        <h3 class="text-center mx-auto w-50p py-24 leading-loose text-2xl">St. Anne's City Farm is a community space that is open 5 days a week and is free for everyone. So come get involved or come spend time at a beautiful city sanctuary.  </h3>
    </div>
</div>

{{-- About Us Banner --}}

<div class="story-title bg-grey-light about h-20r bg-fixed flex justify-center items-center" id="about_us">
    <h2 class="py-3 text-grey-lightest text-6xl pt-4 pb-2 uppercase">About Us</h2>
</div>

{{-- About Us Content --}}

<div class="w-full flex justify-center bg-grey-light">
    <div class="container mx-auto w-80p lg:w-40p bg-grey flex flex-col px-12 py-12 my-8 leading-loose -mt-16 text-xl bgi-g4 shadow-lg z-20">
        <h3 class="text-4xl underline text-center uppercase">Our Story</h3>
        <p>The Dublin City Farm Project is small-scale, non-profit, traditional farm set in the urban park surroundings of St Anne’s Park. The Dublin City Farm aims to function as a center for knowledge, for teaching and for interaction between people, plants, animals and ecology. The Farm has its roots set firmly in the past with the use of traditional breeds of farm animals and old native seeds. The future of the farm extends beyond the confines of the Park to the local communities providing access to structural learning and modern environmentally sustainable practices.</p>
    </div>
</div>

<div class="w-full -mt-20 z-0" >
    <div class="w-full aboutusinfo bg-fixed py-8">
        <div class="container mx-auto py-24 flex flex-row flex-wrap">
            <div class="w-full lg:w-1/2 bg-green-light-opacity-6">
                <img src="/images/story.jpg" alt="" class="w-full h-full px-6 py-6">
            </div>
            <div class=" lg:w-45p bgi-g2 flex flex-col items-center px-6 py-6 lg:ml-8 mt-4 lg:mt-0"> 
                    <h3 class="text-4xl underline text-center uppercase">Our Objectives</h3>
                <ul>
                    <li class="py-2 leading-normal text-lg">To involve and educate the young people in the Dublin urban area with the necessary skills to manage a farm or small area of land for growing food and raising animals organically.</li>
                    <li class="py-2 leading-normal text-lg">To provide training to the surrounding community so as to enrich their own personal space with sustainable food and environmental practices.</li>
                    <li class="py-2 leading-normal text-lg">To be a platform where local community groups and organisations can find a common ground and collaborate together.</li>
                    <li class="py-2 leading-normal text-lg">To inspire a transition within the Dublin region from intensely chemically grown food to locally sourced organic vegetables and fruit.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- What's On Banner --}}
{{-- <div class="h-15r bgi-p flex justify-center items-center">
    <h2 class="my-3 text-grey-darkest text-6xl pt-4 pb-2 px-4 uppercase bg-grey-light">What's On</h2>
</div> --}}

{{-- What's On Title --}}
<div class="w-full bg-grey-light">
    <div class="container mx-auto flex justify-center items-center">
        <h2 class="text-6xl py-12">What's On</h2>
    </div>
</div>

{{-- What's On Content --}}

<div class="w-full bg-grey-light bgi-layer">

    <div class="container mx-auto flex flex-row justify-center flex-wrap pb-6">

        <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center px-4 py-6 ">
            <img src="/images/classes.jpeg" alt="" class="w-full h-20r object-cover">
            <div class="bg-grey w-full py-4">
                <h5 class="text-center text-3xl">Classes</h5>
            </div>
            <div class="w-full bg-grey-darkest px-4 py-4">
                <p class="text-grey-lightest text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ex optio. Eum officia soluta voluptatem!</p>
            </div>
            <div class="w-full bg-green text-grey-lightest text-center py-4">
            <a href="{{route('classes')}}" class="text-center no-underline">Read More</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center px-4 py-6" id="kitchen">
            <img src="/images/whatson.jpg" alt="" class="w-full h-20r object-cover">
            <div class="bg-grey w-full py-4">
                <h5 class="text-center text-3xl">Community Kitchen</h5>
            </div>
            <div class="w-full bg-grey-darkest px-4 py-4">
                <p class="text-grey-lightest text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ex optio. Eum officia soluta voluptatem!</p>
            </div>
            <div class="w-full bg-green text-grey-lightest text-center py-4">
            <a href="{{route('kitchen')}}" class="text-center no-underline">Read More</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center px-4 py-6" id="calendar">
            <img src="/images/calendar.jpg" alt="" class="w-full h-20r object-cover">
            <div class="bg-grey w-full py-4">
                <h5 class="text-center text-3xl">Farm Calendar</h5>
            </div>
            <div class="w-full bg-grey-darkest px-4 py-4">
                <p class="text-grey-lightest text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ex optio. Eum officia soluta voluptatem!</p>
            </div>
            <div class="w-full bg-green text-grey-lightest text-center py-4">
            <a href="{{route('calendar')}}" class="text-center no-underline text-grey-lightest hover:text-grey-darker">Read More</a>
            </div>
        </div>
        
    </div>

</div>

@endsection

@section('scripts')

<script>
 
</script>


@endsection