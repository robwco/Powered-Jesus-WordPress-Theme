<div class="post">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="no-underline">
		<?php if ( has_post_thumbnail() ) { ?>
			<img src="<?php the_post_thumbnail_url('original'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded">
		<?php } else { ?>
			<img src="<?php bloginfo('template_directory'); ?>/images/no-image.svg" alt="No Featured Image" class="img-fluid rounded">
		<?php } ?>
		<p class="post-title"><?php the_title(); ?></p>
	</a>
</div>
