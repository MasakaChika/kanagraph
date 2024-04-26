<?php get_header(); ?>
<main>
	<header class="banner common-banner banner-type1 plan__header">plan</header>
	<div class="service__title">
		<h2 class="service__en">KANAGRAPH edits(retouches) all photos.</h2>
		<span class="sevice__jp">全てのデータを編集(レタッチ)します。</span>
	</div>

	<div class="plan__content">
		<section class="plan__light plan__section">
			<div class="plan__container">
				<div class="plan__wrapper">
					<header class="plan__title-area">
						<h2 class="plan__cat">light</h2>
						<span class="plan__jp">ライトプラン</span>
					</header>
				</div>
				<img src="<?= get_template_directory_uri() . '/assets/img/newborn/newborn2.webp'; ?>" alt="" class=" portfolio-section__photo plan__photo">
			</div>
			<div class="plan__introduction">
				<p class="plan__desc">プロフィール撮影や<br>日常の何気ないシーンを残したい方に</p>
				<p class="plan__price">11,000<span class="plan__tax">円（税込）＋交通費</span></p>
				<ul class="plan__point">
					<li>データ数 15枚以上</li>
					<li>撮影時間 30分</li>
				</ul>
		</section>

		<section class="plan__regular plan__section">
			<div class="plan__container">
				<div class="plan__wrapper">
					<header class="plan__title-area">
						<h2 class="plan__cat">regular</h2>
						<span class="plan__jp">レギュラープラン</span>
					</header>
				</div>
				<img src="<?= get_template_directory_uri() . '/assets/img/newborn/newborn2.webp'; ?>" alt="" class=" portfolio-section__photo plan__photo">
			</div>
			<div class="plan__introduction">
				<p class="plan__desc">お宮参り、七五三、バースデーなど<br>節目のお祝いでたっぷり記録を残したい方に</p>
				<p class="plan__price">25,000<span class="plan__tax">円（税込）＋交通費</span></p>
				<ul class="plan__point">
					<li>データ数 70枚以上</li>
					<li>撮影時間 １〜1.5時間</li>
				</ul>
		</section>

		<section class="plan__premium plan__section">
			<div class="plan__container">
				<div class="plan__wrapper">
					<header class="plan__title-area">
						<h2 class="plan__cat">premium</h2>
						<span class="plan__jp">プレミアムプラン</span>
					</header>
				</div>
				<img src="<?= get_template_directory_uri() . '/assets/img/newborn/newborn2.webp'; ?>" alt="" class=" portfolio-section__photo plan__photo">
			</div>
			<div class="plan__introduction">
				<p class="plan__desc">ウェデイングや公園とお家の両方でファミリーフォトを撮りたい方におすすめ</p>
				<p class="plan__price">45,000<span class="plan__tax">円（税込）＋交通費</span></p>
				<ul class="plan__point">
					<li>データ数 120枚以上</li>
					<li>撮影時間 2〜3時間</li>
				</ul>
		</section>

		<section class="plan__option">
			<h3 class="option__title">option</h3>
			<ul class="option__point">
				<li>延長料金 11,000円/30分</li>
				<li>スピード納品 11,000円</li>
				<li>小物レンタル（ブーケ、バースデーバルーンなど） 1,000円</li>
			</ul>
		</section>

		<section class="plan__process">
			<div class="step">
				<img src="step1.png" alt="Step 1">
				<p>①コンタクトフォームより必要事項を記入してお申し込みください。</p>
			</div>

			<div class="step">
				<img src="step2.png" alt="Step 2">
				<p>②確認メールをお送りいたしますので必ずご確認ください。撮影地やご希望のプランをお聞きし、見積書を作成いたしますので、撮影日前日までに振り込みをお願いいたします。</p>
			</div>
			<div class="step">
				<img src="step3.png" alt="Step 3">
				<p>③撮影当日素敵な思い出になるよう心を込めて撮影いたします。</p>
			</div>
			<div class="step">
				<img src="step4.png" alt="Step 4">
				<p>④撮影後2週間程度で納品いたします。お急ぎの場合は追加料金11000円にて３日後までに納品することも可能です。Google Driveにアップロードしますのでダウンロードをお願いいたします。</p>
			</div>
		</section>

		<section class="plan__policy PolicySection policy-section">
			<div class="CancellationPolicy cancellation-policy">
				<h2 class="cancellation-policy__title">キャンセル料金</h2>
				<p class="cancellation-policy__description">キャンセルの場合は以下の料金をいただきます。</p>
				<ul class="cancellation-policy__list">
					<li class="cancellation-policy__item">当日：１００％</li>
					<li class="cancellation-policy__item">３日前：５０％</li>
					<li class="cancellation-policy__item">７日前：２０％</li>
				</ul>
			</div>

			<div class="PostponementPolicy postponement-policy">
				<h2 class="postponement-policy__title">延期料金</h2>
				<p class="postponement-policy__description">延期の場合は以下の料金をいただきます。</p>
				<ul class="postponement-policy__list">
					<li class="postponement-policy__item">天候不良による延期の場合、１回まで無料。</li>
					<li class="postponement-policy__item">お客様都合の場合：</li>
					<ul class="postponement-policy__sublist">
						<li class="postponement-policy__subitem">当日：１００％</li>
						<li class="postponement-policy__subitem">３日前：５０％</li>
					</ul>
				</ul>
			</div>
		</section>
	</div>
</main>
<?php get_footer(); ?>