<?php get_header() ?>

<div class="bg-squares">
	<div class="inner-box">
		<div class="destacado-top">
			<?php $args = array('category_name' => 'destacado', 'posts_per_page' => '2') ?>
			<?php $the_query = new WP_Query($args) ?>
			<?php if ($the_query->have_posts()): ?>
			<ul>
			<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('img-210x210') ?></a></li>
			<?php endwhile; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
		<div class="destacado-bottom">
			<?php $args = array('category_name' => 'destacado', 'posts_per_page' => '3', 'offset' => '2') ?>
			<?php $the_query = new WP_Query($args) ?>
			<?php if ($the_query->have_posts()): ?>
			<ul>
			<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('img-210x210') ?></a></li>
			<?php endwhile; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer() ?>
