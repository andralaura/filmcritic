<h2><?= $this->lang->line('i_about')?></h2>
<script>
$(window).load(function() {
  $('a[picture-hash').prepend(function(index) {
    var hash = $(this).attr('picture-hash')
    return '<img class="small-image" alt="" src=' + hash
  })
})
</script>
<p>Tegijad:</p>
<ul>
  <li>Siim</li>
  <li>Andra</li>
  <a href="#" picture-hash="http://i65.tinypic.com/j7c4dd.jpg"></a>
  <li>Kalle</li>
</ul>
<p>Kus me asume:</p>
<div id="map"></div>
<script src="/js/google-maps.js"></script>
<script async defer
src="<?php echo 'https://maps.googleapis.com/maps/api/js?key=' . $google_maps_key . '&callback=initMap';?>">
</script> 