@extends('master')

@section('title')
 Our Animals | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Our Animals</h1>
</div>

<div class="bg-primary-8">
    <div class="container mx-auto">
        <div class="px-12 py-12">
        {{-- <h2 class="text-center text-5xl py-2 text-neutral-2">Our Animals</h2> --}}
        <p class="leading-loose text-neutral-2 text-center mx-auto sm:w-90p md:w-80p lg:w-50p leading-loose text-2xl"> Our animals, our family. We love and respect all our animals. They all have their own stories; some are rescued, some were rehomed for many different reasons.</p>
        </div>
    </div>
</div>

<div class="bg-pattern-grey-light">
    <div class="container mx-auto">
        <h2 class="text-center text-4xl py-6 text-primary-8">Your Support Helps Our Animals</h2>
        <div class="text-center pt-4 lg:pt-0">
            <object data="/images/divider.svg" type="image/svg+xml" class="w-12 md:w-16 lg:w-24 h-auto"></object>
        </div>
    </div>
    <div class="container mx-auto flex flex-wrap justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/willow.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Willow</h3>
                <h5 class=" text-grey-darkest py-1 text-lg">Vietnamese Potbelly Pig</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">She may have been the runt of the litter but this pig is the brains of the operation; she's always got a plan and she's doesn't miss a trick. Our willow is a clever girl.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/ash2.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Ash</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Vietnamese Potbelly Pig</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Ash is our big softie! She is big-hearted and kind. She loves sunbathing on the mud bank. She loves to have her tummy tickled.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/coco.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Coco</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Mixed Breed Goat</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Coco has been our biggest challenge, she really was scared when she arrived. She didn't trust humans but after lots of love and care. Coco has settled into the farm and has become one confident lady.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/Twinkle.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Twink</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Mixed Breed Goat</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Twink was quite wild too but her love of treats, especially sweet things made her a very friendly goat. She loves to play and dance.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/henryAndLulu.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Lulu</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Silkie Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our delicate and fluffy chickens are the most watchful bunch. They always watch out for each other. Henry has taken to staying close to the ladies and protecting them from any perceived danger. That's our Silkie family.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/henryAndLulu.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Henry</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Silkie Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our delicate and fluffy chickens are the most watchful bunch. They always watch out for each other. Henry has taken to staying close to the ladies and protecting them from any perceived danger. That's our Silkie family.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/fluffy.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Ms Fluffy Pants</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Silkie Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our delicate and fluffy chickens are the most watchful bunch. They always watch out for each other. Henry has taken to staying close to the ladies and protecting them from any perceived danger. That's our Silkie family.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/peanut.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Peanut</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Guinea Pig</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Even though she's small, she's fierce. She makes sure to squeak loudly in the morning to make sure we know she's there and ready for her breakfast. She absolutely loves fresh grass and loves to watch Nomah (rabbit) play. They share a stable together.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/Rabbit.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Nomah</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Rabbit</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Nomah is a happy rabbit with beautiful soft fur. He loves to jump on the straw bails in his stable and loves apples. He is self-confident and teaches us to be happy.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/bettyAndJessica.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Jessica</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Maran Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our five beautiful ladies came to the farm quite wild. Only one (Blonde) allowed us to pick her up, but now being cuddled is one of their favourite things to do. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/bettyAndJessica.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Betty</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Maran Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/stella.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Stella</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Maran Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/miranda.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Miranda</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Rhode Island Red Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/blonde.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Blonde</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Rhode Island Red Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/maggie.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Maggie May</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Rhode Island Red Hen</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center my-4">
            <div class="w-90p flex flex-col justify-center border-2 bg-grey-light border-primary-8 px-2 py-2 animals rounded" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/moses.jpg" class="h-48 w-full object-cover rounded" alt="">  
                 <h3 class="bg-grey-light text-center text-primary-8 font-dec text-4xl py-1">Moses</h3>
                <h5 class="text-grey-darkest py-1 text-lg">Shetland Pony</h5>
                <hr class="border w-full border-primary-8">
                <p class="leading-normal py-1 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent



@endsection