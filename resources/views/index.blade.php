@extends('master')

@section('title')

St. Anne's City Farm | Our Community

@endsection

@section('content')

{{-- Hero Section --}}

<div class="hero flex flex-col w-full h-20r md:h-30r lg:h-40r justify-center bg-fixed">

    <h1 class="font-dec text-white self-center text-4xl md:text-5xl lg:text-6xl hero-title uppercase mb-12">St. Anne's City Farm</h1>
    <h4 class="text-white self-center text-lg text-center mx-2 lg:mx-0 md:text-xl lg:text-2xl my-4 hero-subtitle">Promoting ecological awareness and sustainable living. Teaching ethics on every level.
    </h4>


</div>

{{-- Intro Quote --}}
<div class="bg-grey-lightest bgi-g2">
    <div class="container mx-auto pb-8">
        <h3 class="text-center text-neutral-10 font-normal mx-auto w-full md:-70p lg:w-50p py-24 leading-loose text-lg md:text-xl lg:text-2xl sm:px-6 md:px-0">St. Anne's City Farm is a community space that is open 5 days a week and is free for everyone. So come get involved or come spend time at a beautiful city sanctuary.  

            <div class="text-center pt-4 lg:pt-0">
                    <object data="/images/divider.svg" type="image/svg+xml" class="w-12 md:w-16 lg:w-24 h-auto"></object>
            </div>
        </h3>
        
    </div>


</div>

{{-- About Us Banner --}}

{{-- <div class="story-title bg-grey-light about h-20r bg-fixed flex justify-center items-center" id="about_us">
    <h2 class="py-3 text-grey-lightest text-6xl pt-4 pb-2 uppercase">About Us</h2>
</div> --}}

{{-- About Us Content --}}

<div class="w-full flex justify-center bgi-farm z-30">
    <div class="container mx-auto w-90p md:w-80p lg:w-60p xl:w-40p bg-grey flex flex-col px-12 py-12 my-8 leading-loose -mt-16 text-sm md:text-base lg:text-lg xl:text-xl bgi-g4 shadow-lg z-30">
        <h3 class="font-dec text-base md:text-lg lg:text-2xl xl:text-4xl underline text-center uppercase">Our Story</h3>
        <p class="text-sm md:text-base lg:text-lg">The Dublin City Farm Project is small-scale, non-profit, traditional farm set in the urban park surroundings of St Anne’s Park. The Dublin City Farm aims to function as a center for knowledge, for teaching and for interaction between people, plants, animals and ecology. The Farm has its roots set firmly in the past with the use of traditional breeds of farm animals and old native seeds. The future of the farm extends beyond the confines of the Park to the local communities providing access to structural learning and modern environmentally sustainable practices.</p>
    </div>
</div>
<div class="bgi-layer -mt-20">
    <div class="container mx-auto pt-24 flex"> 
        <h2 class="font-dec text-lg md:text-3xl lg:text-5xl ml-4 md:ml-0 mb-4 border-b-8 border-p-darkest text-grey-darkest">How the Farm Works</h2>
    </div>
    <div class="container mx-auto flex flex-wrap justify-center py-6">
        <div class="w-full md:w-1/3  px-2 py-2">
            <div class="flex flex-col items-center justify-center">
                <div class="bg-grey w-full py-4">
                    <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Wednesday</h5>
                </div>
                <div class="h-7r md:h-7r lg:h-10r xl:h-15r w-full md:pb-0"><img src="/images/wed.jpg" alt="" class="w-full h-full object-cover "></div>
                <div class="w-full bg-grey-darkest px-4 py-4">
                    <p class="text-grey-lightest text-sm xl:text-base py-1">Wednesday is for groups, schools and is our Sensory Friendly day</p>
                    <p class="text-grey-lightest text-sm xl:text-base py-1">If you would like to book please email dublincityfarm@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3  px-2 py-2">
            <div class="flex flex-col items-center justify-center">
                <div class="bg-grey w-full py-4">
                    <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Thursday</h5>
                </div>
                <div class="h-7r md:h-7r lg:h-10r xl:h-15r w-full md:pb-0"><img src="/images/thursday.jpg" alt="" class="w-full h-full object-cover "></div>
                <div class="w-full bg-grey-darkest px-4 py-4">
                    <p class="text-grey-lightest  text-sm xl:text-base py-1">Thursday, the farm is open from 9:30am - 3pm</p>
                    <p class="text-grey-lightest  text-sm xl:text-base py-1">No booking necessary</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3  px-2 py-2">
            <div class="flex flex-col items-center justify-center">
                <div class="bg-grey w-full py-4">
                    <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Friday</h5>
                </div>
                <div class="h-7r md:h-7r lg:h-10r xl:h-15r w-full md:pb-0"><img src="/images/friday.jpg" alt="" class="w-full h-full object-cover "></div>
                <div class="w-full bg-grey-darkest px-4 py-4">
                    <p class="text-grey-lightest text-sm xl:text-base py-1">Friday, the farm is open from 1pm - 4pm</p>
                    <p class="text-grey-lightest text-sm xl:text-base py-1">No booking necessary</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-40p  px-2 py-2">
            <div class="flex flex-col items-center justify-center">
                <div class="bg-grey w-full py-4">
                    <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Saturday - New Volunteers Day</h5>
                </div>
                <div class="h-7r md:h-7r lg:h-10r xl:h-15r w-full md:pb-0"><img src="/images/saturday.jpg" alt="" class="w-full h-full object-cover "></div>
                <div class="w-full bg-grey-darkest px-4 py-4">
                    <p class="text-grey-lightest text-sm xl:text-base py-1">We ask that all volunteers arrive onsite by 10:30am as we close the gates to focus on the jobs at hand. This is our day to get involved and actually work on the farm, from mucking out stables to digging up beds and doing maintenance tasks onsite. There are jobs for everyone. This is our family-friendly volunteer day. </p>
                    <hr class="border border-grey-lightest">
                    <ul class="list-reset text-grey-lightest text-sm xl:text-base">
                        <li class="py-1">10am - Gates open - Sign in </li>
                        <li class="py-1">10:30am - Gates Close - Briefing on the jobs for the day. Marion will then assign everyone to an area and team.</li>
                        <li class="py-1">12pm - Finish our volunteering jobs, head to the community kitchen for tea, treats, and chats.</li>
                    </ul>
                    <p class="text-grey-lightest text-xs xl:text-sm py-1"> *Please come dressed in clothes and shoes you can work in. No open shoes, no football boots. Wear only things you are happy to get muddy in. </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-40p  px-2 py-2">
            <div class="flex flex-col items-center justify-center">
                <div class="bg-grey w-full py-4">
                    <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Sunday - Family Day</h5>
                </div>
                <div class="h-7r md:h-7r lg:h-10r xl:h-15r w-full md:pb-0"><img src="/images/sunday.jpg" alt="" class="w-full h-full object-cover "></div>
                <div class="w-full bg-grey-darkest px-4 py-4">
                    <p class="text-grey-lightest text-sm xl:text-base py-1">Sunday is our Family Day</p>
                    <p class="text-grey-lightest text-sm xl:text-base py-1">St. Anne's City Farm is open free to the public but you <span class="underline">must book tickets</span></p>
                    <p class="text-grey-lightest text-sm xl:text-base py-1">We have a: </p>
                    <p class="text-grey-lightest text-sm xl:text-base py-1"><strong>Morning slot</strong> from 10am - 12pm</p>
                    <p class="text-grey-lightest text-sm xl:text-base py-1"><strong>Afternoon slot</strong> from 1pm - 2.30pm</p>
                    <p class="text-grey-lightest text-sm xl:text-base py-2 border border-grey-lightest mt-2 text-center"><a href="https://www.eventbrite.ie/e/st-annes-city-farm-family-day-sundays-tickets-61049609024?aff=ebdssbdestsearch" class="no-underline text-grey-lightest uppercase hover:text-grey" target="_blank">book now</a></p>

                    
                </div>
            </div>
        </div>
        
          
    </div>
</div>

{{-- <div class="w-full -mt-20 z-0" >
    <div class="w-full py-4 lg:py-8 bgi-layer z-0">
        <div class="container mx-auto pt-16 flex">
            <h2 class="font-dec text-lg md:text-3xl lg:text-5xl ml-4 md:ml-0 border-b-8 border-p-darkest text-grey-darkest">Our Objectives</h2>
        </div>
        <div class="container mx-auto py-6 md:py-12 flex flex-row flex-wrap">
            <div class="w-full lg:w-1/2 bg-primary-5 rounded-full flex justify-center items-center flex-no-shrink">
                <object data="/images/family2.svg" type="image/svg+xml" class="h-10r md:h-15r lg:h-15r xl:h-20r w-80p"></object>
            </div>
            <div class="lg:w-45p bgi-g2 flex flex-col items-center px-2 py-4 md:px-4 md:py-6 lg:ml-6 mt-4 lg:mt-0 shadow-lg"> 
                <ul class="list-reset">
                    <li class="py-1 px-1 md:py-2 md:px-4 leading-normal text-sm md:text-base lg:text-lg">To involve and educate the young people in the Dublin urban area with the necessary skills to manage a farm or small area of land for growing food and raising animals organically.</li>
                    <li class="py-1 px-1 md:py-2 md:px-4 leading-normal text-sm md:text-base lg:text-lg">To provide training to the surrounding community so as to enrich their own personal space with sustainable food and environmental practices.</li>
                    <li class="py-1 px-1 md:py-2 md:px-4 leading-normal text-sm md:text-base lg:text-lg">To be a platform where local community groups and organisations can find a common ground and collaborate together.</li>
                    <li class="py-1 px-1 md:py-2 md:px-4 leading-normal text-sm md:text-base lg:text-lg">To inspire a transition within the Dublin region from intensely chemically grown food to locally sourced organic vegetables and fruit.</li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}

{{-- What's On Banner --}}
{{-- <div class="h-15r bgi-p flex justify-center items-center">
    <h2 class="my-3 text-grey-darkest text-6xl pt-4 pb-2 px-4 uppercase bg-grey-light">What's On</h2>
</div> --}}

{{-- What's On Title --}}
{{-- <div class="w-full bg-grey-light">
    <div class="container mx-auto flex justify-center items-center">
        <h2 class="text-6xl py-12">What's On</h2>
    </div>
</div> --}}

{{-- What's On Content --}}

<div class="w-full bg-grey-light bgi-g2">
        <div class="container mx-auto flex">
                <h2 class="font-dec text-lg md:text-3xl lg:text-5xl ml-4 md:ml-0 pt-16 mb-4 border-b-8 border-p-darkest text-grey-darkest">What's On</h2>
            </div>

    <div class="container mx-auto flex flex-row justify-center flex-wrap pb-6">

        <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center px-4 py-6 border-2 border-grey-lighter">
            <object data="/images/classes.svg" type="image/svg+xml" class="h-10r md:h-10r lg:h-15r xl:h-20r w-80p pb-2 md:pb-0"></object>
            {{-- <img src="/images/classes.jpeg" alt="" class="w-full h-20r object-cover"> --}}
            <div class="bg-grey w-full py-4">
                <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Classes</h5>
            </div>
            <div class="w-full bg-grey-darkest px-4 py-4">
                <p class="text-grey-lightest text-center text-sm xl:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ex optio. Eum officia soluta voluptatem!</p>
            </div>
            <div class="w-full bg-green text-grey-lightest text-center py-4">
            <a href="{{route('classes')}}" class="text-center no-underline">Read More</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center px-4 py-6 border-2 border-grey-lighter" id="kitchen">
            {{-- <img src="/images/whatson.jpg" alt="" class="w-full h-20r object-cover"> --}}
            <object data="/images/cooking.svg" type="image/svg+xml" class="h-10r md:h-10r lg:h-15r xl:h-20r w-80p pb-2 md:pb-0"></object>
            <div class="bg-grey w-full py-4">
                <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Community Kitchen</h5>
            </div>
            <div class="w-full bg-grey-darkest px-4 py-4">
                <p class="text-grey-lightest text-center text-sm xl:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ex optio. Eum officia soluta voluptatem!</p>
            </div>
            <div class="w-full bg-green text-grey-lightest text-center py-4">
            <a href="{{route('kitchen')}}" class="text-center no-underline">Read More</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col justify-center items-center px-4 py-6 border-2 border-grey-lighter" id="calendar">
            {{-- <img src="/images/calendar.jpg" alt="" class="w-full h-20r object-cover"> --}}
            <object data="/images/calendar.svg" type="image/svg+xml" class="h-10r md:h-10r lg:h-15r xl:h-20r w-80p pb-2 md:pb-0"></object>
            <div class="bg-grey w-full py-4">
                <h5 class="font-dec text-center text-lg md:text-xl xl:text-3xl">Farm Calendar</h5>
            </div>
            <div class="w-full bg-grey-darkest px-4 py-4">
                <p class="text-grey-lightest text-center text-sm xl:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ex optio. Eum officia soluta voluptatem!</p>
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