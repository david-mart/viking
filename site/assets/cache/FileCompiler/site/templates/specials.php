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
			<div class="row shortcode-heading specials-page">
			
				<?php $cars = $page->children();?>
				<?php foreach ($cars as $car):?>
					<div class="col-md-10 col-md-offset-1 wow fadeIn">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-md-4 car-photo">
									<a href="<?php echo $car->url;?>"><img src="<?php echo $car->images->first->size(250,150)->url;?>" alt=""></a>
								</div>
								<div class="col-md-4 car-info">
									<h3><?php echo $car->title;?></h3>
									<ul class="contact-info-list">
										<li><strong>Down Payment:</strong> <span>$ <?php echo $car->down_payment;?></span></li>
										<li><strong>Lease Term:</strong> <span><?php echo $car->lease_term;?></span></li>
										<li><strong>Year:</strong> <span><?php echo $car->year;?></span></li>
										<li><strong>Make:</strong> <span><?php echo $car->make;?></span></li>
										<li><strong>Model:</strong> <span><?php echo $car->model;?></span></li>
									</ul>
								</div>
								<div class="col-md-4 text-right">
									<a class="btn btn-primary btn-xs" href="<?php echo $car->url;?>" style="margin-top: 140px;">
										<span>View Details</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;?>

			</div>
		</div>
	</section>  
<?php include(\ProcessWire\wire('files')->compile("includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>