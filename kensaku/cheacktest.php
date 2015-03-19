<?php
/*
Template Name:  チェックテスト
*/

 get_header(); ?>

<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2><?php the_title();?></h2>


	<div id="qArea">
		<div id="qContainer">
	
			<div class="qBox">
				<div class="ques"><span class="qNum">Q1</span>　仕事をするなら</div>
				<ul class="cheacktest">
					<li id="0_0" sc="20">自宅警備員</li>
					<li id="0_1" sc="15">楽したい</li>
					<li id="0_2" sc="10">ワーク・ライフ・バランスが大切</li>
					<li id="0_3" sc="5">やるからには頑張りたい</li>
					<li id="0_4" sc="0">ワーク・ワーク・ワークだ</li>
				</ul>
				<div class="fig"><img src="<?php bloginfo('template_url');?>/img/cheacktest/fig1.png" width="230" height="230" alt=""></div>
			</div>
	
			<div class="qBox">
				<div class="ques"><span class="qNum">Q2</span>　旅行に行くなら</div>
				<ul class="cheacktest">
					<li id="1_0" sc="20">沖縄</li>
					<li id="1_1" sc="15">北海道</li>
					<li id="1_2" sc="10">ハワイ</li>
					<li id="1_3" sc="5">グアム</li>
					<li id="1_4" sc="0">タヒチ</li>
				</ul>
				<div class="fig"><img src="<?php bloginfo('template_url');?>/img/cheacktest/fig2.png" width="230" height="230" alt=""></div>
			</div>
			
			<div class="qBox">
				<div class="ques"><span class="qNum">Q3</span>　休日の過ごし方は？</div>
				<ul class="cheacktest">
					<li id="2_0" sc="20">趣味に没頭！</li>
					<li id="2_1" sc="15">寝る</li>
					<li id="2_2" sc="10">ショッピング</li>
					<li id="2_3" sc="5">掃除</li>
					<li id="2_4" sc="0">ハワイ</li>
				</ul>
				<div class="fig"><img src="<?php bloginfo('template_url');?>/img/cheacktest/fig3.png" width="230" height="230" alt=""></div>
			</div>
	
			<div class="qBox">
				<div class="ques"><span class="qNum">Q4</span>　明日世界が終わるとしたら何をする？</div>
				<ul class="cheacktest">
					<li id="3_0" sc="20">寝る</li>
					<li id="3_1" sc="15">あの子に好きっていう</li>
					<li id="3_2" sc="10">おいしいものを食べる</li>
					<li id="3_3" sc="5">仕事</li>
					<li id="3_4" sc="0">ハワイ</li>
				</ul>
				<div class="fig"><img src="<?php bloginfo('template_url');?>/img/cheacktest/fig4.png" width="230" height="230" alt=""></div>
			</div>
	
			<div class="qBox">
				<div class="ques"><span class="qNum">Q5</span>　生まれ変わるなら？</div>
				<ul class="cheacktest">
					<li id="4_0" sc="20">マイケル・ジョーダン</li>
					<li id="4_1" sc="15">猫</li>
					<li id="4_2" sc="10">犬</li>
					<li id="4_3" sc="5">ハムスター</li>
					<li id="4_4" sc="0">ナメック星人</li>
				</ul>
				<div class="fig"><img src="<?php bloginfo('template_url');?>/img/cheacktest/fig1.png" width="230" height="230" alt=""></div>
			</div>
			<div class="qBox">
				<div id="resultBox">
					<div id="resultTitle">実業家級サラリーマン</div>
					<div id="resultPoint"></div>
					<div id="resultLeft">
						<div id="resultText">タイプ説明</div>
						<div id="here">こちら</div>
						<div id="ad">広告</div>						
						<div id="againButton"></div>
					</div>
					<div id="resultImage"></div> 
				</div>
			</div>

			
		</div>

	</div>
			
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

	<!-- 段階別-->

	<section class="step">
			<h3>診断テスト</h3>
			<ul>
				<li><a href="http://www.imashimaro.jp/cheacktest">診断テスト</a></li>
			</ul>
	</section>



		</div><!--サイド-->
	</div>

	</div><!-- wrapper コンテンツ終了 -->
<?php get_footer(); ?>