@extends('master')

@section('title')

Visit Us | St. Anne's City Farm
@endsection


@section('content')
<div class="pig-banner h-10r flex justify-center items-center">
    <h1 class="text-grey-lightest text-6xl">Visit Us</h1>
</div>

<div class="w-full bg-grey-lightest">
    <div class="container mx-auto flex flex-row flex-wrap py-12">
        {{-- left Side --}}
        <div class="map w-full md:w-1/2 h-20r" id="map">

        </div>
        {{-- Right Side --}}
        <div class="w-full md:w-1/2 h-auto flex flex-col justify-center px-4 py-4 md:py-0">
            {{-- Top --}}
            <div>
                <h3 class="text-center text-4xl">Farm Location</h3>
            </div>  
            {{-- Bottom --}}
            <div class="flex flex-row border-b-2 border-dashed border-green-dark pb-4">
                {{-- Left Side --}}
                <div class="w-1/2 flex justify-center items-center">
                    <i class="fas fa-globe-europe text-7xl text-green self-center"></i>
                </div>
                {{-- Right Side --}}
                <div class="w-1/2 text-lg">
                    <h5 class="text-xl py-2">St. Anne's City Farm</h5>
                    <p class="py-1">67 All Saints Rd., Raheny</p>
                    <p class="py-1">Dublin, Ireland</p>
                    <p class="py-1">D05 Y102</p>
                </div>
            </div>
            {{-- Second Bottom Section --}}
            <div class="container mx-auto flex flex-col py-6 px-6">
                    <h3 class="text-3xl text-center">Entrance</h3>
                    <p class="leading-loose text-xl">Completely free entry! We are located beside the All Saint's Road Service entrace of the park. Right beside the Allotments.</p>
            </div>
        </div>
    </div>
</div>
{{-- Getting to the Farm --}}
<div class="w-full bg-grey-lightest py-8 bg-map bg-fixed">
        <div class="container mx-auto">
            <h2 class="text-center text-6xl py-4 text-grey-lightest">Getting to the Farm</h2>
        </div>
    <div class="container mx-auto flex flex-wrap justify-around items-center lg:items-center">
        {{-- Colum 1 --}}
        <div class="w-90p lg:w-30p my-4">
            <div class="flex flex-col border-2 border-blue ">
                <h3 class="bg-green text-grey-lightest text-4xl px-4 py-2 text-center">By Train</h3>
                <div class="bg-grey text-center">
                    <i class="fas fa-train text-8xl text-blue py-6 text-center"></i>
                </div>
                <div class="text-center bg-grey py-2 px-2">
                    <h4 class="text-xl py-4 underline">Nearest Dart Station</h4>
                    <p class="text-lg leading-loose">Raheny Dart Station: 15 - 20 minute walk</p>
                </div>
            </div>
        </div>
        {{-- Column 2 --}}
        <div class="w-90p lg:w-30p my-4">
            <div class="flex flex-col border-2 border-blue">
                <h3 class="bg-green text-grey-lightest text-4xl px-4 py-2 text-center">By Bus</h3>
                <div class="bg-grey text-center">
                    <i class="fas fa-bus text-8xl text-blue py-6 text-center"></i>
                </div>
                <div class="text-center bg-grey py-2 px-2">
                    <h4 class="text-xl py-4 underline">Bus Routes</h4>
                    <p class="lowercase py-2 leading-loose">130 BUS FROM LOWER ABBEY ST. TOWARDS CASTLE AVENUE: STOP #1750 ON MT. PROSPECT AVE. OPPOSITE RED STABLES IS A 5 MINUTE WALK THROUGH THE PARK.</p>
                    <p class="lowercase py-2 leading-loose">29A BUS FROM LOWER ABBEY ST. TOWARDS BALDOYLE: STOP #651 ON ALL SAINTS ROAD</p>
                </div>
            </div>
        </div>
        {{-- Column 3 --}}
        <div class="w-90p lg:w-30p my-4">
            <div class="flex flex-col border-2 border-blue">
                <h3 class="bg-green text-grey-lightest text-4xl px-4 py-2 text-center">By Bike</h3>
                <div class="bg-grey text-center">
                    <i class="fas fa-bicycle text-8xl text-blue py-6 text-center"></i>
                </div>
                <div class="text-center bg-grey py-2 px-2">
                    <h4 class="text-xl py-4 underline">Cycling</h4>
                    <p class="leading-loose">A Bike rack is just outside the entrance to the farm. If cycling from the city you have the Dublin bay cycle path the whole way to the park.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Rules of Visit --}}

<div class="w-full bg-grey-lightest">
    <div class="container mx-auto">
        <h3 class="text-center text-6xl py-4">Some Rules for your visit</h3>
    </div>
    <div class="container mx-auto flex justify-center">
            <i class="fas fa-exclamation-triangle text-9xl text-blue py-4"></i>
    </div>

</div>

@endsection

@section('scripts')
<script> 
        function initMap() {
          
          var clonturk = {
              info: '<strong>St. Anne\'s City Farm</strong><br>\
              67 All Saints Rd, Raheny, Dublin 5, Ireland D05 Y102<br>\
                          <a href="https://goo.gl/maps/X2MNdF4WeS72" target="_blank">Get Directions</a>',
              lat: 53.373999, 
              long: -6.176056
          };
      
      
          var locations = [
            [clonturk.info, clonturk.lat, clonturk.long, 0],
          ];
      
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 14,
              center: new google.maps.LatLng(53.373999, -6.176056),
              mapTypeId: google.maps.MapTypeId.ROADMAP
          });
      
          var infowindow = new google.maps.InfoWindow({});
      
          var marker, i;
      
          for (i = 0; i < locations.length; i++) {
              marker = new google.maps.Marker({
                  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                  map: map
              });
      
              google.maps.event.addListener(marker, 'click', (function (marker, i) {
                  return function () {
                      infowindow.setContent(locations[i][0]);
                      infowindow.open(map, marker);
                  }
              })(marker, i));
          }
      }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtbJayjrxT9C_mqWSebyR4DxEIi7cRl3g&callback=initMap"
        async defer></script>


@endsection