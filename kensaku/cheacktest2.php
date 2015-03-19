<?php
/*
Template Name:  チェックテスト2
*/

 get_header(); ?>

<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2><?php the_title();?></h2>

		<ul class="cheacktest">
			<li id="0_0">グループ「0」の選択肢「0」</li>
			<li id="0_1">グループ「0」の選択肢「1」</li>
			<li id="0_2">グループ「0」の選択肢「2」</li>
			<li id="0_3">グループ「0」の選択肢「3」</li>
			<li id="0_4">グループ「0」の選択肢「4」</li>
		</ul>
		
		<hr/>
		
		<ul class="cheacktest">
			<li id="1_0">グループ「1」の選択肢「0」</li>
			<li id="1_1">グループ「1」の選択肢「1」</li>
			<li id="1_2">グループ「1」の選択肢「2」</li>
			<li id="1_3">グループ「1」の選択肢「3」</li>
			<li id="1_4">グループ「1」の選択肢「4」</li>
		</ul>
		
		<hr/>
		
		<ul class="cheacktest">
			<li id="2_0">グループ「2」の選択肢「0」</li>
			<li id="2_1">グループ「2」の選択肢「1」</li>
			<li id="2_2">グループ「2」の選択肢「2」</li>
			<li id="2_3">グループ「2」の選択肢「3」</li>
			<li id="2_4">グループ「2」の選択肢「4」</li>
		</ul>
	
		<hr/>
		
		<ul class="cheacktest">
			<li id="3_0">グループ「3」の選択肢「0」</li>
			<li id="3_1">グループ「3」の選択肢「1」</li>
			<li id="3_2">グループ「3」の選択肢「2」</li>
			<li id="3_3">グループ「3」の選択肢「3」</li>
			<li id="3_4">グループ「3」の選択肢「4」</li>
		</ul>
	
		<hr/>
		
		<ul class="cheacktest">
			<li id="4_0">グループ「4」の選択肢「0」</li>
			<li id="4_1">グループ「4」の選択肢「1」</li>
			<li id="4_2">グループ「4」の選択肢「2」</li>
			<li id="4_3">グループ「4」の選択肢「3」</li>
			<li id="4_4">グループ「4」の選択肢「4」</li>
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