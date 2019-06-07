@extends('master')

@section('title')

St. Anne's City Farm | Our Community

@endsection

@section('content')

{{-- Hero Section --}}

<div class="hero flex flex-col w-full h-20r md:h-30r lg:h-40r justify-center bg-fixed">

    <h1 class="font-dec text-white self-center text-5xl md:text-6xl hero-title uppercase mb-12">St. Anne's City Farm</h1>
    <h4 class="text-white self-center text-lg text-center mx-2 lg:mx-0 text-xl md:text-2xl my-4 hero-subtitle"> St. Anne's City Farm is a sustainable farm that promotes education and multiculturalism. 
    </h4>
    {{-- Promoting ecological awareness and sustainable living. Teaching ethics on every level. --}}

</div>

{{-- Intro Quote --}}
<div class="bg-grey-lightest bgi-g2">
    <div class="container mx-auto py-4">
        <h3 class="text-center text-neutral-10 font-normal mx-auto w-full md:-70p lg:w-50p py-24 leading-loose md:text-2xl px-6 md:px-0">St. Anne's City Farm is an educational hub that encourages people to come get involved in growing their own food and being in nature.
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
<div class="bg-pattern-grey-lightest bgi-layer2 pb-20">
    <div class="container mx-auto pt-6 flex"> 
        <h2 class="font-dec text-3xl md:text-5xl ml-4 md:ml-0 mb-4 border-b-2 md:border-b-8 border-primary-8 text-primary-8">How the Farm Works</h2>
    </div>
    <div class="container mx-auto py-4 flex justify-center">
        <div class="bg-primary-8 w-95p md:w-70p rounded text-grey-lightest px-4 py-4">
            <h3 class="font-thin leading-normal">The farm is a community space, where we encourage people to come to get involved. We strive to empower people through knowledge, growing and creating.
            </h3>
            <hr class="border border-grey-lightest w-80p">
            <p class="py-2">
                Things to know about the farm:
            </p>
            <ul class="list-reset">
                <li class="py-1 pl-4">To avoid disappointment, we are not a petting farm!</li>
                <li class="py-1 pl-4">Please check our opening hours as we change them seasonally.</li>
                <li class="py-1 pl-4">All our classes are booked through Eventbrite.</li>
                <li class="py-1 pl-4">All classes and events have to be booked. As most of them are FREE please understand that once an event is booked we will not be issuing any more tickets.</li>
                <li class="py-1 pl-4">All children must be accompanied by an adult.</li>
                <li class="py-1 pl-4">Please do not feed the animals. Please do not have food on the farm, the animals can bite and will try to take the food from your hands.</li>
                <li class="py-1 pl-4">No dogs.</li>
            </ul>
        </div>
    </div>
    <div class="container mx-auto flex flex-wrap justify-center py-6">
        <div class="w-full md:w-1/2 lg:w-1/3  mb-4 md:mb-2">
            <div class="flex flex-col items-center justify-center mx-1 px-2 py-2 border-2 border-primary-8 bg-grey-lighter shadow-lg">
                <div class="bg-grey-lighest w-full py-4">
                    <h5 class="font-dec text-center text-3xl text-primary-8">Wednesday - Group Day</h5>
                </div>
                <div class="h-15r w-full md:pb-0"><img src="/images/wed.jpg" alt="" class="w-full h-full object-cover "></div>
                <div class="my-4">
                    <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec" id="WhatsOnButton">More info</button>
                </div>
                <div class="w-full bg-grey-lighter px-4 py-4 hidden border-t-2 border-primary-8" id="WhatsOnSection">
                    <p class="text-grey-darkest text-base py-1 ">Wednesday is for groups, schools and is our Sensory Friendly day</p>
                    <p class="text-grey-darkest text-base py-1 ">If you would like to book please email dublincityfarm@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-2">
            <div class="flex flex-col items-center justify-center mx-1 px-2 py-2 border-2 border-primary-8 bg-grey-lighter shadow-lg">
                <div class="w-full py-4 bg-grey-lighter">
                    <h5 class="font-dec text-center text-3xl text-primary-8">Thursday - Open Entry</h5>
                </div>
                <div class="h-15r w-full md:pb-0"><img src="/images/thursday2.jpg" alt="" class="w-full h-full object-cover ">
                </div>
                <div class="my-4">
                    <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec" id="WhatsOnButton2">More info</button>
                </div>
                <div class="w-full bg-grey-lighter px-4 py-4 hidden border-t-2 border-primary-8" id="WhatsOnSection2">
                    <p class="text-grey-darkest text-base py-1">Thursday, the farm is open from 10am - 1pm</p>
                    <p class="text-grey-darkest text-base py-1">Come take a look at how our farm works.</p>
                    <p class="text-grey-darkest text-base py-1">No booking necessary</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-2">
            <div class="flex flex-col items-center justify-center mx-1 px-2 py-2 border-2 border-primary-8 bg-grey-lighter shadow-lg">
                <div class="bg-grey-lighter w-full py-4">
                    <h5 class="font-dec text-center text-3xl text-primary-8">Friday - Open Entry</h5>
                </div>
                <div class="h-15r w-full md:pb-0"><img src="/images/friday.jpg" alt="" class="w-full h-full object-cover ">
                </div>
                <div class="my-4">
                    <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec" id="WhatsOnButton3">More info</button>
                </div>
                <div class="w-full bg-grey-lighter px-4 py-4 hidden border-t-2 border-primary-8" id="WhatsOnSection3">
                    <p class="text-grey-darkest text-base py-1">Friday, the farm is open from 10am - 1pm</p>
                    <p class="text-grey-darkest text-base py-1">Come take a look at how our farm works.</p>
                    <p class="text-grey-darkest text-base py-1">No booking necessary</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-40p  px-2 py-2 mb-4 md:mb-2">
            <div class="flex flex-col items-center justify-center mx-1 px-2 py-2 border-2 border-primary-8 bg-grey-lighter shadow-lg">
                <div class="bg-grey-lighter w-full py-4">
                    <h5 class="font-dec text-center text-3xl text-primary-8">Saturday - New Volunteers Day</h5>
                </div>
                <div class="h-15r w-full md:pb-0"><img src="/images/saturday.jpg" alt="" class="w-full h-full object-cover ">
                </div>
                <div class="my-4">
                    <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec"  id="WhatsOnButton4">More info</button>
                </div>
                <div class="w-full bg-grey-lighter px-4 py-4 hidden border-t-2 border-primary-8" id="WhatsOnSection4">
                    <p class="text-grey-darkest text-base py-1">We ask that all volunteers arrive onsite by 10:30am as we close the gates to focus on the jobs at hand. This is our day to get involved and actually work on the farm, from mucking out stables to digging up beds and doing maintenance tasks onsite. There are jobs for everyone. This is our family-friendly volunteer day. </p>
                    <hr class="border border-dashed border-grey-darkest">
                    <ul class="list-reset text-grey-darkest text-base">
                        <li class="py-1">10am - Gates open - Sign in </li>
                        <li class="py-1">10:30am - Gates Close - Briefing on the jobs for the day. Marion will then assign everyone to an area and team.</li>
                        <li class="py-1">12pm - Finish our volunteering jobs, head to the community kitchen for tea, treats, and chats.</li>
                    </ul>
                    <p class="text-grey-darkest text-sm py-1"> *Please come dressed in clothes and shoes you can work in. No open shoes, no football boots. Wear only things you are happy to get muddy in. </p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-40p  px-2 py-2 mb-4 md:mb-2">
            <div class="flex flex-col items-center justify-center mx-1 px-2 py-2 border-2 border-primary-8 bg-grey-lighter shadow-lg">
                <div class="bg-grey-lighter w-full py-4">
                    <h5 class="font-dec text-center text-3xl text-primary-8">Sunday - Family Day</h5>
                </div>
                <div class="h-15r w-full md:pb-0"><img src="/images/sunday.jpg" alt="" class="w-full h-full object-cover ">
                </div>
                <div class="my-4">
                    <button class="border-2 border-primary-8 bg-primary-8 text-grey-lightest hover:text-primary-8 hover:bg-grey-lightest active:bg-primary-8 active:text-grey-lightest text-lg focus:outline-none py-1 px-2 rounded font-dec" id="WhatsOnButton5">More info</button>
                </div>
                <div class="w-full bg-grey-lighter px-4 py-4 hidden border-t-2 border-primary-8 " id="WhatsOnSection5">
                    <p class="text-grey-darkest text-base py-1">Sunday is our Family Day</p>
                    <p class="text-grey-darkest text-base py-1">The farm is open from 10am - 1pm</p>
                    <p class="text-grey-darkest text-base py-1">St. Anne's City Farm is open free to the public but you <span class="underline">must book tickets</span></p>
                    <p class="text-grey-darkest text-base py-2 border border-grey-darkest mt-2 text-center"><a href="https://www.eventbrite.ie/e/st-annes-city-farm-family-day-sundays-tickets-61049620057?aff=erellivmlt" class="no-underline text-grey-darkest uppercase hover:text-grey-dark" target="_blank">book now</a></p>

                    
                </div>
            </div>
        </div>
        
          
    </div>
</div>
<div class="w-full flex justify-center bgi-farm z-30">
    <div class="container mx-auto w-90p md:w-80p lg:w-60p bg-grey flex flex-col px-12 py-12 my-8 leading-loose -mt-16 -mb-16  bgi-g4 shadow-lg z-30">
        <h3 class="font-dec text-4xl underline text-center uppercase">Our Story</h3>
        {{-- <p class="text-base md:text-lg">The Dublin City Farm Project is small-scale, non-profit, traditional farm set in the urban park surroundings of St Anne’s Park. Dublin City Farm aims to function as a centre for knowledge, teaching and interaction between people, plants, animals and ecology. The Farm has its roots set firmly in the past with the use of traditional breeds of farm animals and old native seeds. The future of the farm extends beyond the confines of the Park to the local community by providing access to structural learning and modern environmentally sustainable practices.</p> --}}
        <p class="text-base md:text-lg py-1">Run by volunteers set within the boundaries of a busy city park, 'St. Anne's City Farm' is home to 2 Pigs, 10 Chickens, 3 Goats, 3 Guinea Pig, 3 Rabbits and Moses the Pony.</p>
        <hr class="w-30p border border-dashed border-grey-darkest">
        <p class="text-base md:text-lg py-1">It is also the site of raised beds, a herb garden, and a wooden cabin. We promote holistic education with a program that includes mindfulness, animal therapy and nurturing the whole child - helping children to connect with nature.</p>
        <hr class="w-30p border border-dashed border-grey-darkest">
        <p class="text-base md:text-lg py-1">As we develop further, we will serve healthy food and drink onsite, expand our educational program and host cultural events.
        </p>
        <hr class="w-30p border border-dashed border-grey-darkest">
        <p class="text-base md:text-lg py-1">We also will develop the site as a showcase for how to thrive as a farm off the grid, using renewable energy sources and water conserving technologies.</p>
        <hr class="w-30p border border-dashed border-grey-darkest">
        <p class="text-base md:text-lg py-1">By being a safe and open space for people to share what they know and learn from others, We strive to empower people through knowledge, growing and creating.</p>
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

<div class="w-full bg-pattern-grey-light bg-grey-light pt-8">
    <div class="container mx-auto flex">
            <h2 class="font-dec text-5xl ml-4 md:ml-0 pt-16 mb-4 border-b-2 md:border-b-8 border-primary-8 text-primary-8">What's On</h2>
    </div>
    <div class="container mx-auto py-6">
        <h3 class="text-xl leading-normal text-center text-grey-darkest">Here at the farm we run a range of events such as classes and activities in our community kitchen.</h3>
    </div>
    
    <div class="container mx-auto flex justify-center flex-wrap pb-4">

        <div class="w-full md:w-45p px-4 py-4">
            <div class="flex flex-col justify-start items-center mx-1 px-2 py-2 border-2 border-primary-8 bg-grey-light shadow-lg mb-2 md:mb-4">
                <object data="/images/classes.svg" type="image/svg+xml" class="h-10r xl:h-15r w-80p pb-2 md:pb-0 my-1"></object>
                {{-- <img src="/images/classes.jpeg" alt="" class="w-full h-20r object-cover"> --}}
                <div class="bg-grey-light w-full py-1" >
                    <h5 class="font-dec text-2xl text-primary-8">Classes</h5>
                </div>
                <div class="w-full bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer" id="calendarBtn" >
                <a class="text-center no-underline" >More</a>
                </div>
                <div class="w-full bg-grey-light px-2 py-2 flex-1 hidden" id="calendarItem">
                    <p class="text-grey-darkest py-2 text-base leading-normal">We have one day a week dedicated to schools, groups, and clubs; we aim to educate wherever possible. The benefits of learning outside the classroom are well documented and widely recognised. We welcome visits from schools of all ages and abilities!
                    </p>
                    <p class="text-grey-darkest py-2 text-base leading-normal">For more information visit our <a href="{{route('education')}}" class="text-primary-8 hover:text-grey-darkest">education</a> page.
                    </p>
                </div>
            </div>
            
        </div>
        <div class="w-full md:w-45p px-4 py-4" id="kitchen">
            <div class="flex flex-col justify-start items-center mx-1 px-2 py-2 border-2 border-primary-8 bg-grey-light shadow-lg mb-2 md:mb-4">
                {{-- <img src="/images/whatson.jpg" alt="" class="w-full h-20r object-cover"> --}}
                <object data="/images/cooking.svg" type="image/svg+xml" class="h-10r xl:h-15r w-80p pb-2 md:pb-0 my-1"></object>
                <div class="bg-grey-light w-full py-1">
                    <h5 class="font-dec text-2xl text-primary-8">Community Kitchen</h5>
                </div>
                <div class="w-full bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer" id="calendarBtn2">
                    <a class="text-center no-underline">More</a>
                </div>
                <div class="w-full bg-grey-light px-2 py-2 flex-1 hidden" id="calendarItem2">
                    <p class="text-grey-darkest text-base leading-normal">Community Kitchen is empowering the community through food. Our kitchen is an ethical, sustainable, local and culturally diverse food hub, offering food centred activities, services, education, and training. We will be accessible, family-friendly and will be using all the produce that we grow on the farm. We aim to give people the chance to grow, harvest and cook their own food all in one place.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="container mx-auto flex flex-col items-center">
        <h3 class="text-xl leading-normal text-center text-grey-darkest py-4">For a full list of events happening at the farm, visit the Farm Calendar</h3>
        <div class="w-full md:w-45p px-4 py-4" id="kitchen">
            <div class="flex flex-col justify-center items-center mx-1 px-4 py-4 border-2 border-primary-8 bg-grey-light shadow-lg mb-2 md:mb-4" id="calendar" onclick="location.href= '/community/calendar';" style="cursor:pointer;">
                {{-- <img src="/images/calendar.jpg" alt="" class="w-full h-20r object-cover"> --}}
                <object data="/images/calendar.svg" type="image/svg+xml" class="h-5r xl:h-10r w-80p pb-2 md:pb-0 my-1 z-0" ></object>
                <div class="bg-grey-light w-full py-1">
                    <h5 class="font-dec text-lg text-center md:text-xl xl:text-2xl text-grey-lightest bg-primary-8 py-1 border  hover:text-primary-8 hover:bg-grey-lightest hover:border hover:border-primary-8 ">Farm Calendar</h5>
                </div>
                {{-- <div class="w-full bg-grey-light px-2 py-2">
                    <p class="text-grey-darkest text-sm xl:text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ex optio. Eum officia soluta voluptatem!</p>
                </div>
                <div class="w-full bg-primary-9 text-grey-lightest text-center py-2">
                <a href="{{route('calendar')}}" class="text-center no-underline text-grey-lightest hover:text-grey-darker">Read More</a>
                </div> --}}
            </div>
        </div>
    </div>

    </div>

</div>

@endsection

@section('scripts')
@parent
<script>

/* What's On buttons */

let whatsOnButton = document.getElementById("WhatsOnButton");
let whatsOnSection = document.getElementById("WhatsOnSection");

whatsOnButton.addEventListener("click", function () {
    window.getComputedStyle(whatsOnSection).display === 'none' ?
        (whatsOnSection.classList.add('show')): 
        (whatsOnSection.classList.remove('show')) ;
})
let whatsOnButton2 = document.getElementById("WhatsOnButton2");
let whatsOnSection2 = document.getElementById("WhatsOnSection2");

whatsOnButton2.addEventListener("click", function () {
    window.getComputedStyle(whatsOnSection2).display === 'none' ?
        (whatsOnSection2.classList.add('show')): 
        (whatsOnSection2.classList.remove('show')) ;
})
let whatsOnButton3 = document.getElementById("WhatsOnButton3");
let whatsOnSection3 = document.getElementById("WhatsOnSection3");

whatsOnButton3.addEventListener("click", function () {
    window.getComputedStyle(whatsOnSection3).display === 'none' ?
        (whatsOnSection3.classList.add('show')): 
        (whatsOnSection3.classList.remove('show')) ;
})
let whatsOnButton4 = document.getElementById("WhatsOnButton4");
let whatsOnSection4 = document.getElementById("WhatsOnSection4");

whatsOnButton4.addEventListener("click", function () {
    window.getComputedStyle(whatsOnSection4).display === 'none' ?
        (whatsOnSection4.classList.add('show')): 
        (whatsOnSection4.classList.remove('show')) ;
})
let whatsOnButton5 = document.getElementById("WhatsOnButton5");
let whatsOnSection5 = document.getElementById("WhatsOnSection5");

whatsOnButton5.addEventListener("click", function () {
    window.getComputedStyle(whatsOnSection5).display === 'none' ?
        (whatsOnSection5.classList.add('show')): 
        (whatsOnSection5.classList.remove('show')) ;
});

/* Calendar Button Animaiton */

let calendarBtn = document.getElementById("calendarBtn");
let calendarItem = document.getElementById("calendarItem");

calendarBtn.addEventListener("click", function () {
    window.getComputedStyle(calendarItem).display === 'none' ?
        (calendarItem.classList.add('show')) (calendarBtn.innerText = 'Less') : 
        (calendarItem.classList.remove('show')) (calendarBtn.innerText = 'More') ;
    
})
let calendarBtn2 = document.getElementById("calendarBtn2");
let calendarItem2 = document.getElementById("calendarItem2");


calendarBtn2.addEventListener("click", function () {
    window.getComputedStyle(calendarItem2).display === 'none' ?
        (calendarItem2.classList.add('show')) (calendarBtn2.innerText = 'Less') : 
        (calendarItem2.classList.remove('show')) (calendarBtn2.innerText = 'More') ;
    
})


</script>


@endsection