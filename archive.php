<?php get_header(); ?>

<main>
	<section class="archive-news">
		<header class="banner banner-type2">
			<h2 class="archive-news__header font__title--xl-en">News</h2>
		</header>
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
								<h2 class="font__title--sm-jp"><?php the_title(); ?></h2>
								<span class="font__body--xs"><?php the_date("Y-m-d"); ?></span>
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