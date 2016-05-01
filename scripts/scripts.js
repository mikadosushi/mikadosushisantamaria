/**
 * @author tj
 */

function makeMap(){//Google Maps

	
	var latlng = new google.maps.LatLng(34.951112, -120.43840399999999);
	var settings = {
		zoom: 15,
		center: latlng,
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP};

    directionsDisplay = new google.maps.DirectionsRenderer();
	var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directions"));

   
};

function calcRoute() {

	$('#directions').html('&nbsp');
    if ($('#fromAddress').val() == null) {
    	alert("Need Address to Route From");
      return;
    };
    
    var request = {
        origin: $('#fromAddress').val(),
        destination: "Mikado Japanese Restaurant, Santa Maria, CA",
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService = new google.maps.DirectionsService();
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
	  
	  	directionsDisplay.setDirections(response);
	  }
	  
    });
    
   
    directionsVisible = true;
  };
  
  $(document).ready(function(){
	  
		$('.menuLink').hover(function(){
			$(this).css({'background-position':'0px -223px'})

			},
			function(){
			$(this).css({'background-position':'0px 0px'})

			})
	  
	  
  });
  
