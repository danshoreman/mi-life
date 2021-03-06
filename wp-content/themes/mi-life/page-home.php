<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="home-map">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/map.png" alt="" class="">
		<div class="down-arrow"></div>
	</div>
	<div class="row">
		<div class="small-12 columns" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
				<section class="entry-content">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
					<?php the_content(); ?>
				</section>
			</article>
			<?php endwhile; ?>
			<?php else : ?>
			<article class="post-not-found">
				<header class="not-found-header">
					<h2><?php _e( 'Nothing Found!' ); ?></h2>
				</header>
				<section class="not-found-content">
					<p><?php _e( 'Please check what you are looking for.' ); ?></p>
				</section>
			</article>
			<?php endif; ?>
		</div>
	</div>
	<?php include_once('partials/our-services.php'); ?>

<?php get_footer();