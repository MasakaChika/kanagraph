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
			<header class="banner common-banner section-title news__title">news</header>
			<ul class="news__article">
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post(); ?>
						<li class="news__article-card">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
								<h2><?php the_title(); ?></h2>
							</a>
						</li>
				<?php endwhile;
					wp_reset_postdata();
				endif;
				?>
			</ul>
			<div class="button-container news__button">
				<button class="button">more</button>
			</div>
		</section>
		<!-- /.news -->


		<!-- about -->
		<section class="about" id="about">
			<header class="banner common-banner section-title about__title">about</header>
			<div class="about__photo">
				<img src="<?= get_template_directory_uri() . '/assets/img/portrait.webp'; ?>" alt="ポートレート">
			</div>
			<div class="about__introduction">
				<span class="about__role">Photographer</span>
				<h2 class="about__name">村越 香奈</h2>
				<span class="about__english-name">Kana Murakoshi</span>
				<p class="about__origin">1993年生まれ。東京都出身。</p>
			</div>
			<div class="button-container about__button">
				<button class="button">more</button>
			</div>
		</section>
		<!-- /.about -->

		<!-- portfolio -->
		<section class="portfolio" id="portfolio">
			<header class="banner common-banner section-title portfolio__title">portfolio</header>
			<div class="portfolio__container">
				<?php
				$target_page_url = "page-portfolio.php";
				?>
				<a href="<?= $target_page_url ?>#portfolio-family">
					<div class="works-card portfolio__family">
						<h3 class="works-card__title">family</h3>
						<img src="<?= get_template_directory_uri() . '/assets/img/family-thumbnail.png'; ?>" alt="ファミリーフォトのサムネイル">
					</div>
				</a>
				<a href="<?= $target_page_url ?>#portfolio-wedding">
					<div class="works-card portfolio__wedding">
						<h3 class="works-card__title">wedding</h3>
						<img src="<?= get_template_directory_uri() . '/assets/img/wedding-thumbnail.png'; ?>" alt="ウェディングフォトのサムネイル">
					</div>
				</a>
				<a href="<?= $target_page_url ?>#portfolio-maternty">
					<div class="works-card portfolio__maternity">
						<h3 class="works-card__title">maternity</h3>
						<img src="<?= get_template_directory_uri() . '/assets/img/maternity-thumbnail.png'; ?>" alt="マタニティフォトのサムネイル">
					</div>
				</a>
				<a href="<?= $target_page_url ?>#portfolio-newborn">
					<div class="works-card portfolio__newborn">
						<h3 class="works-card__title">newborn</h3>
						<img src="<?= get_template_directory_uri() . '/assets/img/newborn-thumbnail.png'; ?>" alt="ニューボーンフォトのサムネイル">
					</div>
				</a>
				<a href="<?= $target_page_url ?>#pportfolio-event">
					<div class="works-card portfolio__event">
						<h3 class="works-card__title">traditional<br>event</h3>
						<img src="<?= get_template_directory_uri() . '/assets/img/event-thumbnail.png'; ?>" alt="イベントフォトのサムネイル">
					</div>
				</a>
				<a href="<?= $target_page_url ?>#portfolio-profile">
					<div class="works-card portfolio__profile">
						<h3 class="works-card__title">profile</h3>
						<img src="<?= get_template_directory_uri() . '/assets/img/profile-thumbnail.png'; ?>" alt="プロフィールフォトのサムネイル">
					</div>
			</div>
		</section>
		<!-- /.portfolio -->

		<!-- plan&contact -->
		<div class="plan-contact">
			<section class="plan" id="plan">
				<header class="banner common-banner section-title plan__title">plan</header>
				<p class="plan__desc">３つの撮影プランをご用意しました。
					撮影日までの流れもこちらをご覧ください</p>
				<div class="button-container plan__button">
					<button class="button">more details</button>
				</div>
			</section>
			<section class="contact" id="contact">
				<p class="contact__text">撮影に関するご依頼や、<br>
					お仕事のご相談はこちらから</p>
				<div class="button-container contact__button">
					<button class="button-color">contact</button>
				</div>
			</section>
		</div>
		<!-- /.plan&contact -->
	</div>

</main>
<?php get_footer(); ?>