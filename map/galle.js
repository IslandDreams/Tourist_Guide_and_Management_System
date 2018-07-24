var locations = [
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=53"><img src="http://www.srilanka.travel/image/data/attraction_main_images/kosgoda.jpg" style="width:100px;height:50px;"/><br/>Kosgoda</a>',
	6.3354424 , 80.03393119999998, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=55"><img src="http://www.srilanka.travel/image/data/attraction_main_images/weligama.jpg" style="width:100px;height:50px;"/><br/>Weligama  Bay</a>',
	5.9773782 , 80.4288487, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=156"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Hikaduwa-1.jpg" style="width:100px;height:50px;"/><br/>Hikkaduwa Beach</a>',
	6.139540 , 80.104979, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=162"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Unawatuna-1.jpg" style="width:100px;height:50px;"/><br/>Unawatuna</a>',
	6.009862 , 80.248518, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=165"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Mirissa-1.jpg" style="width:100px;height:50px;"/><br/>Mirissa</a>',
	5.944783 , 80.458777, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=190"><img src="http://www.srilanka.travel/image/data/001/Attraction01/Jungle-Beach /Jungle-1.jpg" style="width:100px;height:50px;"/><br/>Jungle Beach </a>',
	6.018866 , 80.239664, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=192"><img src="http://www.srilanka.travel/image/data/001/Attraction01/Koggala-Beach /Koggala-1.jpg" style="width:100px;height:50px;"/><br/>Koggala Beach </a>',
	5.992334 , 80.310563, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=153"><img src="http://www.srilanka.travel/image/data/001/attractions/Main-Images/Galle-1.jpg" style="width:100px;height:50px;"/><br/>Galle Fort</a>',
	6.025003 , 80.218058, 1],
	['<a class="map-info" href="http://www.srilanka.travel/index.php?route=attractions/attraction&attraction_id=6"><img src="http://www.srilanka.travel/image/data/attraction_main_images/Whale_Watching_In_Mirissa.jpg" style="width:100px;height:50px;"/><br/>Whale Watching in Mirissa</a>',
	5.94526548561255 , 80.46180725097656, 1],
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