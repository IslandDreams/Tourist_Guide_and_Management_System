var locations = [
	['<img src="images/hotels/galle/ChaayaTranzHikkaduwa.jpg" style="width:150px;height:75px;"/><br/>Chaaya Tranz Hotel</a>',
	6.131305,80.0985813, 1],
	['<img src="images/hotels/galle/LadyHillGalle.jpg" style="width:150px;height:75px;"/><br/>Lady Hill Hotel</a>',
	6.0386577,80.2164792, 1],
	['<img src="images/hotels/galle/SanmiraRenaissanceUnawatuna.jpg" style="width:150px;height:75px;"/><br/>Sanmira Renaissance Hotel</a>',
	6.0060508,80.2528561, 1],
	['<img src="images/hotels/galle/KoggalaBeachHotel.jpg" style="width:150px;height:75px;"/><br/>Koggala Beach Hotel</a>',
	5.989332,80.3188943, 1],
	['<img src="images/hotels/galle/KabalanaHotel.jpg" style="width:150px;height:75px;"/><br/>Kabalana Hotel</a>',
	5.9814255,80.3373506, 1],
];
var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 10,
	center: new google.maps.LatLng(6.0536389, 80.220975),
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
		return function(){
			infowindow.setContent(locations[i][0]);
			infowindow.open(map, marker);
		}
	})(marker, i));
}