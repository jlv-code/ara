<?php get_header() ?>

<?php

	global $post;
	get_template_part($post->post_name,get_post_format());

?>

<?php get_footer() ?>