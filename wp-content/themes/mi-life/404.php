<?php get_header(); ?>

	<div class="row">
		<div class="small-12 medium-6 columns" role="main">
			<article class="post-not-found">
				<header class="article-header">
					<h1><?php _e( 'Page Not Found' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'The page you were searching for does not exist, please search again.' ); ?></p>
				</section>
				<section class="search-form">
					<p><?php get_search_form(); ?></p>
				</section>
			</article>
		</div>
	</div>

<?php get_footer(); ?>
