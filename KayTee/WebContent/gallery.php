<!DOCTYPE HTML>
<HTML lang="en-US">
	<?php 
		include 'commonElements.php';
		printHeadTag("Photo Gallery of Kay-Tee Baby Boutique", "Kay-Tee Baby Boutique Photo Gallery", null, "carousel.css");
	?>
	<BODY id="body">
		<DIV class="container">
			<?php printHeader("Gallery"); ?>
			<DIV id="carousel" class="row">
				<DIV class="col-sm-12">
					<DIV id="myCarousel" class="carousel slide" data-ride="carousel">
						<OL id="slideshowIndicators" class="carousel-indicators">
							<?php
								$counter = 0;
								$imagePath = "images/slideshow/";
								$dir = new DirectoryIterator($imagePath);
								
								foreach ($dir as $fileinfo) {
								    if (!$fileinfo->isDot()) {
								    	if (($counter + 1) == 1) { echo("<LI data-target='#myCarousel' data-slide-to='0' class='active'></LI>\n"); }
								    	else { echo("\t\t\t\t\t\t\t<LI data-target='#myCarousel' data-slide-to='" . $counter . "'></LI>\n"); }
								    	$counter = $counter + 1;
								    }
								}
							?>
						</OL>
						<DIV class="carousel-inner" role="listbox">
							<?php
								$counter = 0;
								$imagePath = "images/slideshow/";
								$dir = new DirectoryIterator($imagePath);
								
								foreach ($dir as $fileinfo) {
								    if (!$fileinfo->isDot()) {
								    	if (($counter + 1) == 1) { echo("<DIV class='item active'>\n"); }
								    	else { echo("\t\t\t\t\t\t\t<DIV class='item'>\n"); }
								    	echo("\t\t\t\t\t\t\t\t<IMG src='" . $imagePath . $fileinfo->getFilename() . "' alt='Slide Show Image " . $counter . "' class='img-responsive img-center'>\n");
								    	echo("\t\t\t\t\t\t\t</DIV>\n");
								    	$counter = $counter + 1;
								    }
								}
							?>
							<A class="left carousel-control" href="#myCarousel" role="button" data-slide="next">
								<SPAN class="glyphicon glyphicon-chevron-left" aria-hidden="true"></SPAN>
								<SPAN class="sr-only">Previous</SPAN>
							</A>
							<A class="right carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<SPAN class="glyphicon glyphicon-chevron-right" aria-hidden="true"></SPAN>
								<SPAN class="sr-only">Next</SPAN>
							</A>
						</DIV>
					</DIV>
				</DIV>
			</DIV>
			<?php printFooter(true); ?>
		</DIV>
	</BODY>
</HTML>