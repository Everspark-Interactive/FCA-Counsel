<?php
/*
Template Name: blogurlstemp
*/

$teamq = new WP_Query(array(

	'post_type' => 'post',

));
if ( $teamq->have_posts() ) { while ( $teamq->have_posts() ) { $teamq->the_post();
     the_permalink();
     echo "<br>";
	}
}