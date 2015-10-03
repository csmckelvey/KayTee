<?php
function printHeadTag($description, $pagename, $js, $css) {
	writeHTML(0, "<HEAD>");
	writeHTML(2, "<TITLE>Kay-Tee Boutique</TITLE>");
	writeHTML(0, "");
	writeHTML(2, "<META charset='UTF-8'>");
	writeHTML(2, "<META name='language' content='EN'>");
	writeHTML(2, "<META name='keywords' content='baby, child, children, clothing, toys, consignment, cheap, sale, buy, sell, new, used, homemade, local, apple valley, victorville, hesperia, adelanto, california, ca, high desert'>");
	writeHTML(2, "<META name='description' content='$description'>");
	writeHTML(0, "");
	writeHTML(2, "<META name='url' content='http://www.kayteebabyboutique.com'>");
	writeHTML(2, "<META name='identifier-URL' content='http://www.kayteebabyboutique.com'>");
	writeHTML(0, "");
	writeHTML(2, "<META name='copyright' content='Kay-Tee Baby Boutique'>");
	writeHTML(2, "<META name='pagename' content='$pagename'>");
	writeHTML(2, "<META name='author' content='Charles McKelvey, https://www.linkedin.com/pub/charles-mckelvey/73/964/62'>");
	writeHTML(0, "");
	writeHTML(2, "<SCRIPT src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></SCRIPT>");
	writeHTML(2, "<SCRIPT src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></SCRIPT>");
	writeHTML(2, "<LINK href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' />");
	writeHTML(2, "<LINK href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet' />");
	writeHTML(0, "");
	writeHTML(2, "<SCRIPT src='js/global.js'></SCRIPT>");
	writeHTML(2, "<LINK rel='icon' href='images/logos/icon.png' />");
	writeHTML(2, "<LINK rel='stylesheet' type='text/css' href='css/global.css' />");
	writeHTML(2, "<LINK rel='stylesheet' type='text/css' href='css/navbar.css' />");
	
	if ($js != null) {
		writeHTML(0, "");
		$js = explode(",", $js);
		foreach ($js as $current) { writeHTML(2, "<SCRIPT src='$current'></SCRIPT>"); }
	}
	
	if ($css != null) {
		writeHTML(0, "");
		$css = explode(",", $css);
		foreach ($css as $current) { writeHTML(2, "<LINK rel='stylesheet' type='text/css' href='css/$current' />"); }
	}
	
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

function printHeader($active) {
	writeHTML(0, "<DIV id='header' class='row'>");
	writeHTML(4, "<DIV class='col-sm-4'>");
	writeHTML(5, "<A href='index.php'><IMG class='img-responsive img-center' src='images/logos/logo_extra_small.png' alt='Logo Image' /></A>");
	writeHTML(4, "</DIV>");
	writeHTML(4, "<DIV class='col-sm-8'>");
	writeHTML(5, "<DIV class='row'>");
	writeHTML(6, "<DIV class='col-sm-12'>");
	writeHTML(7, "<NAV class='navbar'>");
	writeHTML(8, "<DIV class='container-fluid'>");
	writeHTML(9, "<DIV class='navbar-header'>");
	writeHTML(10, "<BUTTON id='menuButton' type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>");
	writeHTML(11, "<TABLE>");
	writeHTML(12, "<TR>");
	writeHTML(13, "<TD id='collapsedMenuBars'>");
	writeHTML(14, "<DIV>");
	writeHTML(15, "<SPAN class='icon-bar'></SPAN>");
	writeHTML(15, "<SPAN class='icon-bar'></SPAN>");
	writeHTML(15, "<SPAN class='icon-bar'></SPAN>");
	writeHTML(15, "<SPAN class='icon-bar'></SPAN>");
	writeHTML(14, "</DIV>");
	writeHTML(13, "</TD>");
	writeHTML(13, "<TD id='collapsedMenuText'>");
	writeHTML(14, "<SPAN>Menu</SPAN>");
	writeHTML(13, "</TD>");
	writeHTML(12, "</TR>");
	writeHTML(11, "</TABLE>");
	writeHTML(10, "</BUTTON>");
	writeHTML(9, "</DIV>");
	writeHTML(9, "<DIV class='collapse navbar-collapse' id='myNavbar'>");
	writeHTML(10, "<UL class='nav navbar-nav navbar-right'>");
	
	if ($active == "Home") { 
		writeHTML(11, "<LI class='active'><A class='navlink active' href='index.php'>Home</A></LI>"); 
	}
	else { writeHTML(11, "<LI><A class='navlink' href='index.php'>Home</A></LI>"); }
	
	if ($active == "Gallery") {  writeHTML(11, "<LI class='active'><A class='navlink active' href='gallery.php'>Gallery</A></LI>"); }
	else { writeHTML(11, "<LI><A class='navlink' href='gallery.php'>Gallery</A></LI>"); }
	
	if ($active == "Contact") { writeHTML(11, "<LI class='active'><A class='navlink active' href='contact.php'>Contact</A></LI>"); }
	else { writeHTML(11, "<LI><A class='navlink' href='contact.php'>Contact</A></LI>"); }
	
	if ($active == "About") { writeHTML(11, "<LI class='active'><A class='navlink active' href='about.php'>About</A></LI>"); }
	else { writeHTML(11, "<LI><A class='navlink' href='about.php'>About</A></LI>"); }
	
	writeHTML(10, "</UL>");
	writeHTML(9, "</DIV>");
	writeHTML(8, "</DIV>");
	writeHTML(7, "</NAV>");
	writeHTML(6, "</DIV>");
	writeHTML(5, "</DIV>");
	writeHTML(5, "<DIV class='row'>");
	writeHTML(6, "<DIV class='col-sm-12 col-vertical-align-55 socialMediaRow'>");
	writeHTML(7, "<A href='https://twitter.com/kayteebabybout1'><SPAN class='fa fa-twitter fa-3x'></SPAN></A>");
	writeHTML(7, "<A href='https://www.facebook.com/kayteebabyboutique'><SPAN class='fa fa-facebook fa-3x'></SPAN></A>");
	writeHTML(6, "</DIV>");
	writeHTML(5, "</DIV>");
	writeHTML(4, "</DIV>");
	writeHTML(3, "</DIV>");
}

function printBanner() {
	writeHTML(0, "<DIV id='banner' class='row text-center'>");
	writeHTML(4, "<DIV class='col-sm-12'>");
	writeHTML(5, "<A href='index.php'><IMG id='bannerImage' src='images/ergo.jpeg' alt='Logo Image' height='150' /></A>");
	writeHTML(4, "</DIV>");
	writeHTML(3, "</DIV>");
}

function writeHTML($tabs, $line) {
	for ($i = 0; $i < $tabs; $i++) { $temp = $temp . "\t"; }
	echo($temp . $line . "\n");
}
?>