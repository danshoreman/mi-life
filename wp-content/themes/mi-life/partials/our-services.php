<div class="our-services">
	<div class="down-arrow"></div>
	<h2>Our Services</h2>
	<?php if( have_rows('service', 4) ): ?>
		<div class="row serv-content">
			<?php while( have_rows('service', 4) ): the_row(); 
			$icon = get_sub_field('icon');
			$title = get_sub_field('title');
			$intro = get_sub_field('intro');
			$link = get_sub_field('link');
			?>
			<div class="small-6 large-3 columns">
				<div class="service-copy">
					<a href="<?php echo $link; ?>">
					<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" class="serv-icon">
					</a>
					<h3><?php echo $title; ?></h3>
					<p><?php echo $intro; ?></p>
					<a href="<?php echo $link; ?>" class="read-more">Read More</a>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>