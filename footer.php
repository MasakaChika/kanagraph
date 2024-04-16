    <!-- footer -->
    <footer class="site-footer">

    	<div class="site-footer__container">
    		<nav class="site-footer__gnav">
    			<?php
					$args = [
						'menu' => 'grobal-navigation', // メニューの名前
						'menu_class' => 'site-footer__nav', // 追加するクラス名
						'container' => false, // メニューを囲む要素を表示しない
					];
					wp_nav_menu($args); // メニューを表示
					?>
    		</nav>

    		<div class="site-footer__logo">
    			<a href="<?= home_url() ?>">
    				<img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="ロゴ" />
    			</a>
    		</div>

    		<div class="site-footer__copyright">
    			<small>Copyright &copy; KANAGRAPH All Rights Reserved.</small>
    		</div>
    	</div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>