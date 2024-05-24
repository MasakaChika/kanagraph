<?php get_header(); ?>
<main>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
				<header class="post__header">
					<h2 class="heading post__heading font__title--md-jp"><?php the_title(); ?></h2>
				</header>

				<div class="post__content">
					<time datetime="<?php the_time('Y-m-d'); ?>" class="font__body--xs"><?php the_time('Y年m月d日'); ?></time>
					<div class="post__news">
						<?php the_content(); ?>
					</div>
				</div>


				<div class="prev-next">
					<?php
					$previous_post = get_previous_post();
					if ($previous_post) :
					?>
						<div class="prev-next__item prev-next__item-prev">
							<a href="<?php the_permalink($previous_post); ?>">
								<svg width="40" height="56" viewBox="0 0 40 56" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M38.5 1C26 15.5 3 29.5 3 29.5C3 29.5 26.5 41 38.5 55" stroke="#A8815B" stroke-width="2" stroke-linecap="round" />
								</svg>
								<span class="font__body--xxs"><?= get_the_title($previous_post); ?></span>
							</a>
						</div>
					<?php endif; ?>
					<?php
					$next_post = get_next_post();
					if ($next_post) :
					?>
						<div class="prev-next__item prev-next__item-next">
							<a href="<?php the_permalink($next_post); ?>">
								<span class="font__body--xxs"><?= get_the_title($next_post); ?></span>
								<svg width="40" height="56" viewBox="0 0 40 56" transform="scale(-1, 1)" fill="none" xmlns="http://www.w3.org/2000/svg">

									<path d="M38.5 1C26 15.5 3 29.5 3 29.5C3 29.5 26.5 41 38.5 55" stroke="#A8815B" stroke-width="2" stroke-linecap="round" />
									</g>
								</svg>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>