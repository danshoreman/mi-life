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
					<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" class="serv-icon">
					<h3><?php echo $title; ?></h3>
					<p><?php echo $intro; ?></p>
					<a href="<?php echo $link; ?>" class="read-more">Read More</a>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<!--

	<div class="row serv-content">
		<div class="small-6 large-3 columns">
			<div class="service-copy">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/advice-wh.svg" alt="" class="serv-icon">
				<h3>ADVICE</h3>
				<p>Making decisions about your future is not easy. Having up to date, clear and accurate information certainly does help though...</p>
				<a href="/mi-life/advice/" class="read-more">Read More</a>
			</div>
		</div>
		<div class="small-6 large-3 columns">
			<div class="service-copy">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/minor-adaptations-wh.svg" alt="" class="serv-icon">
				<h3>MINOR ADAPTATIONS</h3>
				<p>Sometimes doing the everyday tasks can get more challenging. There might be small repairs or minor adaptations that we can do to help...</p>
				<a href="/mi-life/minor-adaptations/" class="read-more">Read More</a>
			</div>
		</div>
		<div class="small-6 large-3 columns">
			<div class="service-copy">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/major-adaptations-wh.svg" alt="" class="serv-icon">
				<h3>MAJOR ADAPTATIONS</h3>
				<p>After exploring all the other options, it might be decided that major adaptation is the best way to help support you to live independently...</p>
				<a href="/mi-life/major-adaptations/" class="read-more">Read More</a>
			</div>
		</div>
		<div class="small-6 large-3 columns">
			<div class="service-copy">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/telecare-wh.svg" alt="" class="serv-icon">
				<h3>TELECARE</h3>
				<p>Think about how nice it would be to know that there’s someone there for you, 24 hours a day, every day....</p>
				<a href="/mi-life/telecare/" class="read-more">Read More</a>
			</div>
		</div>
	</div>
-->
</div>