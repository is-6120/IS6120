<?php 
    get_header();
?>
<!--
<?php 
	$categories = get_categories( array(
		'orderby' => 'name',
		'order'   => 'ASC'
	) );
 
	$x = 1;
	
	foreach( $categories as $category ) {
		$category_link = sprintf( 
			'<a href="%1$s" alt="%2$s">%3$s</a>',
			esc_url( get_category_link( $category->term_id ) ),
			esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			esc_html( $category->name )
		);
		echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
		echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
		echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
		$x++;
		echo $x;
	}
?> -->

	<div class="row">
		<div class="col text-center my-4">
		  Product 1 will show here
		</div>
		<div class="col text-center my-4">
		  Product 2 will show here
		</div>
		<div class="col text-center my-4">
		  Product 3 will show here
		</div>
		<div class="col text-center my-4">
		  Product 4 will show here
		</div>
	</div>
	<div class="row">
		<div class="col text-center my-4">
		  Product 5 will show here
		</div>
		<div class="col text-center my-4">
		  Product 6 will show here
		</div>
		<div class="col text-center my-4">
		  Product 7 will show here
		</div>
		<div class="col text-center my-4">
		  Product 8 will show here
		</div>
	</div>
<?php
    get_footer();
?>
