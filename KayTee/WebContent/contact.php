<!DOCTYPE HTML>
<HTML lang="en-US">
	<?php 
		include 'commonElements.php';
		printHeadTag("Contact Page of Kay-Tee Baby Boutique", "Kay-Tee Baby Boutique Contact Page", "js/map.js,https://maps.googleapis.com/maps/api/js", null);
	?>
	<BODY id="body" class="adjustHeight">
		<DIV class="container">
			<?php printHeader("Contact"); ?>
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