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

	<section id="blog" class="">
		<div class="container">
			<div id="masonry">

				<?php foreach ($page->testimonials as $testimonial):?>
					<div class="column">
						<div class="blog-column">
							<img class="img-responsive blog-img" src="<?php echo $testimonial->t_photo->size(110,110)->url;?>" alt="">
							<div class="column-info">                          
								<ul class="blog-post-info">
									<li><a href="#"><i class="ion-person"></i> <?php echo $testimonial->t_name;?></a></li>
									<li><a href="#"><i class="ion-clock"></i> <?php echo $testimonial->t_date;?></a></li>  
								</ul>    
								<p><?php echo $testimonial->t_summary;?></p>
								<?php if($testimonial->t_link != ''):?>
									<a class="btn btn-primary btn-xs" href="<?php echo $testimonial->t_link;?>" target="blank">Read More</a>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endforeach;?>

				<hr>

			</div>
		</div>
	</section>

<?php include(\ProcessWire\wire('files')->compile("includes/foot.inc",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>