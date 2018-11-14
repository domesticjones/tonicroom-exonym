<?php
  /* ==============
     DEFAULT HEADER
     ============== */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="container">
      <header id="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <nav class="nav nav-head" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<ul class="nav-parent">
						<li>
							<a href="<?php the_permalink(87); ?>">The Studio</a>
							<ul id="nav-studio" class="nav-child">
								<li>
									<a href="<?php the_permalink(87); ?>#info">Info</a>
								</li>
								<li>
									<a href="<?php the_permalink(87); ?>#equipment">Equipment</a>
								</li>
								<li>
									<a href="<?php the_permalink(87); ?>#rates">Rates</a>
								</li>
								<li>
									<a href="<?php the_permalink(87); ?>#photos">Photos</a>
								</li>
								<li>
									<a href="<?php the_permalink(87); ?>#nearby">Nearby</a>
								</li>
								<li>
									<a href="<?php the_permalink(87); ?>#help">Help</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php the_permalink(89); ?>">Mastering</a>
							<ul id="nav-mastering" class="nav-child">
								<li>
									<a href="<?php the_permalink(89); ?>#info">Info</a>
								</li>
								<li>
									<a href="<?php the_permalink(89); ?>#equipment">Equipment</a>
								</li>
								<li>
									<a href="<?php the_permalink(89); ?>#rates">Rates</a>
								</li>
								<li>
									<a href="<?php the_permalink(89); ?>#photos">Photos</a>
								</li>
								<li>
									<a href="<?php the_permalink(89); ?>#submission">Submission &amp; Payment</a>
								</li>
								<li>
									<a href="<?php the_permalink(89); ?>#help">Help</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link('discography'); ?>">Discography</a>
						</li>
						<li>
							<a href="<?php echo get_post_type_archive_link('knowledgecenter'); ?>">Knowledge Center</a>
						</li>
						<li>
							<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Press</a>
						</li>
					</ul>
        </nav>
				<a href="<?php echo get_home_url(); ?>" id="logo">
					<img src="<?php ex_logo(); ?>" alt="Logo for <?php ex_brand(); ?>" />
				</a>
        <nav class="nav nav-foot" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<ul>
						<li>
							<a href="">Rates</a>
						</li>
						<li>
							<a href="">Amenities</a>
						</li>
						<li>
							<a href="">Contact</a>
						</li>
						<li>
							<a href="">Payments</a>
						</li>
						<li>
							<a href="">Privacy Policy</a>
						</li>
					</ul>
        </nav>
				<nav id="nav-responsive">
					<a href="#" id="responsive-nav-toggle">
	          <span class="line"></span>
	          <span class="line"></span>
	          <span class="line"></span>
					</a>
					<a href="<?php echo get_home_url(); ?>" class="logo-responsive">
						<img src="<?php ex_logo(); ?>" />
					</a>
				</nav>
      </header>
