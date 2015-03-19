<?php get_header(); ?>

<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2><?php the_title();?></h2>
	<section id="singlemain" class="clearfix">
		<div id="singlefigure">
			<?php the_post_thumbnail('medium'); ?>
		</div>
		<div id="singleinformation">
			<p>
				　<?php the_field('midashi',$post->ID); ?>
			</p>
		</div>
	</section>
				<?php if(have_posts()):while(have_posts()):the_post(); ?>

				<?php endwhile;endif; ?>

				<?php the_content(); ?>
			
		</div><!--メイン-->
		<div id="aside"><!--サイド-->

		<?php get_sidebar(); ?>

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
				<li><a href="<?php bloginfo ('url'); ?>/stepup">>ステップアップ</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/expert">>士業系</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/cragtsman">>専門・職人系</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/private">>民間・実践系</a></li>
			</ul>


		<!-- 段階別　-->
	<!-- 学校一覧 -->
	<section class="step">
			<h3>資格の学校一覧</h3>
	</section>

			<ul class="sidebold">
				<li>
					<a href="http://h.accesstrade.net/sp/cc?rk=01007h4500ddpb" target="_blank">生涯学習のユーキャン<img src="http://h.accesstrade.net/sp/rr?rk=01007h4500ddpb" width="1" height="1" border="0" alt="" /></a>
					<p>テレビCMでもおなじみのNo.1通信講座</p>
				</li>
				<li>
					<a href="http://h.accesstrade.net/sp/cc?rk=0100127300ddpb" target="_blank">資格の大原<img src="http://h.accesstrade.net/sp/rr?rk=0100127300ddpb" width="1" height="1" border="0" alt="" /></a>
					<p>公務員・財務系資格専門学校の定番!</p>
				</li>
				<li>
					<a href="http://h.accesstrade.net/sp/cc?rk=010020no00ddpb" target="_blank">資格の学校ＴＡＣ<img src="http://h.accesstrade.net/sp/rr?rk=010020no00ddpb" width="1" height="1" border="0" alt="" /></a>
					<p>各種国家資格等の受験指導校</p>
				</li>
					<li><a href="http://h.accesstrade.net/sp/cc?rk=01008d0000ddpb" target="_blank">たのまな<img src="http://h.accesstrade.net/sp/rr?rk=01008d0000ddpb" width="1" height="1" border="0" alt="" /></a>
					<p>ヒューマンアカデミーの通信講座</p>
				</li>
					<li><a href="http://h.accesstrade.net/sp/cc?rk=0100h0k500ddpb" target="_blank">資格取得ならＫＥＮスクール<img src="http://h.accesstrade.net/sp/rr?rk=0100h0k500ddpb" width="1" height="1" border="0" alt="" /></a>
					<p>WEB・PC系の資格取得にオススメ！</p>
				</li>
					<li><a href="http://h.accesstrade.net/sp/cc?rk=0100bs4400ddpb" target="_blank">シカエル<img src="http://h.accesstrade.net/sp/rr?rk=0100bs4400ddpb" width="1" height="1" border="0" alt="" /></a>
					<p>介護・医療系の資格取得に強み</p>
				</li>
			</ul>
	<!-- 学校一覧 -->

		</div><!--サイド-->
	</div>

	</div><!-- wrapper コンテンツ終了 -->
<?php get_footer(); ?>