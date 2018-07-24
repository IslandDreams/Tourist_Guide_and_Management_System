var locations = [
      ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=28"><img src="http://www.srilanka.travel/image/data/attraction_main_images/Jathika_Namal_Uyana.jpg" style="width:100px;height:50px;"/><br/>Jathika Namal Uyana</a>',
      7.906911616469297 , 80.58128356933594, 1],
      ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=176"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Aukana-1.jpg" style="width:100px;height:50px;"/><br/>Aukana </a>',
      8.010786 , 80.512820, 1],
      ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=219"><img src="http://www.srilanka.travel/image/data/001/Attraction01/Wilpattu/Wilpattu-1.jpg" style="width:100px;height:50px;"/><br/>Wilpattu National Park</a>',
      8.456457 , 80.047982, 1],
];
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 10,
  center: new google.maps.LatLng(8.3119278, 80.40365),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});
var infowindow = new google.maps.InfoWindow();
var marker, i;
for (i = 0; i < locations.length; i++) {  
  marker = new google.maps.Marker({
	position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	map: map
  });
  google.maps.event.addListener(marker, 'click', (function(marker, i) {
	return function() {
	  infowindow.setContent(locations[i][0]);
	  infowindow.open(map, marker);
	}
  })(marker, i));
}