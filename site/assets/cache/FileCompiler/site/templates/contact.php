<?php include(\ProcessWire\wire('files')->compile("includes/head.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
 
<section id="page-top" style="height:400px">
	<div class="hero">
		<img src="<?php echo $page->background->width(1920)->url;?>" alt="hero">
		<div class="page-top-title text-center">
			<h2 class="white op-1"><?php echo $page->title;?></h2>
			<p class="home-subheading op-1"><?php echo $page->subheading;?></p>
		</div>
	</div>
</section>

<div class="site-wrapper content">

	<section id="contact">
		<div class="container">
			<div class="row">
				
				<div class="col-md-6 wow fadeInUp" style="margin-top:20px;">
					<h3>CONTACT INFORMATION</h3>
					<ul class="contact-info-list">
	        			<li><i class="icon ion-map"></i><strong>Address:</strong> <span><?php echo $page->address;?></span></li>
	        			<li><i class="icon ion-ios-telephone"></i><strong>Phone:</strong> <span><?php echo $page->phone;?></span></li>
	        			<li>
	        				<i class="fa ion-ios-email"></i>
	        				<strong>Email:</strong> 
	        				<a href="mailto:<?php echo $page->contact_email;?>"><?php echo $page->contact_email;?></a>
	        			</li>
	        		</ul>
					<h3>BUSINESS HOURS</h3>
					<table class="table no-border font-12px hours_table ">
						<thead>
							<tr>
								<td colspan="2" class="text-left"><strong>Sales Department</strong></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Mon:</td>
								<td>8:00am - 5:00pm</td>
							</tr>
							<tr>
								<td>Tue:</td>
								<td>8:00am - 9:00pm</td>
							</tr>
							<tr>
								<td>Wed:</td>
								<td>8:00am - 5:00pm</td>
							</tr>
							<tr>
								<td>Thu:</td>
								<td>8:00am - 9:00pm</td>
							</tr>
							<tr>
								<td>Fri:</td>
								<td>8:00am - 6:00pm</td>
							</tr>
							<tr>
								<td>Sat:</td>
								<td>9:00am - 5:00pm</td>
							</tr>
							<tr>
								<td>Sun:</td>
								<td>9:00am - 5:00pm</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-6 wow fadeInUp">
					<h3>CONTACT FORM</h3>

					<div id="message"></div>
					<!-- Contact Form will be functional only on your server. Upload to your server when testing. -->
					<form method="post" action="/action/send_contact/" name="contactform" id="contactform">
						<fieldset>
								<input name="name" type="text" id="name" placeholder="Name"/> 
								<input name="email" type="text" id="email" placeholder="Email"/>  
						</fieldset>
						<fieldset> 
								<textarea name="comments" cols="40" rows="5" id="comments" placeholder="Message"></textarea>
						</fieldset>
						<input type="submit" class="submit" id="submit" value="Send Message" />
					</form>
				</div>  					 
			</div>
		</div>
	</section>
	
	<!-- Start Google Map Section -->
	<div id="map" data-address="<?php echo $page->address;?>"></div>
	<!-- End Google Map Section -->

<?php include(\ProcessWire\wire('files')->compile("includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>