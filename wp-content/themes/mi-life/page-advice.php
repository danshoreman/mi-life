<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="title-block">
		<div class="row">
			<div class="small-12 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/advice-gr.svg" alt="" class="title-icon">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
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
	<a id="acc-anchor"></a>
	<dl class="accordion">
		<dt class="acc-title">
			<span>ACCESS &amp; ASSESSMENT <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/down-arrow-or.svg" class="acc-arrow" alt="Access &amp; Assessment"></span>
		</dt>
		<dd>
			<div class="row">
				<div class="small-12 columns">
					<article id="post-access-assess" <?php post_class(); ?> role="article">
						<section class="entry-content">
							<?php the_field('access_assessment'); ?>
						</section>
					</article>
				</div>
			</div>
		</dd>
		<dt class="acc-title">
			<span>ALTERNATIVE ACCOMMODATION <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/down-arrow-or.svg" class="acc-arrow" alt="Access &amp; Assessment"></span>
		</dt>
		<dd>
			<div class="row">
				<div class="small-12 columns">
					<article id="post-access-assess" <?php post_class(); ?> role="article">
						<section class="entry-content">
							<?php the_field('alternative_accommodation'); ?>
						</section>
					</article>
				</div>
			</div>
		</dd>
	</dl>
	<div class="row">
		<div class="small-12 columns top-btn">
			<div class="to-top">Back to top</div>	
		</div>
	</div>
	<?php include_once('partials/our-services.php'); ?>

<?php get_footer();