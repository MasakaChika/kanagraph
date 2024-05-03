<?php get_header(); ?>
<main>
	<!-- main visual -->
	<section class="main-visual">
		<?= do_shortcode('[metaslider id="30"]'); ?>
	</section>
	<!-- /.main visual -->

	<div class="main-content">
		<!-- news -->
		<section class="news" id="news">
			<header class="banner news__title font__title--lg-en">news</header>
			<ul class="news__article">
				<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => wp_is_mobile() ? 2 : 3, // モバイルの場合は2件、それ以外（PC）の場合は3件
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post(); ?>
						<li class="news__article-card">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
								<h2 class="news__article-title font__body--sm"><?php the_title(); ?></h2>
							</a>
						</li>
				<?php endwhile;
					wp_reset_postdata();
				endif;
				?>
			</ul>
			<div class="button-container news__button">
				<a href="/news/" class="button">more</a>
			</div>
		</section>
		<!-- /.news -->


		<!-- about -->
		<section class="about" id="about">
			<header class="banner about__title font__title--lg-en">about</header>
			<div class="about__photo">
				<img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/portrait.webp'; ?>" alt="村越香奈のポートレート写真">
			</div>
			<div class="about__introduction">
				<span class="about__role font__body--xs">Photographer</span>
				<h2 class="about__name font__title--xl-jp">村越 香奈</h2>
				<span class="about__english-name  font__body--xs">Kana Murakoshi</span>
				<p class="about__origin font__body--xs">1993年生まれ。東京都出身。</p>
			</div>
			<div class="button-container about__button">
				<a href="/about/" class="button">more</a>
			</div>
		</section>
		<!-- /.about -->

		<!-- portfolio -->
		<section class="portfolio" id="portfolio">
			<header class="banner portfolio__title font__title--lg-en">portfolio</header>
			<div class="portfolio__container">
				<?php
				$target_page_url = "page-portfolio.php";
				?>
				<a href="/portfolio/#portfolio-family">
					<div class="works-card portfolio__family">
						<h3 class="works-card__title font__title--md-en">family</h3>
						<img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/family/family1.webp'; ?>" alt="ファミリーフォトのサムネイル">
					</div>
				</a>
				<a href="/portfolio/#portfolio-wedding">
					<div class="works-card portfolio__wedding">
						<h3 class="works-card__title font__title--md-en">wedding</h3>
						<img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/wedding/wedding5.webp'; ?>" alt="ウェディングフォトのサムネイル">
					</div>
				</a>
				<a href="/portfolio/#portfolio-maternty">
					<div class="works-card portfolio__maternity">
						<h3 class="works-card__title font__title--md-en">maternity</h3>
						<img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/maternity/maternity1.webp';  ?>" alt="マタニティフォトのサムネイル">
					</div>
				</a>
				<a href="/portfolio/#portfolio-newborn">
					<div class="works-card portfolio__newborn">
						<h3 class="works-card__title font__title--md-en">newborn</h3>
						<img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/newborn/newborn1.webp'; ?>" alt="ニューボーンフォトのサムネイル">
					</div>
				</a>
				<a href="/portfolio/#portfolio-event">
					<div class="works-card portfolio__event">
						<h3 class="works-card__title font__title--md-en">traditional<br>event</h3>
						<img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/traditional-event/event2.webp'; ?>" alt="イベントフォトのサムネイル">
					</div>
				</a>
				<a href="/portfolio/#portfolio-profile">
					<div class="works-card portfolio__profile">
						<h3 class="works-card__title font__title--md-en">profile</h3>
						<img loading="lazy" src="<?= get_template_directory_uri() .  '/assets/img/profile/profile2.webp'; ?>" alt="プロフィールフォトのサムネイル">
					</div>
				</a>
			</div>
		</section>
		<!-- /.portfolio -->

		<!-- plan&contact -->
		<div class="plan-contact">
			<section class="frontpage-plan" id="plan">
				<header class="banner frontpage-plan__title font__title--lg-en">plan</header>
				<p class="frontpage-plan__desc font__body--md">３つの撮影プランをご用意しました。
					撮影日までの流れもこちらをご覧ください</p>
				<div class="button-container frontpage-plan__button">
					<a href="/plan/" class="button">more details</a>
				</div>
			</section>
			<section class="frontpage-contact" id="contact">
				<p class="frontpage-contact__text font__body--md">撮影に関するご依頼や、<br>
					お仕事のご相談はこちらから</p>
				<div class="button-container frontpage-contact__button">
					<a href="/contact/" class="button-color">contact</a>
				</div>
			</section>
		</div>
		<!-- /.plan&contact -->
	</div>

</main>
<?php get_footer(); ?>