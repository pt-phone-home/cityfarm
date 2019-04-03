@extends('master')

@section('title')

Visit Us | St. Anne's City Farm
@endsection


@section('content')
<div class="pig-banner h-10r flex justify-center items-center">
    <h1 class="text-grey-lightest text-6xl">Visit Us</h1>
</div>

<div class="w-full bg-grey-lightest">
    <div class="container mx-auto flex flex-row flex-wrap py-6">
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
            <div class="flex flex-row">
                {{-- Left Side --}}
                <div class="w-1/2 flex justify-center items-center">
                    <i class="fas fa-map-marked-alt text-6xl text-blue-light self-center"></i>
                </div>
                {{-- Right Side --}}
                <div class="w-1/2 text-lg">
                    <h5 class="text-xl py-2">St. Anne's City Farm</h5>
                    <p class="py-1">67 All Saints Rd., Raheny</p>
                    <p class="py-1">Dublin, Ireland</p>
                    <p class="py-1">D05 Y102</p>
                </div>

            </div>
        </div>
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