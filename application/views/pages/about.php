<h2><?= $title ?></h2>

<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 50%;
       }
    </style>
  </head>
  <body>
    <p>Kus me asume:</p>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 58.378254, lng: 26.714652};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJMWyBmjbc_4VJUEUjeqYtQ5tnnwDs8Rk&callback=initMap">
    </script>
  </body>
</html>