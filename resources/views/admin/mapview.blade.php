<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>
  <head>
    <title>Travel Modes in Directions</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
    <style>/**
        * @license
        * Copyright 2019 Google LLC. All Rights Reserved.
        * SPDX-License-Identifier: Apache-2.0
        */
       /* 
        * Always set the map height explicitly to define the size of the div element
        * that contains the map. 
        */
       #map {
         height: 100%;
       }
       
       /* 
        * Optional: Makes the sample page fill the window. 
        */
       html,
       body {
         height: 100%;
         margin: 0;
         padding: 0;
       }
       
       #floating-panel {
         position: absolute;
         top: 10px;
         left: 25%;
         z-index: 5;
         background-color: #fff;
         padding: 5px;
         border: 1px solid #999;
         text-align: center;
         font-family: "Roboto", "sans-serif";
         line-height: 30px;
         padding-left: 10px;
       }
       
       </style>
  </head>
  <body>
    <div id="map"></div>
    <div>
        {{-- @foreach($booking_locations as $key => $value)
            <input type="hidden" class="{{ ($key==0)?'pickup_lat':'dropoff_lat'; }}" value="{{ $value->latitude }}">
            <input type="hidden" class="{{ ($key==0)?'pickup_log':'dropoff_log'; }}" value="{{ $value->longitutde }}">
        @endforeach --}}
    </div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    {{-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script> --}}
    
    
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('API_KEY') }}&callback=initMap&libraries=places&v=weekly" defer></script>
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <script>/**
        * @license
        * Copyright 2019 Google LLC. All Rights Reserved.
        * SPDX-License-Identifier: Apache-2.0
        */
            
        const pickup_lat = {{ $booking_locations_array[0] }};
        const pickup_log = {{ $booking_locations_array[1] }};

        const dropoff_lat = {{ $booking_locations_array[2] }};
        const dropoff_log = {{ $booking_locations_array[3] }};
        
        
        function initMap() {
            const directionsRenderer = new google.maps.DirectionsRenderer();
            const directionsService = new google.maps.DirectionsService();
            const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: { lat: pickup_lat, lng: pickup_log },
            });
        
            directionsRenderer.setMap(map);
            calculateAndDisplayRoute(directionsService, directionsRenderer);
            document.getElementById("mode").addEventListener("change", () => {
            calculateAndDisplayRoute(directionsService, directionsRenderer);
            });
        }
        
        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            const selectedMode = 'DRIVING';
        
            directionsService
            .route({
                origin: { lat: pickup_lat, lng: pickup_log },
                destination: { lat: dropoff_lat, lng: dropoff_log },
                // Note that Javascript allows us to access the constant
                // using square brackets and a string value as its
                // "property."
                travelMode: google.maps.TravelMode[selectedMode],
            })
            .then((response) => {
                directionsRenderer.setDirections(response);
            })
            .catch((e) => window.alert("Directions request failed due to " + status));
        }
        
        window.initMap = initMap;


       </script>
  </body>
</html>
