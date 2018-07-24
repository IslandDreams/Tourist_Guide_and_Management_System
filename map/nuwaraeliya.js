var locations = [
	  
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=158"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Horton-Plains.jpg" style="width:100px;height:50px;"/><br/>Horton Plains</a>',
  6.802193 , 80.807244, 1],
	
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=174"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Victoria-1.jpg" style="width:100px;height:50px;"/><br/>Victoria Park</a>',
  6.970547 , 80.768247, 1],
	
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=178"><img src="http://www.srilanka.travel/image/data/001/Attraction01/Gregory/Gregory-1.jpg" style="width:100px;height:50px;"/><br/>Gregory Lake </a>',
  6.957535 , 80.780182, 1],
	
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=186"><img src="http://www.srilanka.travel/image/data/001/Attraction01/Devon-Falls/Devon-1.jpg" style="width:100px;height:50px;"/><br/>Devon Falls</a>',
  6.951354 , 80.630017, 1],
	
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=187"><img src="http://www.srilanka.travel/image/data/001/Attraction01/Laxapana-Falls/Laxapana-1.jpg" style="width:100px;height:50px;"/><br/>Laxapana Falls</a>',
  6.899422 , 80.500741, 1],
	
  ['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=189"><img src="http://www.srilanka.travel/image/data/001/Attraction01/St-Clairs-Falls/Clairs Falls-1.jpg" style="width:100px;height:50px;"/><br/>St Clairs Falls</a>',
  6.951754 , 80.648158, 1],
		
  
];

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 10,
  center: new google.maps.LatLng(6.949716599999999, 80.78910680000001),
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