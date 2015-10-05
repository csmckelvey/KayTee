<!DOCTYPE HTML>
<HTML lang="en-US">
	<?php 
		include 'commonElements.php';
		printHeadTag("Homepage of Kay-Tee Baby Boutique", "Kay-Tee Baby Boutique Homepage", null, null);
	?>
	<BODY id="body" class="adjustHeight" >
		<DIV class="container">
			<?php printHeader("Home"); ?>
			<DIV CLASS="row text-center">
				<DIV class="col-sm-12">
					<DIV class="text-center">
						<IMG id="homeBanner" class="img img-center" src="images/home_banner.jpg" alt="Now Open Flyer" height="1100" width="800" />
					</DIV>
				</DIV>
			</DIV>
			<DIV id="contentPanel" class="row">
				<DIV class="col-sm-6">
					<P class="content">
						Please Call or Email<BR />
						<UL>
							<LI>Interested in displaying your handmade baby items in our store?</LI>
							<LI>Have any baby items you want sold on consignment?</LI>
							<LI>Have any baby items you want to sell to the store for cash or store credit?</LI>
							<LI>Here's where you can <A href="contact.html">Contact Us!</A></LI>
						</UL>
				</DIV>
				<DIV class="col-sm-6 col-vertical-align-18">
					<TABLE id="hours" class="table-striped table-bordered">
						<TR>
							<TH colspan="2">Hours Of Operation</TH>
						</TR>
						<TR>
							<TD>Monday - Tuesday</TD>
							<TD>10am - 6pm</TD>
						</TR>
						<TR>
							<TD>Wednesday</TD>
							<TD>Closed</TD>
						</TR>
						<TR>
							<TD>Thursday - Friday</TD>
							<TD>10am - 6pm</TD>
						</TR>
						<TR>
							<TD>Saturday - Sunday</TD>
							<TD>9am - 2pm</TD>
						</TR>
					</TABLE>
				</DIV>
			</DIV>
			<?php printFooter(true); ?>
		</DIV>
	</BODY>
</HTML>