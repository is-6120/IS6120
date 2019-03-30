<?php 
    get_header();
    
    if ( have_posts() ) :
        while (have_posts()): the_post(); ?>
        <article class="post">
            <div class="clearfix">
				<?php if(has_post_thumbnail()): ?>
				<div class="image-column">
					<?php the_post_thumbnail('small'); ?>
				</div>
                <div class="content-column">
					<?php get_template_part('article'); ?>
				</div>
				<?php else: ?>
					<?php get_template_part('article'); ?>
				<?php endif; ?>
            </div>
        </article>
        <?php endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    
    get_footer();
?>