<h2><?= $this->lang->line('i_about')?></h2>
<div id="map" style="height: 75%; width: 100%;"></div>
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
