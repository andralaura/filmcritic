<h2><?= $this->lang->line('i_about')?></h2>
<div id="map"></div>
<script src="/js/google-maps.js"></script>
<script async defer
src="<?php echo 'https://maps.googleapis.com/maps/api/js?key=' . $google_maps_key . '&callback=initMap';?>">
</script>