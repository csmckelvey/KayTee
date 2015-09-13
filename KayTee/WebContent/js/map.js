$(document).ready(function() {
	var contentString = "";
	var coords = {lat: 34.5001855, lng: -117.1860301};
	var mapCanvas = document.getElementById('map-canvas');
	
	contentString += "<DIV>                                                                                               ";
	contentString += "	<IMG class='img-responsive img-center' src='images/logos/logo_extra_small.png' alt='Logo Image' />";
	contentString += "	<P>                                                                                               ";
	contentString += "		<ADDRESS>                                                                                     ";
	contentString += "			Kay-Tee Baby Boutique<BR />                                                               ";
	contentString += "			21885 US HWY 18 Suite #2<BR />                                                            ";
	contentString += "			Apple Valley, CA 92307<BR />                                                              ";
	contentString += "			Fax (760) 810 - 0678<BR />                                                                ";
	contentString += "			Store (760) 810 - 0488<BR />                                                              ";
	contentString += "			<A href='mailto:kayteebabyboutique@gmail.com'>kayteebabyboutique@gmail.com</A><BR /><BR />";
	contentString += "		</ADDRESS>                                                                                    ";
	contentString += "	</P>                                                                                              ";
	contentString += "</DIV>                                                                                              ";

	var mapOptions = {
		center: coords,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	
	var map = new google.maps.Map(mapCanvas, mapOptions);
	
	var marker = new google.maps.Marker({
	    position: coords,
	    map: map,
	    title: 'Kay-Tee Boutique | Click For Contact Info'
	});
	
	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});
	
});