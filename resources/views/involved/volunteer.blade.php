@extends('master')

@section('title')
Volunteer | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Volunteer</h1>
</div>

<div class="bg-primary-8">
    <div class="container mx-auto">
        <h1 class="font-dec text-center text-6xl py-6 text-neutral-2">Help out around the farm</h1>
        <div class="px-12 py-6">
            <h5 class="leading-loose text-lg text-neutral-2">St. Anne's City Farm was set up by volunteers, the gates of the farm will open on the 26th of April 2019 to the public and we will rely on volunteers to help with the day to day running of the farm. We have lots of projects running from maintaining the farm and gardens, to looking after the animals.</h5>
            <h5 class="leading-loose text-lg text-neutral-2">Our open volunteering day is every Saturday from 10am to 1pm. We are always looking for volunteers</h5>
        </div>
    </div>
</div>
{{-- Voluteering Duties --}}
<div class="bg-grey-lightest">
    <div class="container mx-auto py-4">
        <h3 class="text-center text-4xl text-grey-darkest">You can help out in many ways</h3>
    </div>
    <div class="container mx-auto flex flex-wrap py-8">
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/gardening.png" alt="" class="h-48 w-auto">
                <h5 class="border-2 bg-primary-8 text-grey-lightest border-primary-8 font-dec text-xl px-4 py-2 my-4 hover:bg-grey-lightest hover:text-primary-9 hover:cursor-pointer" id="VolBtn">Gardening Volunteer <i class="fas fa-arrow-circle-down"></i></h5>
                <div class="border-b-2 border-primary-8 border-t-2 hidden" id="VolSec">
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest">Volunteers are involved in all aspects of cultivating the vegetable garden, polytunnel, and allotment, some tasks are more hard work than others. </p> 
                    
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest"> We have space to learn how to grow food and we hold gardening sessions regularly as part of our volunteer training program.</p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/maintenance.png" alt="" class="h-48 w-auto">
                <h5 class="border-2 bg-primary-8 text-grey-lightest border-primary-8 font-dec text-xl px-4 py-2 my-4 hover:bg-grey-lightest hover:text-primary-9 hover:cursor-pointer" id="VolBtn2">Maintenance Volunteer <i class="fas fa-arrow-circle-down"></i> </h5>
                <div class="border-b-2 border-primary-8 border-t-2 hidden" id="VolSec2">
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest">Volunteers help us maintain the farm. We are always in need of help of tradesmen and women. Carpenters, plumbers, electricians, painters, etc. </p> 
                    
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest"> We have lots of job on site we need help with. </p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/education.png" alt="" class="h-48 w-auto">
                <h5 class="border-2 bg-primary-8 text-grey-lightest border-primary-8 font-dec text-xl px-4 py-2 my-4 hover:bg-grey-lightest hover:text-primary-9 hover:cursor-pointer" id="VolBtn3" >Education Volunteer <i class="fas fa-arrow-circle-down"></i> </h5>
                <div class="border-b-2 border-primary-8 border-t-2 hidden" id="VolSec3">
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest">Volunteers help us deliver our education programme, both at the farm and in local schools. </p> 
                    
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest"> If you are interested in getting involved please email us. 
                        </p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/youth.png" alt="" class="h-48 w-auto">
                <h5 class="border-2 bg-primary-8 text-grey-lightest border-primary-8 font-dec text-xl px-4 py-2 my-4 hover:bg-grey-lightest hover:text-primary-9 hover:cursor-pointer" id="VolBtn4">Youth Volunteer <i class="fas fa-arrow-circle-down"></i> </h5>
                <div class="border-b-2 border-primary-8 border-t-2 hidden" id="VolSec4">
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest">Youths between the ages of 13 to 18 are eligible to volunteer and help out on the farm. We have one session per week every Saturday.</p> 
                    
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest"> If you are interested in getting a child involved please come along on Saturday to have a chat with us.

                        </p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/family.png" alt="" class="h-48 w-auto">
                <h5 class="border-2 bg-primary-8 text-grey-lightest border-primary-8 font-dec text-xl px-4 py-2 my-4 hover:bg-grey-lightest hover:text-primary-9 hover:cursor-pointer"   id="VolBtn5">Family Volunteer <i class="fas fa-arrow-circle-down"></i> </h5>
                <div class="border-b-2 border-primary-8 border-t-2 hidden" id="VolSec5">
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest">Families are encouraged to get involved in gardening, animal care, healthy cooking, general maintenance, and other related activities at the farm. </p> 
                    
                    <p class="px-4 sm:text-sm md:text-base leading-normal py-1 text-grey-darkest"> Sessions run every Saturday from 10 am – 1 pm. All ages and abilities are welcome.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    {{-- <script>
        let VolBtn = document.getElementById('Test');

        VolBtn.addEventListener('click', function () {
            alert('hello');
        })
    
    </script> --}}
    <script>
    $('#VolBtn').click(function () {
        $("#VolSec").toggle('fast');
    });
    $('#VolBtn2').click(function () {
        $("#VolSec2").toggle('fast');
    });
    $('#VolBtn3').click(function () {
        $("#VolSec3").toggle('fast');
    });
    $('#VolBtn4').click(function () {
        $("#VolSec4").toggle('fast');
    });
    $('#VolBtn5').click(function () {
        $("#VolSec5").toggle('fast');
    });
</script>
@endsection