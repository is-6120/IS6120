<?php 
    get_header();
?>
<p>
	Found result for: <?php the_search_query(); ?>	
</p>

<p>
	<?php the_excerpt(); ?>
</p>
<?php
    get_footer();
?>