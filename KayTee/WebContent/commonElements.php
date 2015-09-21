<?php
function printHeadTag($description, $pagename, $js, $css) {
	writeHTML(1, "<HEAD>");
	writeHTML(2, "<TITLE>Kay-Tee Boutique</TITLE>");
	
	writeHTML(2, "<META charset='UTF-8'>");
	writeHTML(2, "<META name='language' content='EN'>");
	writeHTML(2, "<META name='keywords' content='baby, child, children, clothing, toys, consignment, cheap, sale, buy, sell, new, used, homemade, local, apple valley, victorville, hesperia, adelanto, california, ca, high desert'>");
	writeHTML(2, "<META name='description' content='$description'>");
	
	writeHTML(2, "<META name='url' content='http://www.kayteebabyboutique.com'>");
	writeHTML(2, "<META name='identifier-URL' content='http://www.kayteebabyboutique.com'>");
	
	writeHTML(2, "<META name='copyright' content='Kay-Tee Baby Boutique'>");
	writeHTML(2, "<META name='pagename' content='$pagename'>");
	writeHTML(2, "<META name='author' content='Charles McKelvey, https://www.linkedin.com/pub/charles-mckelvey/73/964/62'>");
	
	writeHTML(2, "<SCRIPT src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></SCRIPT>");
	writeHTML(2, "<SCRIPT src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></SCRIPT>");
	writeHTML(2, "<LINK href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' />");
	writeHTML(2, "<LINK href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet' />");
	
	writeHTML(2, "<SCRIPT src='js/global.js'></SCRIPT>");
	writeHTML(2, "<LINK rel='icon' href='images/logos/icon.png' />");
	writeHTML(2, "<LINK rel='stylesheet' type='text/css' href='css/global.css' />");
	writeHTML(2, "<LINK rel='stylesheet' type='text/css' href='css/navbar.css' />");
	
	$scripts = explode(",", $js);
	$stylecheets = explode(",", $css);
	
	foreach ($scripts as $current) { writeHTML(2, "<SCRIPT src='$current'></SCRIPT>"); }
	foreach ($stylecheets as $current) { writeHTML(2, "<LINK rel='stylesheet' type='text/css' href='css/$current' />"); }
	
	writeHTML(1, "</HEAD>");
}

function printFooter($hideName) {
	writeHTML(0, "<DIV id='footer' class='row row-eq-height text-center'>");
	writeHTML(4, "<DIV class='col-sm-2'>");
	writeHTML(5, "<IMG class='img' alt='HTML 5 Valid Webpage' src='images/logos/html5.png'>");
	writeHTML(4, "</DIV>");
	writeHTML(4, "<DIV class='col-sm-8 col-vertical-align-30' style='overflow: hidden;'>");
	
	if ($hideName) { writeHTML(5, "<SPAN id='footerText' class='some'>&copy; 2015</SPAN>"); }
	else {writeHTML(5, "<SPAN id='footerText' class='some'>Website by <A href='https://www.linkedin.com/pub/charles-mckelvey/73/964/62'>Charles McKelvey</A></SPAN>"); }

	writeHTML(4, "</DIV>");
	writeHTML(4, "<DIV class='col-sm-2'>");
	writeHTML(5, "<IMG class='img' alt='CSS 3 Valid Webpage' src='images/logos/css3.png'>");
	writeHTML(4, "</DIV>");
	writeHTML(3, "</DIV>");
}

function writeHTML($tabs, $line) {
	for ($i = 0; $i < $tabs; $i++) { $temp = $temp . "\t"; }
	echo($temp . $line . "\n");
}
?>