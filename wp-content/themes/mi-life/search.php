<?php get_header(); ?>
	
	<div class="row">
		<div class="small-12 medium-6 columns" role="main">
			<h1 class="archive-title"><span><?php _e( 'Search Results for:', '%s' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('search-result'); ?> role="article">
						<header class="article-header">
							<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="byline vcard">
                    <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                  </p>
						</header>
						<section class="">
							<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;' ) . '</span>' ); ?>
						</section>
					</article>

				<?php endwhile; ?>
				<?php else : ?>
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
				<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>
