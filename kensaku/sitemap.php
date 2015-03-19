<?php
/*
Template Name:  サイトマップ
*/

 get_header(); ?>
<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2><?php the_title();?></h2>


				<h4>メニュー</h4>
				<ul>
					<li><a href="<?php echo home_url('/'); ?>">業界から探す人へ</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/type">何となく探す人へ</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/feature">特集から探す人へ</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/school">学校を探す人へ</a></li>
				</ul>

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

				<h4>ステップリスト</h4>

				<ul>
					<li><a href="<?php bloginfo ('url'); ?>/stepup">ステップアップ系資格</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/expert">士業系資格</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/cragtsman">専門・職人系資格</a></li>
					<li><a href="<?php bloginfo ('url'); ?>/private">民間・実践系資格</a></li>
				</ul>

		
		<ul>
			<li><a href="<?php bloginfo ('url'); ?>/what"><?php bloginfo('name'); ?>とは</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/about">会社概要</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/riyokiyaku">利用規約</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/inquiry">問い合わせ</a></li>
			<li>サイトマップ</li>
		</ul>
			
	</div><!--メイン-->

	
		<div id="pageaside"><!--サイド-->

	<!--検索窓-->

		<?php get_sidebar(); ?>

	<!--検索窓-->

		<section class="step">
				<h3>業種別に資格を探す！</h3>
		</section>
	
		<ul class="sidebold">
			<?php
				$categories = get_categories();
				foreach($categories as $category) :
			?>
			
			<li>
				<a href="<?php echo get_category_link($category);?>"><img src="<?php bloginfo('template_url');?>/img/top/icon/<?php echo $category->slug; ?>.png">　<?php echo $category->cat_name; ?></a>
			</li>

			<?php endforeach; ?>
		</ul>


	<!--段階-->
	<section class="step">
			<h3>段階別に資格を探す！</h3>
	</section>

			<ul class="sidebold">
				<li>>ステップアップ</li>
				<li>>士業系</li>
				<li>>専門・職人系</li>
				<li>>民間・実践系</li>
			</ul>


		<!-- 段階別　-->



		</div><!--サイド-->
	</div>

	</div><!-- wrapper コンテンツ終了 -->
<?php get_footer(); ?>