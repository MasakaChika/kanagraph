<?php get_header(); ?>
<main>
	<div class="contact">
		<header class="banner banner-type2">
			<h2 class="contact__header font__title--xl-en">Contact</h2>
		</header>

		<div class="contact__container">
			<h3 class="contact__title font__title--lg-jp">お問い合わせフォーム</h3>
			<p class="font__body--sm">下記フォームへ必要事項をご記入の上、送信ください。</p>
		</div>
		<form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeC7I6GofBZP32a60g9_RS4ybr8DIghIVtItSjhIzN5QdvVHQ/formResponse?pli=1" class="contact__form" target="hidden_iframe" onsubmit="submitted=true;">
			<!-- お名前 -->
			<label class="form_block contact__your-name">
				<div class="form_label font__title--sm-jp">お名前<span class="form-required">*</span></div>
				<input type="text" name="entry.2092238618" class="form_field" placeholder="" required>
			</label>
			<!-- メールアドレス -->
			<label class="form_block contact__your-email">
				<div class="form_label font__title--sm-jp">メールアドレス<span class="form-required">*</span></div>
				<input type="text" name="entry.1556369182" class="form_field" placeholder="" required>
			</label>
			<!-- 電話番号 -->
			<label class="form_block contact__phone-number">
				<div class="form_label font__title--sm-jp">電話番号<span class="form-required">*</span></div>
				<input type="text" name="entry.817121836" class="form_field" placeholder="" required>
			</label>
			<!-- ご希望プラン -->
			<label class="form_block contact__plan">
				<div class="form_label font__title--sm-jp">ご希望プラン<span class="form-required">*</span></div>
				<label class="check_label">
					<input type="radio" class="form-check-input" name="entry.1753222212" value="撮影会">
					<span class="radio"> 撮影会</span>
				</label>
				<label class="check_label">
					<input type="radio" class="form-check-input" name="entry.1753222212" value="Light Plan">
					<span class="radio">Light Plan</span>

				</label>
				<label class="check_label">
					<input type="radio" class="form-check-input" name="entry.1753222212" value="Regular Plan">
					<span class="radio"> Regular Plan</span>

				</label>
				<label class="check_label">
					<input type="radio" class="form-check-input" name="entry.1753222212" value="Premium Plan">
					<span class="radio"> Premium Plan</span>

				</label>
			</label>
			<!-- 撮影希望日 -->
			<label for="date-picker" class="form_block contact__date">
				<div class="form_label font__title--sm-jp">希望撮影日</div>
				<input type="date" name="entry.1375250434" class="form_field">
			</label>
			<!-- 撮影場所 -->
			<label class="form_block contact__place">
				<div class="form_label font__title--sm-jp">ご希望の撮影場所<span class="form-required">*</span></div>
				<p class="contact__plece-permit font__body--xs">※撮影場所によっては撮影許可が降りず、ご希望に添えないこともございますのでご了承ください</p>
				<input type="text" name="entry.209205121" class="form_field" placeholder="" required>
			</label>
			<!-- オプションの有無 -->
			<label class="form_block contact__option">
				<div class="form_label font__title--sm-jp">オプションの有無</div>
				<label class="check_label">
					<input class="checkbox form-check-input" type="checkbox" name="entry.1914768077" value="スピード納品">
					<span class="checkbox-icon"></span>
					スピード納品
				</label>

				<label class="check_label">
					<input class="checkbox form-check-input" type="checkbox" name="entry.1914768077" value="小物レンタル">
					<span class="checkbox-icon"></span>
					小物レンタル
				</label>
			</label>
			<!-- お問い合わせ -->
			<label class="form_block --textfield contact__your-message">
				<div class="form_label font__title--sm-jp">その他、ご要望や不明点があればご入力ください</div>
				<textarea name="entry.101402913" class="form_textarea --textfield" placeholder=""></textarea>
			</label>

			<!-- 送信ボタン -->
			<div class="button-container contact__button">
				<button type="submit" class="button-color">send</button>
			</div>

		</form>
		<!-- <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/contact/thanks';}"></iframe> -->

		<div>
</main>
<?php get_footer(); ?>