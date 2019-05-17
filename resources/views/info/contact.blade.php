@extends('master')

@section('title')
Contact Us | St. Anne's City Farm
@endsection

@section('content')

<div class="bgi-farm h-10r flex justify-center items-center">
    <h1 class="font-dec text-grey-darkest text-6xl">Conact Us</h1>
</div>

<div class="w-full bg-grey-light ">

    <div class="container mx-auto flex flex-row flex-wrap justify-around">
        {{-- Contact Info --}}
        <div class="w-full md:w-1/4 flex flex-col items-center justify-start my-4">
            <div>
                <h2 class="my-8 text-3xl">Contact St. Anne's City Farm</h2>
                <div class="my-8">
                    <p class="text-xl"><i class="far fa-paper-plane"></i> dublincityfarm@gmail.com</p>
                </div>
                <div class="my-8">
                    <p class="text-xl"><i class="fas fa-mobile-alt"></i>  089 9772984</p>
                </div>
                <div class="flex justify-center my-2 md:my-8">
                        <svg id="Layer_1" data-name="Layer 1" class="w-24 h-auto fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.4 262.98" class="h-48 fill-current text-grey-darkest"><title>compas</title><polygon points="43.14 121.04 43.14 121.25 44.02 121.62 44.02 128.06 43.14 128.44 43.14 128.64 45.17 128.64 45.17 128.44 44.26 128.06 44.26 121.98 49 128.64 49.24 128.64 49.24 121.62 50.14 121.25 50.14 121.04 48.12 121.04 48.12 121.25 49 121.62 49 126.78 44.91 121.04 43.14 121.04" fill=""/><path d="M724.91,376.46l-1.7-.45a2.29,2.29,0,0,1-1-.47,1,1,0,0,1-.34-.8,1.43,1.43,0,0,1,.47-1.12,1.9,1.9,0,0,1,1.3-.42,3.49,3.49,0,0,1,1.55.34l.69,1.39h.21V373h-.21l-.7.29a4,4,0,0,0-1.55-.29,2.35,2.35,0,0,0-1.19.28,1.89,1.89,0,0,0-.77.79,2.54,2.54,0,0,0-.26,1.16,2,2,0,0,0,.42,1.25,2.3,2.3,0,0,0,1.24.75l1.58.4a2.63,2.63,0,0,1,1.14.54,1.24,1.24,0,0,1,.35.92,1.52,1.52,0,0,1-.54,1.24,2.18,2.18,0,0,1-1.39.44,3.07,3.07,0,0,1-1.8-.56l-.82-1.77h-.21v2.44h.21l.81-.41a3.36,3.36,0,0,0,1.74.51,2.45,2.45,0,0,0,1.74-.6,2.15,2.15,0,0,0,.65-1.65,2.48,2.48,0,0,0-.4-1.55A2.19,2.19,0,0,0,724.91,376.46Z" transform="translate(-594.94 -252.14)" fill="" class="h-24"/><path d="M683.64,252.14c-49,0-88.7,42.31-88.7,94.5s85.23,168.48,92.16,168.48c6.07,0,85.25-116.29,85.25-168.48S732.63,252.14,683.64,252.14Zm0,158.78-1.88,0V377.62h29.06v1.47l5.17-2.36-5.17-2v1.66H681.76V361.55h.17c12.29.24,22.5-12.56,24.37-23.91a49.28,49.28,0,0,0,.09-14.25,5.06,5.06,0,0,1,3.71.48,5.79,5.79,0,0,1,2.61,3.24c.57,1.69.23,3.65.8,5.26a9,9,0,0,0,1.12-1.39,13.36,13.36,0,0,0,2.24-7.78,8.48,8.48,0,0,0-2.56-6.74,10.1,10.1,0,0,0-2.45-1.5,8.32,8.32,0,0,1,3.09.35,7.41,7.41,0,0,1,5.64,7.18,7,7,0,0,0,2.8-4.88c.15-2.55-1-4.25-2.84-6.38a13.27,13.27,0,0,0-4.16-2.68,10.4,10.4,0,0,0-2-.65c.68.14,1.79-.47,2.59-.4a11.81,11.81,0,0,1,3,.73,12.78,12.78,0,0,1,5,3.36c2.49,2.73,3.08,5.84,3.35,9.37,2.16-1.54,2.7-5.57,3-8a15,15,0,0,0-.3-6.87,8.33,8.33,0,0,0-.34-.82,8.77,8.77,0,0,0-3.71-3.84,17.66,17.66,0,0,0-5.62-2,14.88,14.88,0,0,0-12.59,4.59,17.37,17.37,0,0,0-2.26,3.17c-3,3.88-4.5,8.86-6,13.67a22.11,22.11,0,0,1-3.33,4.61c-3.33,3.33-8.06,5.6-12.7,4.81a11.29,11.29,0,0,1-7-4.15c-2.56-3.31-3.09-7.76-5.19-11.37a14.63,14.63,0,0,0-6-5.31c0-.09.06-.19.1-.28.44-1.25.72-2.53,2.07-3.09.15-.06.33-.24.21-.34a5.76,5.76,0,0,0-3.73.53,12.08,12.08,0,0,0-1.49.73c.07-.2.14-.39.22-.59.18-.42,1.09-2.89,1.46-2.88a5.57,5.57,0,0,0-2.51.51c-.52.25-1,.91-1.65.81-1-.16-.47-1.4-.36-2.13-2.57.16-4.24,2.59-5,4.85a9.35,9.35,0,0,0-7.23,5.69l0,0c-.87.52-1.75,1-2.62,1.54a7.57,7.57,0,0,0-1.6,1.5c-.86.93-4,2.31-3.74,3.95.21,1.21,5.17,1.37,6.32,2s2.47,1.65,3.82,2.32c-.19,1.11-.27,2.24-.39,3.35-.26,2.62-.48,5.24-.7,7.85a2,2,0,0,0,1.94,1.94,14,14,0,0,0,3.76-.23c2.22,12.25,11.79,22.4,24.17,23.83v15h-28V374.7l-5.17,2,5.17,2.36v-1.47h28v33.17a71.08,71.08,0,1,1,4.2.13Z" transform="translate(-594.94 -252.14)"/></svg>
                </div>
            </div>
        </div>
        {{-- Contact Form --}}
        <div class="w-full md:w-3/4 flex flex-col items-start">
            <div class="pl-24 w-full">
                <h2 class="my-4 text-4xl">Send us a message</h2>
                <form action="" class="my-4">
                    <div class="my-2">
                        <label for="name" class="block my-2 text-xl">Name:</label>
                        <input type="text" class="block w-80p md:w-80p h-8 outline-none rounded">
                    </div>                    
                    <div class="my-2">
                        <label for="email" class="block my-2 text-xl">Email:</label>
                        <input type="email" class="block w-80p md:w-80p h-8 outline-none rounded">
                    </div>                    
                    <div class="my-2">
                        <label for="phone" class="block my-2 text-xl">Phone:</label>
                        <input type="number" class="block w-80p md:w-80p h-8 outline-none rounded">
                    </div>                    
                    <div class="my-2">
                        <label for="message" class="block my-2 text-xl">Message:</label>
                        <textarea name="message" id="" cols="30" rows="10" class="block w-80p md:w-80p h-24 outline-none rounded"></textarea>
                    </div>                    
                    <div class="my-4">
                        <button type="submit" class="bg-green-light text-grey-lightest rounded px-4 py-2 text-2xl hover:bg-green outline-none active:bg-green-dark active:outline-none">Send</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>

</div>
<div class="bg-grey-light bgi-social">
    <div class="container mx-auto py-8">
        <h2 class="text-center text-6xl text-grey-lightest"> Connect with us on social media</h2>
    </div>
</div>
{{-- Twitter --}}
<div class="w-full bgi-twitter">

    <div class="container mx-auto flex flex-row flex-wrap py-8">
         {{-- Twitter Side Container --}}
        <div class="w-full md:w-1/4 flex flex-col items-center justify-center">
            {{-- Twitter Side --}}
            <div class="flex flex-col items-center">
                    <h2 class="my-4 text-4xl text-center text-grey-lightest">Follow us on Twitter</h2>
                    <i class="fab fa-twitter text-9xl cursor-pointer text-grey-lightest py-4 sm:my-0" onclick="window.open('https://twitter.com/dublincityfarm?lang=en', '_blank')"></i>
            </div>

        </div>

        {{-- Twitter Main Container--}}

        <div class="w-full md:w-3/4">
            {{-- Twitter Main --}}
            <div class="flex flex-row justify-start md:pl-24">
                <div class="w-full lg:w-70p overflow-scroll h-30r px-4">
                        <a class="twitter-timeline" href="https://twitter.com/dublincityfarm?ref_src=twsrc%5Etfw" data-tweet-limit="10" data-chrome="nofooter noscrollbar">Tweets by St. Anne's City Farm</a> 
                </div>

            </div>

        </div>
       

    </div>

</div>
{{-- Instagram --}}
<div class="w-full bgi-instagram ">

    <div class="container mx-auto flex flex-row flex-wrap py-8">
         {{-- Instagram Side Container --}}
        <div class="w-full md:w-1/4 flex flex-col items-center justify-center">
            {{-- Instagram Side --}}
            <div class="flex flex-col items-center">
                    <h2 class="my-4 text-4xl text-center">Follow us on Instagram</h2>
                    <i class="fab fa-instagram text-9xl cursor-pointer py-4 sm:my-0" onclick="window.open('https://twitter.com/dublincityfarm?lang=en', '_blank')"></i>
            </div>

        </div>

        {{-- Instagram Main Container--}}

        <div class="w-full md:w-3/4 flex items-center flex-wrap">
            {{-- Intagram Main --}}
            <div class="flex justify-start md:pl-24">
                    <div id="instafeed" class="w-70p overflow-scroll h-auto flex flex-wrap items-center">
            
                    </div>

            </div>

        </div>
       

    </div>

</div>
{{-- Facebook --}}
<div class="w-full bgi-facebook ">

    <div class="container mx-auto flex flex-row flex-wrap py-8">
         {{-- Facebook Side Container --}}
        <div class="w-full md:w-1/4 flex flex-col items-center justify-center">
            {{-- Facebook Side --}}
            <div class="flex flex-col items-center">
                    <h2 class="my-4 text-4xl text-center text-grey-lightest">Follow us on Facebook</h2>
                    <i class="fab fa-facebook text-9xl cursor-pointer text-grey-lightest py-4 sm:my-0" onclick="window.open('https://www.facebook.com/DubCityfarm/', '_blank')"></i>
            </div>

        </div>

        {{-- Facebook Main Container--}}

        <div class="w-full md:w-3/4">
            {{-- Facebook Main --}}
            <div class="flex pl-8 md:pl-24 justify-center">
                <div class="w-80p flex justify-center">
                    <div class="fb-page" data-href="https://www.facebook.com/DubCityfarm/" data-tabs="timeline" data-width="350" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/DubCityfarm/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DubCityfarm/">Dublin City Farm</a></blockquote></div>
                </div>
            </div>

        </div>
       

    </div>

</div>





@endsection

@section('scripts')
@parent
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script async src="/js/instafeed.min.js" charset="utf-8"></script>
<script src="/js/magnific.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>



@endsection
