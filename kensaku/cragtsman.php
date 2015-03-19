<?php
/*
Template Name:  専門・職人系資格
*/

 get_header(); ?>


	<div id="warapper"><!-- コンテンツスタート -->
	<section class="main clearfix">
		<div class="figure">
			<img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/qury/step.jpg">
		</div>
		<div class="information">
			<h2>国家資格</h2>
				<p>国家資格・公的資格一覧</p>
		</div>
	</section>

	<div id="contents" class="clearfix"><!--カラムスタート-->

	<div id="article" ><!--メインコンテンツスタート-->

	<section class="business">
			<h3>業種別に資格を探す！</h3>
	</section>

		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/adweb">広告・出版・WEB</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/adweb.png"></li>
		</ul>

		<ul class="name">

					<?php $my_query = new WP_Query(array(
					'category_name' => 'adweb',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/pc">パソコン</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/pc.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'pc',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/manegement">経営労務</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/manegement.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'manegement',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/flower">フラワー・ペット</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/flower.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'flower',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/fashion2">ファッション</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/fashion2.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'fashion2',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/medical">医療福祉</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/medical.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'medical',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/hobby">趣味</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/hobby.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'hobby',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/media">マスコミ</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/media.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'media',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/language">語学</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/language.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'language',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/finance">財務会計金融</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/finance.png"　width="48px"></li>
		</ul>
		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'finance',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/property">知的財産</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/property.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'property',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/technology">技術</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/technology.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'technology',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/law">法律</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/law.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'law',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/estate">不動産</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/estate.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'estate',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/business">ビジネススキル</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/business.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'business',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="category2 clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/other">その他</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/other.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'other',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
		<section class="stepcategory clearfix">

		<ul class="ctitle">
			<li><h3><a href="<?php bloginfo ('url'); ?>/public">公務員</a></h3></li>
			<li><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/public.png"></li>
		</ul>

		<ul class="name">
					<?php $my_query = new WP_Query(array(
					'category_name' => 'public',//カテゴリ指定の場合
					'tag' => '国家資格,公的資格',
					//'posts_per_page' => '12',//件数指定の場合
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>/ </li> 

					<?php endwhile;wp_reset_query(); ?>

		</ul>
		</section>
	</div><!--メインコンテンツ終了　-->
	
	<div id="aside"><!-- サイドバー -->

	<!--段階-->
	<section class="step">
			<h3>段階別に資格を探す！</h3>
	</section>

			<ul>
				<li><a href="<?php bloginfo ('url'); ?>/stepup">資格一覧</a>	</li>
				<li><a href="<?php bloginfo ('url'); ?>/expert">検定一覧</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/cragtsman">国家資格・公的資格</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/private">民間資格</a></li>
			</ul>				

		
		<!-- 段階別　-->

	</div><!-- サイドバー終了　-->


	

	

	</div><!--contents コンテンツ終了--> 

	</stage>
	</section>
	</div><!-- コンテンツ終了 -->

<?php get_footer(); ?>