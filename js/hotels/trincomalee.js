var locations = [
	  
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=48"><img src="http://www.srilanka.travel/image/data/attraction_main_images/nilaweli.jpg" style="width:100px;height:50px;"/><br/>Nilaveli and Uppaveli</a>',
  8.692733100000002 , 81.18852930000003, 1],
	
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=159"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Pigeon-Island-1.jpg" style="width:100px;height:50px;"/><br/>Pigeon Island National Park</a>',
  8.722112 , 81.204543, 1],
	
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=167"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Koneswaram-1.jpg" style="width:100px;height:50px;"/><br/>Koneswaram Kovil</a>',
  8.582766  , 81.245473, 1],
		
  
];

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 10,
  center: new google.maps.LatLng(8.58745, 81.215225),
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