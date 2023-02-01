<div class="post">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="no-underline">
		<p class="post--title mb-0 text-sm font-bold black"><?php the_title(); ?></p>
		<p class="post--excerpt my-0 text-xs dark-gray"><?php echo wp_trim_words(get_the_excerpt(), 35, '...'); ?></p>
		<p class="post--button text-xxs"><span class="button">Read</span></p>
	</a>
</div>
