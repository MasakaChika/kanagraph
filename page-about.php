<?php get_header(); ?>

<main>
	<section class="page-about">
		<header class="banner banner-type1">
			<h2 class="page-about__header font__title--xl-en">About</h2>
		</header>
		<div class="page-about__photo">
			<img loading="lazy" src=<?= get_theme_file_uri('assets/img/portrait.webp'); ?> alt="写真:フォトグラファー村越香奈が花畑の中にいる" />
		</div>
		<div class="page-about__introduction">
			<div class="page-about__profile">
				<span class="page-about__role font__body--lg">Photographer</span>
				<h2 class="page-about__name font__title--xl-jp">村越 香奈</h2>
				<span class="page-about__english-name font__body--xs">Kana Murakoshi</span>
			</div>
			<p class="page-about__desc font__body--lg">1993年生まれ。東京都出身。<br>
				立教大学現代心理学部映像身体学科卒業。<br>
				2016年より株式会社NHKテクノロジーズに入社。<br>
				報道番組の音声、撮影業務に携わる。<br>
				社内カレンダーに自身の写真が採用されたことをきっかけに<br>
				本格的に写真に目覚める。</p>
		</div>
	</section>

	<section class="concept">
		<header class="banner banner-type3">
			<h2 class="concept__header font__title--xl-en">concept</h2>
		</header>
		<div class="concept__content">
			<h2 class="concept__title">二度とない愛おしい瞬間を<br>一生モノの記憶へ</h2>
			<p class="concept__text font__body--lg">誰もがかけがえのない存在であり、<br>
				素敵だということを<br class="sp-br">伝えられるような写真を<br>
				目指しています。<br>
				誰かと比較したりせず、<br>
				ありのままのあなたが<br class="sp-br">何より特別で美しいのだと<br>
				愛を込めて<br class="sp-br">シャッターを切っています。<br>
				あっという間に過ぎ去ってしまう<br>
				特別な今を永遠に…。<br>
				カタチに残すお手伝いを<br class="sp-br">させてください。</p>
		</div>
	</section>
</main>
<?php get_footer(); ?>