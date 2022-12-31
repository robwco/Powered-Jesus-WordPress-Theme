<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <h1>
            <?php the_title(); ?>        
        </h1>
        
        <article>
            <?php the_content(); ?>
        </article>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>