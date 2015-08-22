var captionBackgroundColor = "white";

$(document).ready(function () {
	$("#toggleGalleryCaptionsButton").click(function() {
		$(".carousel-caption").toggle();
	});
	
	$("#toggleGalleryBackgroundButton").click(function() {
		if ($(".carousel-caption").css("background-color") == "rgba(0, 0, 0, 0)") {
			$(".carousel-caption").css("background-color", captionBackgroundColor);
			$(".carousel-indicators").css("background-color", captionBackgroundColor);
		}
		else {
			$(".carousel-caption").css("background-color", "transparent");
			$(".carousel-indicators").css("background-color", "transparent");
		}
	});
});
