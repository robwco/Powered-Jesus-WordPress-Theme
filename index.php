<?php get_header(); ?>

<div class="container">
	<?php $args = array('posts_per_page' => 6, 'post_type' => 'post', 'post_status' => 'publish'); ?>
	<?php $posts = get_posts($args); ?>

	<div class="posts">
		<?php foreach ( $posts as $post ) { ?>
			<?php echo get_template_part( 'partials/post' ); ?>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>