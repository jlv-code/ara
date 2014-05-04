<?php get_header() ?>

<div class="wrap-page">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
	<article class="page">
		<h1><?php the_title() ?></h1>
		<section class="details">
			<div class="content">
			<figure>
				<?php the_post_thumbnail('medium') ?>
			</figure>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147296170&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
			</div>
			<aside class="summary">
				<div class="bio">
					<?php the_content() ?>
				</div>
				<div class="discography">
					<h1>Discografía</h1>
					<ul>
						<li><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/covers/jad-rueda-libre-180.jpg" alt="dico"></a></li>
					</ul>
				</div>
			</aside>
		</section>
	</article>
<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>