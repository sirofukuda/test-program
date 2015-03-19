<?php
/*
Template Name:  固定ページテンプレート
*/

 get_header(); ?>
<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2><?php the_title();?></h2>

				<?php if(have_posts()):while(have_posts()):the_post(); ?>

				<?php endwhile;endif; ?>

				<?php the_content(); ?>
			
	</div><!--メイン-->

	
		<div id="pageaside"><!--サイド-->

	<!--検索窓-->

		<?php get_sidebar(); ?>

	<!--業種別-->

		<?php require_once('template/sidebar/category_list.php');?>

	<!--段階-->

		<?php require_once('template/sidebar/step_list.php');?>

	<!-- テスト　-->

		<?php require_once('template/sidebar/test_list.php');?>


		</div><!--サイド-->
	</div>

	</div><!-- wrapper コンテンツ終了 -->
<?php get_footer(); ?>