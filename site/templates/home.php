<?php include("includes/head.inc");?>

<!-- Start Home Revolution Slider Parallax Section -->
<section id="home-revolution-slider">
	<div class="hero">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<?php foreach ($page->images as $slide):?>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="<?php echo $slide->size(180,110)->url;?>" data-delay="10000"  data-saveperformance="on" data-title="">
							<img src="<?php echo $slide->size(1920,400)->url;?>" alt="slidebg1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
						</li>
					<?php endforeach;?>
				</ul>
				<div class="tp-bannertimer"></div>	
			</div>

			<div class="home-bottom">
				<div class="container text-center">
					<div class="move bounce">
						<a href="#s-paragraphs" class="ion-ios-arrow-down btn-scroll"></a>
					</div>  
				</div> 
			</div>

		</div>	
	</div>
</section>
<!-- End Home Revolution Slider Parallax Section -->
 
<div class="site-wrapper content">
	

	<!-- Start Team Section -->
	<section id="team" class="bg-grey">
		<div class="container"> 
			
			<div class="col-md-12 text-center wow fadeInUp">
				<h3 class="section-title">RECENT VEHICLES</h3> 
				<p class="subheading">Browse through the vast selection of vehicles that have recently been added to our inventory.</p>
			</div>
			
			<div class="row" id="recent-cars">

				<?php foreach ($page->cars as $car):?>
					<div class="item team-member">
						<div class="effect effects wow fadeInUp">
							<div class="img">
								<img src="<?php echo $car->images->first->size(325,225)->url;?>" class="img-responsive" alt="" />
								<div class="overlay">
									<ul class="expand">
										<li class="social-icon"><a href="<?php echo $car->url;?>"><i class="icon ion-ios-search-strong"></i></a></li>
									</ul>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
						</div>
						<div class="member-info wow fadeInUp">
							<h4><?php echo $car->title;?></h4>
							<?php if($car->price != ''):?>
								<h5 class="highlight">$ <?php echo $car->price;?></h5>
							<?php else:?>
								<h5 class="highlight">Call for Price</h5>
							<?php endif;?>
						</div>
					</div>
				<?php endforeach;?>

			</div>
		</div>
	</section>
	<!-- End Team Section -->   
	

	<section id="s-paragraphs">

		<div class="call-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="action-5-info">
							<h3 class="uppercase">Find out about the latest new car deals & special offers</h3>
						</div>
						<div class="action-5-btn">
							<a href="<?php echo $pages->get("template=specials")->url;?>" class="btn btn-primary btn-responsive">View Special Offers</a>
						</div>
					</div>
				</div>	
			</div>
		</div>

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

	<!-- Start Testimonials Section -->   
	<section id="testimonials" class="parallax-section-7">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 text-center">
					<h3 class="section-title white wow fadeInUp">What clients say.</h3>
					<p class="subheading grey wow fadeInUp">Hear what over <span class="highlight">4000 satisfied</span> customers say about us!</p>
				</div>
				
				<div class="col-md-12 text-center wow fadeInUp">
					<div id="owl-testimonials" class="owl-carousel">

						<?php foreach ($page->testimonials as $testimonial):?>
							<div>
								<div class="testimonial">
									<i class="icon-left ion-quote ion-2x highlight"></i>
										<span> 
											<?php echo $testimonial->t_summary;?>
										</span>
									<i class="icon-right ion-quote ion-2x highlight"></i>
								</div>
								<div class="testimonial-name">
									<img src="<?php echo $testimonial->t_photo->size(80,80)->url;?>" alt="client">
									<h4 class="white"><?php echo $testimonial->t_name;?></h4>
									<p><?php echo $testimonial->t_date;?></p>
									<?php if($testimonial->t_link != ''):?>
										<a href="<?php echo $testimonial->t_link;?>">Read More</a>
									<?php endif;?>
								</div>
							</div>
						<?php endforeach;?>
						
					</div>
				</div> 
				
			</div>
		</div>
	</section>
	<!-- End Testimonials Section -->

<?php include("includes/foot.inc");?>