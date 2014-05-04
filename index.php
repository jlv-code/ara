<?php get_header() ?>

<div class="bg-squares">
	<div class="inner-box">
		<div class="side-left">
			<div class="artists">
				<!--<h1>Artistas</h1>-->
				<?php $args = array('category_name' => 'destacado', 'posts_per_page' => '9') ?>
				<?php $the_query = new WP_Query($args) ?>
				<?php if ($the_query->have_posts()): ?>
				<ul>
				<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<li>
						<a class="img" href="<?php the_permalink() ?>"><?php the_post_thumbnail('img-210x210') ?></a>
						<a class="title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div class="discography">
				<!--<h1>Discografía</h1>-->
				<ul>
					<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/covers/jad-rueda-libre-180.jpg" alt="dico"></a></li>
					<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/covers/fabiola-jose-180.jpg" alt="dico"></a></li>
					<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/covers/cecilia-todd-180.jpg" alt="dico"></a></li>
					<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/covers/ismael-querales-y-tonito-naranjo-180.jpg" alt="dico"></a></li>
					<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/covers/luisana-perez-180.jpg" alt="dico"></a></li>
				</ul>
			</div>
		</div>
		<div class="side-right">
			<div class="news">
				<!--<h1>Noticias</h1>-->
				<?php $args = array('category_name' => 'noticias', 'posts_per_page' => '10') ?>
				<?php $the_query = new WP_Query($args) ?>
				<?php if ($the_query->have_posts()): ?>
				<ul>
				<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<li>
						<span><?php the_time('d M Y') ?></span><a class="title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div class="featured-video">
				<iframe width="360" height="300" src="//www.youtube.com/embed/qXUP1Qd78Fw" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>
