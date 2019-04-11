@extends('master')

@section('title')
 Our Animals | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="text-grey-darkest text-6xl">Our Animals</h1>
</div>

<div class="bg-grey-lightest">
    <div class="container mx-auto py-8 px-2">
        <h2 class="text-center text-4xl py-2">Our Animals</h2>
        <p class="leading-loose text-lg">Our animals, our family. We love and respect all our animals. They all have different stories, some are rescued, some have had to be rehomed for many different reasons.</p>
    </div>
</div>

<div class="bg-grey-lightest">
    <div class="container mx-auto">
        <h2 class="text-center text-4xl py-2">Your Support Helps Our Animals</h2>
    </div>
    <div class="container mx-auto flex flex-wrap justify-center">
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Willow</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Vietnamese Potbelly Pig</h5>
                <p class="leading-normal py-2 px-1 h-full">She may have been the runt of the liter but this pig is the brain of the operation, she's always got a plan, she's doesn't miss a trick. Our willow is a clever girl.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Ash</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Vietnamese Potbelly Pig</h5>
                <p class="leading-normal py-2 px-1 h-full">Ash is our big softie! She is big-hearted and kind. She loves sunbathing on the mud bank. She loves to have her tummy tickled.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Coco</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Mixed Breed Goat</h5>
                <p class="leading-normal py-2 px-1 h-full">Coco has been our biggest challenge, she really was scared when she arrived. She didn't trust humans but after lots of love and care. Coco has settled into the farm and has become one confident lady.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Twink</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Mixed Breed Goat</h5>
                <p class="leading-normal py-2 px-1 h-full">Twink was quite wild too but her love of treats, especially sweet things made her a very friendly goat. She loves to play and dance.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Lulu</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Silkie Hen</h5>
                <p class="leading-normal py-2 px-1 h-full">Our delicate and fluffy chickens are the most watchful bunch. They always watch out for each other. Henry has taken to staying close to the ladies and protecting them from any perceived danger. That's our Silkie family.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Henry</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Silkie Cockerel</h5>
                <p class="leading-normal py-2 px-1 h-full">Our delicate and fluffy chickens are the most watchful bunch. They always watch out for each other. Henry has taken to staying close to the ladies and protecting them from any perceived danger. That's our Silkie family.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Ms Fluffy Pants</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Silkie Hen</h5>
                <p class="leading-normal py-2 px-1 h-full">Our delicate and fluffy chickens are the most watchful bunch. They always watch out for each other. Henry has taken to staying close to the ladies and protecting them from any perceived danger. That's our Silkie family.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Peanut</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Guinea Pig</h5>
                <p class="leading-normal py-2 px-1 h-full">Even though she's small, she's fierce. She makes sure to squeak loudly in the morning to make sure we know she's there and ready for her breakfast. She absolutely loves fresh grass and loves to watch Nomah (rabbit) play. They share a stable together.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Nomah</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Rabbit</h5>
                <p class="leading-normal py-2 px-1 h-full">Nomah is a happy rabbit with beautiful soft fur. She loves to jump on the straw bails in her stable and loves apples. She is self-confident and teaches us to be happy.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Jessica</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Maran Hen</h5>
                <p class="leading-normal py-2 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Betty</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Maran Hen</h5>
                <p class="leading-normal py-2 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Stella</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Maran Hen</h5>
                <p class="leading-normal py-2 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Miranda</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Rhode Island Red Hen</h5>
                <p class="leading-normal py-2 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex justify-center my-4">
            <div class="w-80p flex flex-col justify-center border-2 animals" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                 <img src="/images/placeholder.png" class="h-48 w-full object-cover" alt="">  
                 <h3 class="bg-green-light text-grey-lightest text-3xl text-center py-1">Blonde</h3>
                <h5 class="bg-grey-dark text-grey-lightest text-center py-2 text-xl">Rhode Island Red Hen</h5>
                <p class="leading-normal py-2 px-1 h-full">Our five beautiful ladies came to the farm quiet wild. Only one (Blonde) allowed us to pick her up but now one of their favorite things they love to do is to be cuddled. They are five feisty ladies that keep us entertained at the farm with their very different personalities.</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')



@endsection