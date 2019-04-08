@extends('master')

@section('title')
Volunteer | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="text-grey-darkest text-6xl">Volunteer</h1>
</div>

<div class="bg-grey-lightest">
    <div class="container mx-auto">
        <h1 class="text-center text-6xl my-4">Help out around the farm</h1>
        <div class="px-4">
            <h5 class="leading-loose text-xl">St. Anne's City Farm was set up by volunteers, the gates of the farm will open on the 26th of April 2019 to the public and we will rely on volunteers to help with the day to day running of the farm. We have lots of projects running from maintaining the farm and gardens, to looking after the animals.</h5>
            <h5 class="leading-loose text-xl">Our open volunteering day is every Saturday from 10am to 1pm. We are always looking for volunteers</h5>
        </div>
    </div>
</div>
{{-- Voluteering Duties --}}
<div class="bg-grey-lightest">
    <div class="container mx-auto py-4">
        <h3 class="text-center text-4xl">You can help out in many ways</h3>
    </div>
    <div class="container mx-auto flex flex-wrap py-8">
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/gardening.png" alt="" class="h-48 w-auto">
                <h5 class="border-4 border-grey-darkest text-xl px-4 py-2 my-4">Gardening Volunteer</h5>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/maintenance.png" alt="" class="h-48 w-auto">
                <h5 class="border-4 border-grey-darkest text-xl px-4 py-2 my-4">Maintenance Volunteer</h5>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/education.png" alt="" class="h-48 w-auto">
                <h5 class="border-4 border-grey-darkest text-xl px-4 py-2 my-4">Education Volunteer</h5>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/youth.png" alt="" class="h-48 w-auto">
                <h5 class="border-4 border-grey-darkest text-xl px-4 py-2 my-4">Youth Volunteer</h5>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 py-4">
            <div class="flex flex-col items-center">
                <img src="/images/family.png" alt="" class="h-48 w-auto">
                <h5 class="border-4 border-grey-darkest text-xl px-4 py-2 my-4">Family Volunteer</h5>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection