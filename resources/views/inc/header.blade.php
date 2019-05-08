<div class="w-full py-2 px-3 h-32 flex  bg-grey-lightest justify-center items-center z-10 relative font-dec">
    <div class="flex flex-row justify-between container mx-auto sm:w-100p md:w-100p lg:w-70p">
        <div class="logo w-1/3 my-4">
            <img src="/images/logo.png" alt="" class="farm-logo" onclick="location.href= '/';" style="cursor:pointer">
        </div>
        <div class="flex justify-end md:justify-between items-center w-2/3" id="nav">
            <li class="list-reset dropdown z-10">
            <a href="{{route('index')}}" class="hidden md:inline-block text-grey-darkest no-underline hover:text-blue-dark text-2xl">Our Community</a>
                    <div class="dropdown-content flex flex-col absolute pin-t mt-8 w-48 pt-1 px-8 mt-1 bg-grey-lightest rounded">
                    <a href={{route('about')}} class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl"><object data="/images/divider.svg" type="image/svg+xml" class="w-6 hidden group-hover:block fill-current h-auto"></object> About US</a>
                    <a href="{{route('classes')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Classes</a>
                    <a href="{{route('kitchen')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Community Kitchen</a>
                    <a href="{{route('calendar')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Farm Calendar</a>
                    </div>
            </li>
            <li class="list-reset dropdown">
            <a href="{{route('animals')}}" class="hidden md:inline-block text-grey-darkest no-underline hover:text-blue-dark text-2xl">Love</a>
                    <div class="dropdown-content flex flex-col absolute pin-t w-48 mt-8 pt-1 px-8 bg-grey-lightest rounded">
                    <a href="{{route('animals')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Animals</a>
                    <a href="{{route('grow')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Grow</a>
                    <a href="{{route('education')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Education</a>
                    <a href="{{route('ecology')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Ecology</a>
                    </div>
            </li>
            <li class="list-reset dropdown">
            <a href="{{route('volunteer')}}" class="hidden md:inline-block text-grey-darkest no-underline hover:text-blue-dark text-2xl dropdown">Get Involved</a>
                    <div class="dropdown-content flex flex-col absolute pin-t w-48 mt-8 pt-1 px-8 bg-grey-lightest rounded">
                    <a href="{{route('volunteer')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Volunteer</a>
                    <a href="{{route('corporate')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Corporate</a>
                    <a href="{{route('sponsors')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Sponsors</a>
                    <a href="{{route('donate')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Donate</a>
                    </div>
            </li>
            <li class="list-reset">
            <a href="{{route('news')}}" class="hidden md:inline-block text-grey-darkest no-underline hover:text-blue-dark text-2xl">News</a>
            </li>
            <li class="list-reset dropdown">
                <a href="{{route('info.visit_us')}}" class="hidden md:inline-block text-grey-darkest no-underline hover:text-blue-dark text-2xl dropdown">Info</a>
                <div class="dropdown-content flex flex-col absolute pin-t pin-r -mr-10 w-48 mt-8 pt-1 px-8 bg-grey-lightest rounded">
                    <a href="{{route('info.visit_us')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Visit Us</a>
                <a href="{{route('info.contact')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Contact Us</a>
                <a href="{{route('info.safety')}}" class="py-1 no-underline text-grey-darkest hover:text-blue-dark text-xl">Farm Safety</a>
                </div>
            </li>
            <li class="list-reset">
                <button class="sm:inline-block md:hidden text-grey-darkest no-underline hover:text-blue-dark text-2xl"><i class="fas fa-bars text-grey-darkest text-3xl" id="navBtn"></i></button>
            </li>
        </div>
    </div>
</div>
{{-- Mobile Nav Bar --}}
<div class="fixed pin-t pin-l bg-green z-30 hidden justify-center py-4" id="mobNav">
    <ul class="list-reset flex flex-col items-center">
        <p class="py-4 text-grey-lightest text-2xl hover:bg-green-dark hover:cursor-pointer px-8" id="closeBtn"><i class="fas fa-times px-2 "></i>Close</p>
        <li class="py-4">
        <a href="{{route('index')}}" id="mobLink" class="text-grey-lightest no-underline text-2xl hover:bg-green-dark hover:cursor-pointer px-8 py-4">Home</a>
        </li>
        <li class=" relative" id="dropdownMob">
            <p class="py-4 text-grey-lightest text-2xl hover:bg-green-dark hover:cursor-pointer px-8" id="comBtn">Our Community</p>
            <div class="hidden flex-col items-end py-4 px-2 opacity-0 " id="community">
            <a href="{{route('about')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">About Us</a>
            <a href="{{route('classes')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Classes</a>
            <a href="{{route('kitchen')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Community Kitchen</a>
            <a href="{{route('calendar')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Farm Calendar</a>
            </div>
        </li>
        <li class="relative" id="dropdownMob">
            <p class="py-4 text-grey-lightest text-2xl hover:bg-green-dark hover:cursor-pointer px-8" id="loveBtn">Love</p>
            <div class="hidden flex-col items-end py-4 px-2 opacity-0 " id="love">
            <a href="{{route('animals')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Animals</a>
            <a href="{{route('grow')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Grow</a>
            <a href="{{route('education')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Education</a>
            <a href="{{route('ecology')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Ecology</a>
            </div>
            
        </li>
        <li class="relative" id="dropdownMob">
            <p class="py-4 text-grey-lightest text-2xl hover:bg-green-dark hover:cursor-pointer px-8" id="invBtn">Get Involved</p>
            <div class="hidden flex-col items-end py-4 px-2 opacity-0 " id="involved">
            <a href="{{route('volunteer')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Volunteer</a>
            <a href="{{route('corporate')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Corporate</a>
            <a href="{{route('sponsors')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Sponsors</a>
            <a href="{{route('donate')}}" class="py-2 px-4 text-grey-lightest text-lg no-underline hover:bg-green-dark hover:cursor-pointer">Donate</a>
            </div>
        </li>
        <li class="py-4">
        <a href="{{route('news')}}" id="mobLink" class="py-2 px-4 text-grey-lightest text-2xl no-underline hover:bg-green-dark hover:cursor-pointer">News</a>
        </li>
        <li class="relative" id="dropdownMob">
            <p class="py-4 text-grey-lightest text-2xl hover:bg-green-dark hover:cursor-pointer px-8" id="infBtn">Info</p>
            <div class="hidden flex-col items-end py-4 px-2 opacity-0 " id="info">
            <a href="{{route('info.visit_us')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Visit Us</a>
                <a href="{{route('info.contact')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Contact Us</a>
                <a href="{{route('info.safety')}}" class="py-2 px-4 text-grey-lightest text-xl no-underline hover:bg-green-dark hover:cursor-pointer">Farm Safety</a>
            </div>
        </li>
    </ul>
</div>

