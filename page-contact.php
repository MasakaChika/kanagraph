<?php get_header(); ?>

<section class="contact">
	<div class="contact__container">
		<header class="section-header contact__title">Contact</header>
		<form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeC7I6GofBZP32a60g9_RS4ybr8DIghIVtItSjhIzN5QdvVHQ/formResponse?pli=1" class="contact__form" target="hidden_iframe" onsubmit="submitted=true;">
			<!-- お名前 -->
			<label class="form_block contact__your-name">
				<div class="form_label">お名前<span class="form-required">*</span></div>
				<input type="text" name="entry.2092238618" class="form_field" placeholder="お名前" required>
			</label>
			<!-- メールアドレス -->
			<label class="form_block contact__your-email">
				<div class="form_label">メールアドレス<span class="form-required">*</span></div>
				<input type="text" name="entry.1556369182" class="form_field" placeholder="メールアドレス" required>
			</label>
			<!-- 電話番号 -->
			<label class="form_block contact__phone-number">
				<div class="form_label">電話番号<span class="form-required">*</span></div>
				<input type="text" name="entry.817121836" class="form_field" placeholder="お電話番号(任意)" required>
			</label>
			<!-- ご希望プラン -->
			<label label class='contact__plan'>ご希望プラン<span class="form-required">*</span></label>
			<label class="check_label">
				<input type="radio" class="radio form-check-input" name="entry.1753222212" value="撮影会">
				<span class="radio-icon"></span>
				撮影会
			</label>
			<label class="check_label">
				<input class="radio form-check-input" type="radio" value="Light Plan">
				<span class="radio-icon"></span>
				Light Plan
			</label>
			<label class="check_label">
				<input class="radio form-check-input" type="radio" value="Regular Plan">
				<span class="radio-icon"></span>
				Regular Plan
			</label>
			<label class="check_label">
				<input class="radio form-check-input" type="radio" value="Premium Plan">
				<span class="radio-icon"></span>
				Premium Plan
			</label>
	</div>
	<!-- 撮影希望日 -->
	<label for="date-picker">
		<input type="date" name="entry.1375250434">
	</label>
	<!-- 撮影場所 -->
	<!-- オプションの有無 -->
	<label label class='title'>オプションの有無
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
		<div class="form_label">その他、ご要望や不明点があればご入力ください</div>
		<textarea name="entry.101402913" class="form_field --textfield" placeholder=""></textarea>
	</label>

	<!-- プライバシーポリシー -->
	<div class="contact__privacy">
		<p>個人情報の取り扱いについては、<a href="'/privacy-policy/'">プライバシーポリシー</a>を遵守します。<br>
			<span>個人情報保護方針について同意したものとみなされます<span>
		</p>
	</div>
	<!-- 送信ボタン -->
	<button type="submit" class="form-btn">send</button>
	</form>
	<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/contact/thanks';}"></iframe>
	</div>
</section>

<?php get_footer(); ?>