<?php
function printHeader($description, $pagename, $js, $css) {
echo("
	<HEAD>
		<TITLE>Kay-Tee Boutique</TITLE>
		
		<META charset='UTF-8'>
		<META name='language' content='EN'>
		<META name='keywords' content='baby, child, children, clothing, toys, consignment, cheap,
		                               sale, buy, sell, new, used, homemade, local, apple valley, 
									   victorville, hesperia, adelanto, california, ca, high desert'>
		<META name='description' content='$description'>
		
		<META name='url' content='http://www.kayteebabyboutique.com'>
		<META name='identifier-URL' content='http://www.kayteebabyboutique.com'>
		
		<META name='copyright' content='Kay-Tee Baby Boutique'>
		<META name='pagename' content='$pagename'>
		<META name='author' content='Charles McKelvey, https://www.linkedin.com/pub/charles-mckelvey/73/964/62'>
		
		<SCRIPT src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></SCRIPT>
		<SCRIPT src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></SCRIPT>
		<LINK href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' />
		<LINK href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet' />
		
		<SCRIPT src='js/global.js'></SCRIPT>
		<LINK rel='icon' href='images/logos/icon.png' />
		<LINK rel='stylesheet' type='text/css' href='css/global.css' />
		<LINK rel='stylesheet' type='text/css' href='css/navbar.css' />
");

$scripts = explode(",", $js);
$stylecheets = explode(",", $css);

foreach ($scripts as $current) { echo("<SCRIPT src='js/$current'></SCRIPT>"); }
foreach ($stylecheets as $current) { echo("<LINK rel='stylesheet' type='text/css' href='css/$current' />"); }

echo("	</HEAD>");
}
?>