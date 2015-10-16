<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="title-block">
		<div class="row">
			<div class="small-12 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/telecare-gr.svg" alt="" class="title-icon">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<section class="heroVid">
		<div class="row">
			<div class="small-12 columns">
				<?php the_field('video_text'); ?>
				<a href="<?php the_field('video_link'); ?>" class="playBtn fancybox-media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/playVideo.png" class="" alt="">
				Play Video</a>
			</div>
		</div>
	</section>
	<section class="introPanel">
		<div class="row">
			<div class="small-12 columns">
				<div class="thinkText">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
						<section class="entry-content">
							<?php the_content(); ?>
						</section>
					</article>
				</div>
			</div>
		</div>
	</section>
	<section class="thinkBlock">
		<div class="row">
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<?php the_field('think_block_01'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/specialist-gps.png" class="threeIcon" alt="">
				</div>
			</div>
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<?php the_field('think_block_02'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/24hour-support.png" class="threeIcon" alt="">
				</div>
			</div>
			<div class="small-12 medium-4 columns">
				<div class="thinkContent">
					<?php the_field('think_block_03'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/award-winning.png" class="threeIcon" alt="">
				</div>
			</div>
		</div>
		<div class="roundel">
			<p>Want to have a <br>think about it?</p>
			<p class="large">Free<br>8 week<br>trial</p>
		</div>
	</section>
	<section class="dealBlock">
		<div class="dealInner">
			<div class="row">
				<div class="small-12 columns">
					<?php the_field('deal_introduction'); ?>
				</div>
			</div>
			<div class="row">
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/portable-alarm.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_01'); ?></p>
				</div>
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/home-installation.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_02'); ?></p>
				</div>
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/call-centre.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_03'); ?></p>
				</div>
				<div class="small-6 medium-3 columns">
					<div class="dealIcon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/icons/gp-monitoring.png" class="" alt="">
					</div>
					<p><?php the_field('deal_block_04'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
	
	<?php include_once('partials/our-services.php'); ?>

<?php get_footer();