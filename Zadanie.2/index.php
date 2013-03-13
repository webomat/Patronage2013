<!DOCTYPE html>
<html>
  <head>
    <title>Patronage 2013 - zadanie 2 - Mateusz Skoczylas</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEoluyeAh0JWfeLXZOuwGriVALYrUgj3E&sensor=false&libraries=geometry">
    </script>

    <script type="text/javascript">

      function initialize() {

        // using one circle - settings
        var cityCircle;
        var radius = 4000; // 4 km

        // markers in the circle - settings
        var circleMarkers = new Array();
        var circleMarkersAmount = 5;

        // location and map settings
        var Szczecin = new google.maps.LatLng(53.42764,14.552221);
        var mapOptions = {
          center: Szczecin,
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.HYBRID
        };
        
        // creating a map
        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

        // add Click listener
        google.maps.event.addListener(map, 'click', function(event) {
          var circlePosition = event.latLng;
          var circleRadius = radius;
    			circle = addCircle(circlePosition, circleRadius);
          bounds = circle.getBounds();

          addMarkersInBounds(bounds);

    		});

        // drawing marker (not used on this page)
        function addMarker(location) {
    			marker = new google.maps.Marker({
    		    position: location,
    		    map: map
    		  });
    			markersArray.push(marker);
    		}

    		// draw a Circle or move it to a new position
    		function addCircle(circlePosition, circleRadius) {
          if (cityCircle) {
            // move circle if already exists
            cityCircle.setCenter(circlePosition);
            return cityCircle;
          } else {
            // create new circle (on first click event)
      	 		var circleOptions = {
      	      strokeColor: "#111111",
  	      		strokeOpacity: 0.8,
  	      		strokeWeight: 2,
  	      		fillColor: "#006655",
  	      		fillOpacity: 0.35,
  	      		map: map,
  	      		center: circlePosition,
  	      		radius: circleRadius
      	    };
    	    	cityCircle = new google.maps.Circle(circleOptions);
            return cityCircle;
          }
    		}

  		  // add markers in rectangular bounds of the circle
        function addMarkersInBounds(bounds) {
          // set min and max position for all markers
          var lat_min = bounds.getSouthWest().lat();
          var lat_range = bounds.getNorthEast().lat() - lat_min;
          var lng_min = bounds.getSouthWest().lng();
          var lng_range = bounds.getNorthEast().lng() - lng_min;

          for (var i = 0; i < circleMarkersAmount; i++) {
            var marker_lat = lat_min + (Math.random() * lat_range);
            var marker_lng = lng_min + (Math.random() * lng_range);
            var marker_location = new google.maps.LatLng(marker_lat, marker_lng);

            // check, if marker is in the circle (rectangular bounds are bigger than the circle)
            if (google.maps.geometry.spherical.computeDistanceBetween (cityCircle.getCenter(), marker_location) < radius) {       
              if (circleMarkers.length == circleMarkersAmount) {
                // if markers exist - move them!
                circleMarkers[i].setPosition(marker_location);
              } else {
                // if no markers - create them!
                circleMarkers[i] = new google.maps.Marker({
                  position: marker_location, 
                  map: map
                });
              }
    
            } else {
              // if marker is not in the circle, repeat its position setting
              i--;
            }
          };
        }

		google.maps.geometry.spherical.computeDistanceBetween (latLngA, latLngB);

      }
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>