<?php 
/*
	Template Name: Page Test
*/

$array = [
    'posts_per_page' => 2
];

$the_query = new WP_Query($array); ?>

<h1><?= the_title() ?></h1>
<h1><?= the_content() ?></h1>

<?php

// si notre existe ? 

if ( $the_query->have_posts()) {

	// tant que tu a des résultats 
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		// tu affiche le post 
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
	echo '</ul>';
} else {
	// no posts found
}

wp_reset_postdata();

?>