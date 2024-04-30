<?php get_header(); ?>
<main>
	<header class="banner common-banner banner-type1 plan__header">plan</header>

	<div class="service">
		<div class="service__wrapper">
			<div class="service__title">
				<h2 class="service__en">KANAGRAPH edits all photos.</h2>
				<span class="service__jp">全てのデータを編集(レタッチ)します。</span>
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
							<li><span>データ数</span> 15枚以上</li>
							<li><span>撮影時間</span> 30分</li>
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
							<li><span>データ数</span> 70枚以上</li>
							<li><span>撮影時間</span> １〜1.5時間</li>
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
							<li><span>データ数</span> 120枚以上</li>
							<li><span>撮影時間</span> 2〜3時間</li>
						</ul>
				</section>

				<section class="plan__common">
					<p>※こちらの内容は全プラン共通事項です。必ずご確認ください。</p>
					<ul>
						<li>・ブレ写真や目つぶりの写真はのぞいて納品いたします。</li>
						<li>・待ち合わせからの移動時間も含めた撮影時間です。</li>
						<li>・土日祝日は+2000円いただきます。</li>
						<li>・入場料や撮影使用料が必要な場所での撮影はカメラマン分も含めてご負担をお願いしております。</li>
					</ul>
				</section>

				<section class="plan__option">
					<h3>option</h3>
					<table>
						<tr>
							<td class="plan__option-price">延長料金</td>
							<td class="plan__option-price">11000円<span>/30分</span></td>
						</tr>
						<tr>
							<td class="plan__option-price">スピード納品</td>
							<td class="plan__option-price">11000円</td>
						</tr>
						<tr>
							<td class="plan__option-price">小物レンタル<br><span>（ブーケ、バースデーバルーンなど）</span></td>
							<td class="plan__option-price">1000円</td>
						</tr>
					</table>
				</section>
			</div>
		</div>

		<section class="process">
			<h2 class="process__title plan-section-title">納品までの流れ</h2>
			<div class="process__container">
				<div class="process__step">
					<span class="process__step-number">01</span>
					<img class="process__step-img" src="<?= get_template_directory_uri() . '/assets/img/step1.png'; ?>" alt="Step 1">
					<p>①コンタクトフォームより必要事項を記入してお申し込みください。</p>
				</div>

				<div class="process__step">
					<span class="process__step-number">02</span>
					<img class="process__step-img" src="<?= get_template_directory_uri() . '/assets/img/step2.png'; ?>" alt="Step 2">
					<p>②確認メールをお送りいたしますので必ずご確認ください。撮影地やご希望のプランをお聞きし、見積書を作成いたしますので、撮影日前日までに振り込みをお願いいたします。</p>
				</div>
				<div class="process__step">
					<span class="process__step-number">03</span>
					<img class="process__step-img" src="<?= get_template_directory_uri() . '/assets/img/step3.png'; ?>" alt="Step 3">
					<p>③撮影当日素敵な思い出になるよう心を込めて撮影いたします。</p>
				</div>
				<div class="process__step">
					<span class="process__step-number">04</span>
					<img class="process__step-img" src="<?= get_template_directory_uri() . '/assets/img/step4.png'; ?>" alt="Step 4">
					<p>④撮影後2週間程度で納品いたします。お急ぎの場合は追加料金11000円にて３日後までに納品することも可能です。Google Driveにアップロードしますのでダウンロードをお願いいたします。</p>
				</div>
			</div>
		</section>


		<section class="policy">
			<h2 class="policy__title plan-section-title">キャンセル・延期について</h2>
			<div class="policy__container">
				<div class="policy__cancel policy__inner">
					<p class="policy__description">ご予約確定後にキャンセルされた場合、以下のキャンセル料をお支払いいただきます</p>
					<table class="policy__table">
						<thead>
							<tr>
								<th>撮影までの日にち</th>
								<th>キャンセル料</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>当日</td>
								<td>100%</td>
							</tr>
							<tr>
								<td>前日-3日前</td>
								<td>50%</td>
							</tr>
							<tr>
								<td>4-7日前</td>
								<td>40%</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="policy__postpone policy__inner">
					<p class="policy__description">延期の場合は以下の料金をいただきます。天候不良による延期の場合、１回まで無料。<br>
						お客様都合の延期の場合、以下の料金をお支払いいただきます。</p>
					<table class="policy__table">
						<thead>
							<tr>
								<th>撮影までの日にち</th>
								<th>料金</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>当日</td>
								<td>100%</td>
							</tr>
							<tr>
								<td>前日-3日前</td>
								<td>50%</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>

</main>
<?php get_footer(); ?>