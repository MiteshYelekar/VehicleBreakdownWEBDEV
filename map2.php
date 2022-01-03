<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Google Map</title>
  <style>
    #map{
      height:600px;
      width:100%;
    }
  </style>
</head>
<body>
 <h1 style="text-align:center">Please choose the station</h1>
  <div id="map"></div>
  <script>
    function initMap(){
      // Map options
      var options = {
        zoom:8,
         center:{lat:21.1458,lng:79.0882}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers
      var markers = [
        {
          coords:{lat:21.1341,lng:79.0816},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1><a href="m2.php">Dhantoli services</a> </h1>'
        },
          
        {
          coords:{lat:21.1076,lng:79.0605},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
         content:'<h1><a href="m3.php">Khamla services</a> </h1>'
        },  
          {
          coords:{lat:20.9276,lng:79.0040},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
         content:'<h1><a href="m4.php">Mahind services</a> </h1>'
        },
          
          {
          coords:{lat:21.1766,lng:79.0616},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1><a href="m1.php">Gear care services</a> </h1>'
        },
          
          {
          coords:{lat:21.2243,lng:79.1894},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1><a href="m5.php">Kamptee services</a> </h1>'
        },
          
        {
          coords:{lat:21.0865,lng: 79.0893},
              
          content:'<h1>Your Current Location<h1>'
        },
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJWNv9Gc9cRLaAchxebBOEiO24f6xu2TM
&callback=initMap">
    </script>
    

        
    
    
</body>
</html>
