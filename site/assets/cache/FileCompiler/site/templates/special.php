<?php include(\ProcessWire\wire('files')->compile("includes/head.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>

<section id="page-top" style="height:400px">
	<div class="hero">
		<img src="<?php echo $page->parent->background->width(1920)->url;?>" alt="">
		<div class="page-top-title text-center">
			<h2 class="white op-1"><?php echo $page->title;?></h2>
			<p class="home-subheading op-1"><?php echo $page->subheading;?></p>
		</div>
	</div>
</section>

<div class="site-wrapper content">

	<section id="s-paragraphs" class="specials-page special-page">
		<div class="container"> 
			<div class="row shortcode-heading">

				<div class="col-md-12 btns-block">
					<?php if ($page->prev->id):?>
						<a class="btn btn-primary btn-xs" href="<?php echo $page->prev->url;?>">
							<i class="icon ion-arrow-left-a"></i> 
							<span>Prev Vehicle</span>
						</a>
					<?php endif;?>
					<a class="btn btn-primary btn-xs" href="#">
						<i class="icon ion-information-circled"></i> 
						<span>Request More Info</span>
					</a>
					<a class="btn btn-primary btn-xs" href="#">
						<i class="icon ion-clipboard"></i> 
						<span>Schedule Test Drive</span>
					</a>
					<a class="btn btn-primary btn-xs" href="#" id="btn-print">
						<i class="icon ion-printer"></i> 
						<span>Print This Vehicle</span>
					</a>
					<a class="btn btn-primary btn-xs" href="#">
						<i class="icon ion-forward"></i> 
						<span>Email to a Friend</span>
					</a>
					<?php if ($page->next->id):?>
						<a class="btn btn-primary btn-xs" href="<?php echo $page->next->url;?>">
							<i class="icon ion-arrow-right-a"></i> 
							<span>Next Vehicle</span>
						</a>
					<?php endif;?>
				</div>
			
				<div class="col-md-8 wow fadeIn">
					<div class="one-car">
						<div id="sync1" class="owl-carousel">
							<?php foreach ($page->images as $image):?>
								<div class="item"><img src="<?php echo $image->size(750,450)->url;?>" alt=""></div>
							<?php endforeach;?>
						</div>
						<div id="sync2" class="owl-carousel">
							<?php foreach ($page->images as $image):?>
								<div class="item"><img src="<?php echo $image->size(150,100)->url;?>" alt=""></div>
							<?php endforeach;?>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 wow fadeIn">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="car-info">
								<ul class="contact-info-list">
									<li><strong>Down Payment:</strong> <span>$ <?php echo $page->down_payment;?></span></li>
									<li><strong>Lease Term:</strong> <span><?php echo $page->lease_term;?> month</span></li>
									<li><strong>Year:</strong> <span><?php echo $page->year;?></span></li>
									<li><strong>Make:</strong> <span><?php echo $page->make;?></span></li>
									<li><strong>Model:</strong> <span><?php echo $page->model;?></span></li>
									<li><strong>Body Style:</strong> <span><?php echo $page->body_style;?></span></li>
									<li><strong>Transmission:</strong> <span><?php echo $page->transmission;?></span></li>
									<?php $mpg = explode('/', $page->mpg);?>
									<li><strong>MPG:</strong> <span><?=$mpg[0];?> City / <?=$mpg[1];?> Highway</span></li>
									<li><strong>Mileage:</strong> <span><?php echo $page->mileage?></span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body text-center fuel-efficent">
							<div class="col-xs-12">
								<h4>Fuel Efficiency Rating</h4>
							</div>
							<div class="col-xs-4">
								<p>City:</p>
								<p class="fe-digit">25</p>
							</div>
							<div class="col-xs-4">
								<p class="fe-icon"><i class="icon ion-speedometer"></i></p>
							</div>
							<div class="col-xs-4">
								<p>Highway:</p>
								<p class="fe-digit">32</p>
							</div>
							<div class="col-xs-12">
								<p class="fe-note">All advertised prices exclude government fees and taxes, any finance charges. Actual rating will vary with options, driving conditions, driving habits and vehicle condition. Mileage restrictions may apply for lease vehicles. Residual values are available upon request. Any additional packages, metallic paint and destination charges may apply.</p>
							</div>
						</div>
					</div>
					<div>
						<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
						<script src="//yastatic.net/share2/share.js"></script>
						<div class="ya-share2" data-services="facebook,gplus,pinterest,twitter" data-image="http://placehold.it/300x300" data-counter=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>  
<?php include(\ProcessWire\wire('files')->compile("includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>