<!DOCTYPE HTML>
<HTML lang="en-US">
	<?php 
		include 'commonElements.php';
		printHeadTag("Contact Page of Kay-Tee Baby Boutique", "Kay-Tee Baby Boutique Contact Page", "js/map.js,https://maps.googleapis.com/maps/api/js", "");
	?>
	<BODY id="body" class="adjustHeight">
		<DIV class="container">
			<DIV id="header" class="row">
				<DIV class="col-sm-4">
					<A href="index.html"><IMG class="img-responsive img-center" src="images/logos/logo_extra_small.png" alt="Logo Image" /></A>
				</DIV>
				<DIV class="col-sm-8">
					<DIV class="row">
						<DIV class="col-sm-12">
							<NAV class="navbar">
								<DIV class="container-fluid">
									<DIV>
										<UL class="nav navbar-nav navbar-right">
											<LI><A class="navlink" href="index.html">Home</A></LI>
											<LI><A class="navlink" href="gallery.html">Gallery</A></LI> 
											<LI class="active"><A class="navlink active" href="contact.html">Contact</A></LI>
											<LI><A class="navlink" href="about.html">About</A></LI> 
										</UL>
									</DIV>
								</DIV>
							</NAV>
						</DIV>
					</DIV>
					<DIV class="row">
						<DIV class="col-sm-12 col-vertical-align-55 socialMediaRow">
							 <a href="https://twitter.com/kayteebabybout1"><span class="fa fa-twitter fa-3x"></span></a>
							 <a href="https://www.facebook.com/kayteebabyboutique"><span class="fa fa-facebook fa-3x"></span></a>
						</DIV>
					</DIV>
				</DIV>
			</DIV>
			<DIV id="banner" class="row text-center">
				<DIV class="col-sm-12">
					<A href="index.html"><IMG src="images/coming_soon_logo.jpg" alt="Logo Image"  height="100" /></A>
				</DIV>
			</DIV>
			<DIV CLASS="row text-center">
				<DIV class="col-sm-12">
					<DIV class="text-center" style="margin-left: 20px;">
						<P>
							<ADDRESS>
								Kay-Tee Baby Boutique<BR />
								21885 US HWY 18 Suite #2<BR />
								Apple Valley, CA 92307<BR />
								Fax (760) 810 - 0678<BR />
								Store (760) 810 - 0488<BR />
								<A href="mailto:kayteebabyboutique@gmail.com">kayteebabyboutique@gmail.com</A><BR /><BR />
								<A href="https://www.google.com/maps/dir//21885+CA-18,+Apple+Valley,+CA+92307/@34.5001855,-117.1860301,19z/data=!4m13!1m4!3m3!1s0x80c361cfef29aa49:0xa75c12fe6c99d625!2s21885+CA-18,+Apple+Valley,+CA+92307!3b1!4m7!1m0!1m5!1m1!1s0x80c361cfef29aa49:0xa75c12fe6c99d625!2m2!1d-117.1860301!2d34.5001855!6m1!1e1">Get Directions</A>
							</ADDRESS>
					</DIV>
				</DIV>
			</DIV>
			<DIV CLASS="row text-center">
				<DIV class="col-sm-12">
					<DIV id="map-canvas"></DIV>
				</DIV>
			</DIV>
			<?php printFooter(true); ?>
		</DIV>
	</BODY>
</HTML>