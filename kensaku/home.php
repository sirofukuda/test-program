<?php get_header(); ?>

	<div id="warapper"><!-- コンテンツスタート -->
	<section class="main clearfix">
		<div class="figure">
			<img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/qury/qu.png">
		</div>
		<div class="information">
			<h2><?php bloginfo('name'); ?>とは？</h2>
			<p><?php bloginfo('name'); ?>は「何か成長したい！」「勉強したい！」というあなたを応援する為のWEBサイトです。</p>
			<p>今働いている人も、これから社会に出て行こうとしている人も、これからの人生がより一層輝くものとなる為に。あなたにとって最適な資格探しのお手伝いをします。</p>

			<!-- aside ソーシャルボタン start -->
			<div class="snsBox"><ul class="social">
		    <!-- facebookいいね！ start -->
   			<li><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div></li>
   			<!-- facebookいいね！ end -->
    		<!-- twitter start -->
    		<li><a href='https://twitter.com/share' class='twitter-share-button' data-lang='ja'>ツイート</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
  			<!-- twitter end -->
    		<!-- はてな start -->
    		<li><a href="http://b.hatena.ne.jp/entry/www.imashimaro.jp" class="hatena-bookmark-button" data-hatena-bookmark-title="資格のケンサク" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
   		 	<!-- はてな end -->
    		<!-- Pocket start -->
    		<li><a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-lang="en"></a>
			<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script></li>
    		<!-- Pocket end -->
    		<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script></li>
			<!-- aside ソーシャルボタン end -->
			<li><a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/sns/linebutton_82x20.png" width="82px" alt="LINEで送る" /></a></li>

			</ul></div>

		</div>
	</section>

	
	<div id="contents" class="clearfix"><!--カラムスタート-->

	<div id="article" ><!--業種一覧スタート-->

	<section class="business">
			<h3>業種別に資格を探す！</h3>
	</section>

		<section class="jobsample">
		<h4><a href="<?php bloginfo ('url'); ?>/difficult"><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/icon/sheep.png">難易度</a></h4>
			<ul class="sampleleft">
				<li>> 簡易</li>
				<p>青下線の資格は簡易的な資格。<br>業界の基礎部分を学ぶことができます。</p>
			</ul>
			<ul class="sampleright">
				<li>> 難関</li>
				<p>赤下線の資格は難関資格。<br>業界の専門的な知識を学ぶことができます。</p>
			</ul>

		</section>


<!-- phpで難易度とカテゴリ表示-->


<?php
    $cat_all = get_terms( "category", "fields=all&get=all" );
    foreach($cat_all as $value):
 ?>
<section class="job">
<h4><a href="<?php echo get_category_link($value->term_id); ?>"><img src="<?php bloginfo('template_url');?>/img/top/icon/<?php echo $value->slug; ?>.png"><?php echo $value->name;?></a></h4>

<?php $my_query = new WP_Query(array(
'category_name' => $value->slug,
'posts_per_page' => 4,
'meta_key' => 'difficult', 'meta_value' => '3','meta_compare' => '<='
))?>

		<ul class="left">

			<?php if($my_query->have_posts()): ?>
			<?php while($my_query->have_posts()): $my_query->the_post();?>

				<li>
					<a href="<?php the_permalink(); ?>">
					<?php if(mb_strlen($post->post_title)>12) 
					{ $title= mb_substr($post->post_title,0,12) ; echo $title. ･･ ;} 
					else {echo $post->post_title;}?>
					</a>
				</li>

				<?php endwhile; ?>
				<?php else: ?>
				<p>投稿されたものがありません。</p>
				<?php endif; ?>

		</ul>

<?php $my_query = new WP_Query(array(
'category_name' => $value->slug,
'posts_per_page' => 4,
'meta_key' => 'difficult', 'meta_value' => '4','meta_compare' => '>='
))?>

		<ul class="right">	


			<?php if($my_query->have_posts()): ?>
			<?php while($my_query->have_posts()): $my_query->the_post();?>

				<li>	
					<a href="<?php the_permalink(); ?>">
					<?php if(mb_strlen($post->post_title)>12) 
					{ $title= mb_substr($post->post_title,0,12) ; echo $title. ･･ ;} 
					else {echo $post->post_title;}?>
					</a>
				</li>

				<?php endwhile; ?>
				<?php else: ?>
				<p>投稿されたものがありません。</p>
				<?php endif; ?>			

		</ul>

				<a class="button more" href="<?php echo get_category_link($value->term_id); ?>">もっと見る</a>

</section>

<?php endforeach; ?>


	</div><!--category　業種一覧終了　-->

	<div id="aside">

		<?php get_sidebar(); ?>

	<!-- 五十音順 -->

		<?php require_once('template/sidebar/az_list.php');?>

	<!--段階-->

		<?php require_once('template/sidebar/step_list.php');?>
				
	<!--診断テスト-->

		<?php require_once('template/sidebar/test_list.php');?>

	<!-- 学校一覧 -->

		<?php require_once('template/sidebar/school_list.php');?>


	<div class="adsence">

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- 資格300×250 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:300px;height:250px"
		     data-ad-client="ca-pub-1941656524240097"
		     data-ad-slot="6770572940"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>

	</div>

	</div>
	</div><!--contents カラム終了-->

	</div><!-- wrapper コンテンツ終了 -->

<?php get_footer(); ?>