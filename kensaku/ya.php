<?php
/*
Template Name:  五十音順(や)
*/

 get_header(); ?>
<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2><?php the_title();?></h2>

		<?php $my_query = new WP_Query(array(
		'posts_per_page' => '-1',//件数指定の場合
		'meta_query' => array(
		 array(
		 'key' => 'yomi',
		 'value' => 'や',
		 'compare' => 'LIKE'
		 )
		))); ?>
		<ul>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;wp_reset_query(); ?>
		</ul>

				<?php the_content(); ?>
			
	</div><!--メイン-->

	
		<div id="pageaside"><!--サイド-->

	<!--検索窓-->

		<?php get_sidebar(); ?>

	<!-- 五十音順 -->

		<?php require_once('template/sidebar/az_list.php');?>

	<!--業種別一覧-->

		<?php require_once('template/sidebar/category_list.php');?>


	<!--段階-->

		<?php require_once('template/sidebar/step_list.php');?>

	<!--診断テスト-->

		<?php require_once('template/sidebar/test_list.php');?>


		</div><!--サイド-->
	</div>

	</div><!-- wrapper コンテンツ終了 -->
<?php get_footer(); ?>