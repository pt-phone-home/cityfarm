@extends('master')

@section('title')
 Grow | St. Anne's City Farm
@endsection

@section('content')
<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Grow</h1>
</div>

<div class="bg-pattern-grey-light">
    <div class="container mx-auto flex justify-center flex-wrap">

        <div class="w-full lg:w-1/2 py-2">
            <div class="w-90p px-2 py-2 flex flex-col items-center border-2 bg-grey-light border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="bg-primary-8 text-grey-lightest rounded font-dec text-3xl px-4 py-2 w-full max-h-full">Demonstration Bed</h2>
                <div class="h-auto py-2 px-2  w-full flex justify-center items-center">
                    <img src="/images/demonstration.jpg" class="w-80p h-64 object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2">An attractive education space with demonstration growing beds 
                    </p>
                    <p class="leading-normal py-1 px-2">The demonstration beds are the perfect place for children to engage with nature, with raised garden beds at just the right level for little arms to reach the soil. Budding gardeners and future scientists learn by doing as they water, weed, and harvest plants. Expert instructors provide hands-on learning that makes a lasting impression. The family is encouraged to volunteer on Saturdays to grow and get closer to nature
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 py-2">
            <div class="w-90p px-2 py-2 flex flex-col items-center border-2 bg-grey-light border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="text-grey-lightest bg-primary-8 rounded  font-dec text-3xl px-4 py-2 w-full max-h-full">Polytunnel</h2>
                <div class="h-auto py-2 px-2 w-full flex justify-center items-center">
                    <img src="/images/pollytunnel.jpg" class="w-80p h-64 object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn2">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem2">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2 self-start">The <strong>Polytunel</strong> is a nursery with so much more than plants</p>
                    <p class="leading-normal py-1 px-2">Overflowing with organic farm grown flowers, lush indoor plants, herbs and vegetable plants.</p>
                    <p class="leading-normal py-1 px-2">Throughout the year we run a collection of seasonal workshops for kids, adults, locals and visitors. Our range covers specialty gardening and growing techniques, botanical crafts and much more.</p>
                    <p class="leading-normal py-1 px-2">Our growing team is currently busy growing a variety of seasonal produce for our Community kitchen and Animals.</p>
                    <p class="leading-normal py-1 px-2">We believe healthy plants begin with healthy soil. Healthy plants means less pests and disease. We use the following techniques to keep our soil in the best of health: cover cropping with green manures, crop rotation, mulching, composting, interplanting and animal rotations.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center flex-wrap">
        <div class="w-full lg:w-1/2 py-2">
            <div class="w-90p px-2 py-2 flex flex-col items-center border-2 bg-grey-light border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="bg-primary-8 text-grey-lightest font-dec text-3xl px-4 py-2  w-full max-h-full">Herb Garden</h2>
                <div class="h-auto py-2 px-2 w-full flex justify-center items-center">
                    <img src="/images/herb.jpg" class="w-80p h-64 object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn3">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem3">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2 self-start">Just as locally grown food is key to long-term sustainability, so is locally grown medicine. That’s why our programs focus on growing your own herbs and all the ways you can enrich your life with edible and medicinal weeds. Preparing herbal medicine is a deeply satisfying and sovereign practice and an essential aspect of all traditional cultures across the globe. 
                    </p>
                    <p class="leading-normal py-1 px-2 self-start">Herbal Gardens are a fun‐filled learning activity for Adults & children where they get the opportunity to learn about the medicinal plants by actually planting the medicinal herbs and watching them grow in their gardens, and by exploring information about them from various sources. 
                    </p>
                    <p class="leading-normal py-1 px-2 self-start">The garden itself has been enriching in terms of making children realise the importance of teamwork such as detailed planning, and allocation of tasks within a team. We teach activities, such as Junior Herb school, Making natural beauty products, making natural household cleaners, making tonics, learning to collect and make your own herbal teas, eco- printing on fabrics using flowers, writing essays, poems and stories, making posters, drawing and painting, making herbariums, and even preparing food recipe using some of the culinary herbs students have planted in their gardens.
                    </p>
                    <p class="leading-normal py-1 px-2 self-start">TA herbal garden reflects the long‐ standing tradition of conserving and using plants products for health care and cooking. But while herbal plants are in demand, the traditions and culture associated with them are fading. Making a herbal garden is an opportunity to grow hers for use, while spreading knowledge of their importance and traditional uses, and saving plants that are threatened. 
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 py-2">
            <div class="w-90p px-4 py-2 flex flex-col items-center border-2 bg-grey-light border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="bg-primary-8 text-grey-lightest font-dec text-3xl px-4 py-2 w-full max-h-full">Animal Fodder</h2>
                <div class="h-auto py-2 px-2  w-full flex justify-center items-center">
                    <img src="/images/fodder.jpg" class="w-80p h-64 object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn4">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem4">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2 self-start">Our long-term plan is to grow all the food for our animals on the farm. Between our raised beds, allotment and polytunnel we have lots of lush beds of grass, kale, spinach and wild herbs that meets the needs of our pony, rabbit, guinea pig, goats and chickens. We've planted the allotment full of root vegetables for our piggie girls.</p>
                    <p class="leading-normal py-1 px-2 self-start">If you'd like more information or advice please contact us at the farm.</p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 py-2">
            <div class="w-90p px-4 py-2 flex flex-col items-center border-2 bg-grey-light border-primary-8 my-2 mx-2 shadow-lg">
                <h2 class="bg-primary-8 text-grey-lightest font-dec text-3xl px-4 py-2 w-full max-h-full">Forest Garden</h2>
                <div class="h-auto py-2 px-2  w-full flex justify-center items-center">
                    <img src="/images/forestGarden.jpg" class="w-80p h-64 object-cover" alt="">
                </div>
                <div class="w-full text-center bg-primary-8 text-grey-lightest text-center py-2 cursor-pointer rounded" id="GrowBtn5">
                        <a class="text-center no-underline px-2 py-2">More</a>
                </div>
                <div class="hidden" id="GrowItem5">
                    <hr class="border w-full border-primary-8">
                    <p class="leading-normal py-1 px-2 self-start">Forest gardens are food-producing gardens which seek to emulate natural woodland ecosystems as closely as possible.</p>
                    <p class="leading-normal py-1 px-2 self-start">A forest garden is made-up of mainly perennial plants which are agriculturally productive or useful, growing as they would in the wild.</p>
                    <p class="leading-normal py-1 px-2 self-start">Forest gardening is the intentional process of cultivating a diverse culture of useful plants and trees. The forest garden is so-named because the plants are stacked or assembled as they may be found in a natural forest or woodland. There is a universal assembly of forest plants, found worldwide. Whilst this structure is universal,  each forest or woodland is uniquely composed of species that are specific to climate and location.</p>
                    <p class="leading-normal py-1 px-2 self-start">Most temperate forests consist of seven layers of plants, whilst some sucessionally-advanced tropical forests may feature up to thirteen layers.</p>
                    <hr class="border border-dashed border-grey-darkest w-80p">
                    <p class="leading-normal py-1 px-2 self-start">The most common seven plant layers are as follows (with examples for forest gardens in temperate climates):</p>
                    <ul class="list-reset">
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Upper Canopy (Sweet Chestnut, Cherry, Pear, Victoria Plum)</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Lower Canopy or Sub-Canopy    (Hazel, Crab Apple, Fig, Medlar and dwarfing trees)</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Vines and Climbers (Kiwi, Grape, Passion Fruit, Runner Beans)</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Shrubs, and understorey bushes (Blackcurrant, Gooseberry, Raspberry, Eleagnus)</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Herbaceous perenennials and annuals (Mint, Chives, Fennel, Rhubarb)</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Ground Cover (Strawberries, Clover, Ramsons)</li>
                        <li class="text-grey-darkest py-1"><i class="fas fa-leaf pr-4 text-primary-8"></i>Roots and Rhizosphere ( Parsnips, Welsh Onion, Ground Nut, Garlic and Chives, Jerusalem Artichoke)</li>
                    </ul>
                    <hr class="border border-dashed border-grey-darkest w-80p">
                    <p class="leading-normal py-1 px-2 self-start">A well-managed garden will yield nuts, fruits, herbs and annual crops. Once a forest garden becomes established, it requires little or no artificial energy input and minimal labour, whilst continuing to produce harvestable yields.</p>
                    <p class="leading-normal py-1 px-2 self-start">The objective of a forest garden, is to epitomise the diversity and stability found in wild forest systems, whilst choosing productive trees, shrubs, bushes and herbs which are benficial to humans. The purpose of this is to create natural pest resilence though biodiversity, to create natural habitat, and to create cultures of plants which can produce food perpetually, without annual tilling, pesticides, fertilisers or other high inputs of chemicals or energy - indeed as an alternative, and also as an ecologically regenererative and sustainable source of organic and seasonal food.</p>
                    <p class="leading-normal py-1 px-2 self-start">A polyculture (a mixed species of plants), is the opposite of a monoculture. Monocultures are largely absent in the natural environment and consist of one species of plant growing on a flat plane. Almost all of nature may be considered polycultural. A polycultural food forest (forest garden), consists of multiple species of food, growing on multiple planes. Thus, food growing and cropping occurs on multiple layers, as opposed to a single yield on a flat growing plane. This increases the input of human labour, but eliminates any dependency on petrochemicals.</p>
                    <p class="leading-normal py-1 px-2 self-start">The forest gardener seeks to create as much diversity as possible to maximise the stabilty and resilience of the agriultural system, and to create a greater range of potential crops, harvestable throughout the season. It is essentially, a multi-layered foraging garden, sometimes referred to as a wild or outdoor pantry. </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent

<script>
let growBtn = document.getElementById("GrowBtn");
let growItem = document.getElementById("GrowItem");

growBtn.addEventListener("click", function () {
    window.getComputedStyle(growItem).display === 'none' ?
        (growItem.classList.add('show')) (growBtn.innerText = 'Less') : 
        (growItem.classList.remove('show')) (growBtn.innerText = 'More') ;
    
})
let growBtn2 = document.getElementById("GrowBtn2");
let growItem2 = document.getElementById("GrowItem2");

growBtn2.addEventListener("click", function () {
    window.getComputedStyle(growItem2).display === 'none' ?
        (growItem2.classList.add('show')) (growBtn2.innerText = 'Less') : 
        (growItem2.classList.remove('show')) (growBtn2.innerText = 'More') ;
    
})
let growBtn3 = document.getElementById("GrowBtn3");
let growItem3 = document.getElementById("GrowItem3");

growBtn3.addEventListener("click", function () {
    window.getComputedStyle(growItem3).display === 'none' ?
        (growItem3.classList.add('show')) (growBtn3.innerText = 'Less') : 
        (growItem3.classList.remove('show')) (growBtn3.innerText = 'More') ;
    
})
let growBtn4 = document.getElementById("GrowBtn4");
let growItem4 = document.getElementById("GrowItem4");

growBtn4.addEventListener("click", function () {
    window.getComputedStyle(growItem4).display === 'none' ?
        (growItem4.classList.add('show')) (growBtn4.innerText = 'Less') : 
        (growItem4.classList.remove('show')) (growBtn4.innerText = 'More') ;
    
})
let growBtn5 = document.getElementById("GrowBtn5");
let growItem5 = document.getElementById("GrowItem5");

growBtn5.addEventListener("click", function () {
    window.getComputedStyle(growItem5).display === 'none' ?
        (growItem5.classList.add('show')) (growBtn5.innerText = 'Less') : 
        (growItem5.classList.remove('show')) (growBtn5.innerText = 'More') ;
    
})
</script>

@endsection