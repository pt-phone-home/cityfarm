@extends('master')

@section('title')
 Corporate | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Corporate</h1>
</div>
<div class="bg-primary-8">
    <div class="container mx-auto">
        <div class="px-12 py-12">
            <p class="leading-loose text-neutral-2 text-center mx-auto sm:w-90p md:w-80p lg:w-50p leading-loose text-2xl">Corporate team challenges are a fantastic way to contribute to a local community resource and learn more about the environment that they operate in 
            </p>
            
        </div> 
    </div>
</div>
<div class="bg-pattern-grey-light py-4">
    <div class="container mx-auto flex justify-center">
        <div class="w-full md:w-80p flex flex-wrap bg-grey-light rounded border-2 border-primary-8 shadow-lg">
            <div class="w-full">
                <h3 class="font-dec text-primary-9 text-4xl text-center">Corporate Team Buidling</h3>
            </div>
            <div class="w-full lg:w-1/2 lg:border-r-2 border-primary-8">
                <div class="px-4 py-4 flex justify-center items-center">
                    <object data="/images/corporate.svg" type="image/svg+xml" class="h-15r"></object>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex items-center">
                <div class="flex flex-col items-center">
                    <p class="px-6 leading-normal py-2 text-grey-darkest">Improve communication, develop leadership &amp; delegation, increase co-operation, build relationships, improve performance, discover problem-solving abilities and of course have a wonderful day out.</p>
                    <p class="px-6 leading-normal py-2 text-grey-darkest">We are an essential resource for local people and we also act as an outdoor classroom offering educational tours, groups, and classes. Volunteers play a huge part in our work and they come to the farm to learn new skills and be in a safe and welcoming environment. A team day with us can be part of an ongoing partnership with the farm, or as a one-off event, but the benefits are most definitely mutual.
                    </p>
                <p class="px-6 leading-normal py-2 text-grey-darkest">We can tailor a package to suit your group, email us on dublincityfarm@gmail.com or get in touch through our <a href="{{route('info.contact')}}" class="text-primary-8 hover:text-grey-darkest">contact</a> page.


                    </p>
                </div>
            </div>
            
        </div>
    </div>

</div>

@endsection

@section('scripts')
@parent

@endsection