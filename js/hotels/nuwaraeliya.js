var locations = [
  ['<img src="images/hotels/nuwaraeliya/GlendowerHotel.jpg" style="width:150px;height:75px;"/><br/>Glendower Hotel</a>',
	6.9673739,80.7641809, 1],
	['<img src="images/hotels/nuwaraeliya/SunhillHotel.jpg" style="width:150px;height:75px;"/><br/>Hotel Sunhill</a>',
	6.9633513,80.7632399, 1],
	['<img src="images/hotels/nuwaraeliya/WindsorHotel.jpg" style="width:150px;height:75px;"/><br/>Windsor Hotel</a>',
	6.9740596,80.7671496, 1],
	['<img src="images/hotels/nuwaraeliya/StAndrewsHotel.jpg" style="width:150px;height:75px;"/><br/>St. Andrews Hotel</a>',
	6.9792641,80.7638768, 1],
	['<img src="images/hotels/nuwaraeliya/GalwayForestLodge.jpg" style="width:150px;height:75px;"/><br/>Galway Forest Lodge</a>',
	6.98,80.7678073, 1],
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