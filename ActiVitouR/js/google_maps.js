function initMap(){
	let map = new google.maps.Map(document.getElementById('google_map'), 
	     {
	     	zoom : 10,
	      	center : new google.maps.LatLng(53.0900, -6.9000),
	      	mapTypeId : google.maps.MapTypeId.ROADMAP
	      });

	initializeMarkers(map);

	google.maps.event.addListener(map, 'click', function(event) {
   		placeMarker(event.latLng, map);
	});
}

function initializeMarkers(map){
	let CONTENT = 0; 
	let COORDS = ['LATITUDE']
	let LATITUDE = 1; 
	let LONGITUDE = 2;
	let locations = [
		['Wicklow Mountains National Park', 53.0818, -6.3939],
	];
	let location_marker;
	let mapWindow = new google.maps.InfoWindow();

	for (let i = 0; i < locations.length; i++) {  
	        location_marker = new google.maps.Marker({
	        	position : new google.maps.LatLng(
	        		locations[i][LATITUDE], 
	        		locations[i][LONGITUDE]), 
	            map : map
	        });

	        google.maps.event.addListener( 
	        	location_marker, 'click', 
	        	(function(location_marker, i) 
	                {
	                     return function() 
	                     {
	                          mapWindow.setContent(locations[i][CONTENT]);
	                          mapWindow.open(map, location_marker);
	                     }
	            })
	        	(location_marker, i)
	        );
	}
}

function placeMarker(location, map) {
    var marker = new google.maps.Marker({
        position: location, 
        map: map
    });
}