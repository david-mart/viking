<?php
	$homepage = $pages->get('/');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page->seo_title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="/site/templates/img/favicon.ico" type="image/x-icon">
		
		<!-- Stlylesheet -->
		<link rel="stylesheet" href="<?php echo AIOM::CSS(array('css/style.css', 'css/colors/red.css')); ?>">
		
	</head>
	<body> 
		
		<!-- Start Preloader -->
		<div id="preloader">
			<div class="loader">  
				<img src="/site/templates/img/assets/Viking-Logo-Big.png" alt=""> 
			</div>
		</div>
		<!-- End Preloader -->
		
		<!-- Start Header -->
		<header>
			<nav class="navbar navbar-default navbar-alt" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" rel="home" href="/">
							<img src="/site/templates/img/assets/Viking-Logo-White.png" alt="" class="logo-big">
							<img src="/site/templates/img/assets/Viking-Logo-Dark.png" alt="" class="logo-small">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="nav navbar-nav  navbar-right">
							<?php $menu_items = $homepage->children();?>
							<?php $menu_items->prepend($homepage);?>
							<?php foreach ($menu_items as $menu_item):?>
								<?php $activeClass = $page->id === $menu_item->id ? ' class="current"' : '';?> 
								<li><a href="<?php echo $menu_item->url;?>"<?=$activeClass;?>><?php echo $menu_item->title;?></a></li>
							<?php endforeach;?>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>
		<!-- End Header -->