<?php get_header(); ?>

<main>
	<section class="archive-news">
		<header class="banner common-banner banner-type2 archive-news__header">news</header>
		<div class="archive-news__container">
			<ul class="archive-news__article">
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 12,
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post(); ?>
						<li class="news__article-card">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
								<h2><?php the_title(); ?></h2>
								<span><?php the_date("Y-m-d"); ?></span>
							</a>
						</li>
				<?php endwhile;
					wp_reset_postdata();
				endif;
				?>
			</ul>
		</div>
	</section>
</main>

<?php get_footer(); ?>