<h2><?= $this->lang->line('i_about')?></h2>

<h3><?= $this->lang->line('i_makers')?></h3>
<ul id="makers-list">
    <li><img src="/images/profile.jpg" alt="<?= $this->lang->line('i_profile_picture')?>" id="siim" class="profile-picture" onclick="changeProfilePicture('siim')">Siim</li>
    <li><img src="/images/profile.jpg" alt="<?= $this->lang->line('i_profile_picture')?>" id="andra" class="profile-picture" onclick="changeProfilePicture('andra')">Andra</li>
    <li><img src="/images/profile.jpg" alt="<?= $this->lang->line('i_profile_picture')?>" id="kalle" class="profile-picture" onclick="changeProfilePicture('kalle')">Kalle</li>
</ul>

<h3><?= $this->lang->line('i_location')?></h3>
<div id="map"></div>

<script src="/js/change-profile-picture.js"></script>
<script src="/js/google-maps.js"></script>
<script async defer src="<?php echo 'https://maps.googleapis.com/maps/api/js?key=' . $google_maps_key . '&callback=initMap';?>"></script>