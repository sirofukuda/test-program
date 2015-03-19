<footer>
	<section id="boilerplate" class="clearfix">
		
		<h3><?php bloginfo('name'); ?>とは？</h3>
		<p><?php bloginfo('name'); ?>は「何か成長したい！」「勉強したい！」というあなたを応援する為のWEBサイトです。</p>
		<p>今働いている人も、これから社会に出て行こうとしている人も、これからの人生がより一層輝くものとなる為に。あなたにとって最適な資格探しのお手伝いをします。</p>


		
		<div id="footerlist" class="clearfix">
			
			<div id="grmenu">
				<h4>メニュー</h4>
				<ul>
					<li><a href="<?php echo home_url('/'); ?>">業界から探す人へ</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/type">何となく探す人へ</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/feature">特集から探す人へ</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/school">学校を探す人へ</a></li>
				</ul>
			</div>
			<div id="categorylist" class="clerafix">
				<h4>カテゴリ一覧</h4>
					<ul>

						<?php
						$categories = get_categories();
						foreach($categories as $category) :
						?>

						<li>
							<a href="<?php echo get_category_link($category);?>"><?php echo $category->cat_name; ?></a>
						</li>
	
					<?php endforeach; ?>

					</ul>
			</div>
			<div id="steplist" class="clearfix">
				<h4>ステップリスト</h4>

				<ul>
					<li><a href="<?php bloginfo ('url'); ?>/stepup">ステップアップ系資格</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/expert">士業系資格</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/cragtsman">専門・職人系資格</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/private">民間・実践系資格</a></li>
				</ul>

			</div>

		</div>

		<div id="company">
		
		<ul>
			<li><a href="<?php bloginfo ('url'); ?>/what"><?php bloginfo('name'); ?>とは</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/about">会社概要</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/riyokiyaku">利用規約</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/inquiry">問い合わせ</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/sitemap">サイトマップ</a></li>
		</ul>

		</div>
		
		<div id="copyright">
			
			Copyright © 2014 DYM co.,ltd All Rights Reserved.

		</div>
		
		
	</section>
</footer>
<?php wp_footer(); ?>
</body>
</html>