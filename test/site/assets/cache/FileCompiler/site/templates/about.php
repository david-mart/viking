<?php include(\ProcessWire\wire('files')->compile("includes/head.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
 
<section id="page-top" style="height:400px">
	<div class="hero">
		<img src="<?php echo $page->background->width(1920)->url;?>" alt="">
		<div class="page-top-title text-center">
			<h2 class="white op-1"><?php echo $page->title;?></h2>
			<p class="home-subheading op-1"><?php echo $page->subheading;?></p>
		</div>
	</div>
</section>

<div class="site-wrapper content">

	<section id="s-paragraphs">
		<div class="container"> 
			<div class="row shortcode-heading about-page">
			
				<div class="col-md-8 wow fadeIn">
					<?php echo $page->edit('wysiwyg'); ?>
				</div>	 
				
				<div class="col-md-4 wow fadeIn check-list-1">
					<?php echo $page->edit('sm_wysiwyg'); ?>
				</div>
				
			</div>
		</div>
	</section>  

	<!-- Start Fun Facts Section -->
	<section id="fun-facts" class="bg-grey">
		<div class="container">

			<div class="col-md-12 text-center wow fadeInUp">
				<h3 class="section-title">Dealership Statistics</h3> 
				<p class="subheading">Browse through the vast selection of vehicles that have recently been added to our inventory.</p>
			</div>

			<div class="counter-row row text-center wow fadeInUp">
				<div class="col-md-3 col-sm-6 fact-container">
					<div class="fact">
						<span class="counter highlight">1840</span> 
						<h4>Happy Customers</h4>
						<p>Sibh <span class="highlight">vulputate</span> vivamus</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fact-container">
					<div class="fact">
						<span class="counter highlight">385</span>
						<h4>Finished Projects</h4>
						<p>Duis vulputate <span class="highlight">nibh</span> sit</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fact-container">
					<div class="fact">
						<h2 class="highlight">Million</h2>
						<h4>Lines of codes written</h4>
						<p>Vivamus a <span class="highlight">placerat</span> ante eget</p>
					</div>
				</div> 
				<div class="col-md-3 col-sm-6 fact-container">
					<div class="fact">
						<span class="counter highlight">25</span>
						<h4>Winning Awards</h4>
						<p>Fusce <span class="highlight">tincidunt</span> nulla</p>
					</div>
				</div>
			</div> 
				
		</div>
	</section>
	<!-- End Fun Facts Section --> 

<?php include(\ProcessWire\wire('files')->compile("includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>