<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="title-block">
		<div class="row">
			<div class="small-12 columns">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>
	<?php include_once('partials/our-services.php'); ?>

<?php get_footer();