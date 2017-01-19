function initMap(){
   				var coordinates = [{lat:-25.747167, lng:28.193371}, {lat:-25.746249, lng:28.194219}, {lat:-25.751131, lng:28.193690}, {lat:-25.751868, lng:28.184733}, {lat:-25.755307, lng:28.167265}, {lat:-25.751287, lng:28.204344}];
   				var titles = ['The Busy Oven', 'Cake Zone', 'Belem Confectionners', 'Corner Bakery', 'Sunbake', 'Cake Bakery Sunnyside'];
   				var element = document.getElementById('map-area');
   				var map = new google.maps.Map(element,{
   					zoom:15,
   					center:coordinates[0],
   					mapTypeId: 'roadmap',
   					styles:[
   						{elementType: 'geometry', stylers:[{color:'#0a3c3d'}]},
   						{elementType: 'labels.text.stroke', stylers:[{color:'#0a3c3d'}]},
   						{elementType: 'labels.text.fill', stylers:[{color:'#cdcdcd'}]},
   						 {
			              featureType: 'administrative.locality',
			              elementType: 'labels.text.fill',
			              stylers: [{color: '#963535'}]
			            },
			            {
			              featureType: 'road',
			              elementType: 'geometry',
			              stylers: [{color: '#38414e'}]
			            },
			            {
			              featureType: 'road',
			              elementType: 'geometry.stroke',
			              stylers: [{color: '#212a37'}]
			            },
			            {
			              featureType: 'road',
			              elementType: 'labels.text.fill',
			              stylers: [{color: '#9ca5b3'}]
			            },
			            {
			              featureType: 'road.highway',
			              elementType: 'geometry',
			              stylers: [{color: '#746855'}]
			            },
			            {
			              featureType: 'road.highway',
			              elementType: 'geometry.stroke',
			              stylers: [{color: '#1f2835'}]
			            },
			            {
			              featureType: 'road.highway',
			              elementType: 'labels.text.fill',
			              stylers: [{color: '#f3d19c'}]
			            }
   					]
   				});

   				/*var marker;
   				for(i = 0; i < coordinates.length; i++){
   					marker = new google.maps.Marker({
	   					position:coordinates[i],
	   					map:map,
	   					title: titles[i]
	   				});
   				}*/
   			
   			var labels = 'ABCDEF'; 
   			var markers = coordinates.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length],
            title: titles[i]

          });
        });

   			var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
 
   			}