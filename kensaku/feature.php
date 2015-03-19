<?php
/*
Template Name:  特集
*/

 get_header(); ?>
	<div id="warapper"><!-- コンテンツスタート -->
		<section class="main clearfix">
			<div class="figure">
				<img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/qury/step.jpg">
			</div>

			<div class="information">
				<h2>特集</h2>
				<p>このページでは資格にまつわる特集などを紹介していきます。</p>
				<ul>
					<li>企画集</li>
					<li>基本情報取得ブログ</li>
					<li>季節別資格一覧</li>
				</ul>
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
	
			<div id="fe-article" class="clearfix"><!--メイン記事スタート-->

	
					<div id="left">

						<!-- START サムネイル表示 -->
						
						<section class="gazou">
							
							<?php $args = array(
								'numberposts' => 1,
								'post_type' => 'special'
							);
							$customPosts = get_posts($args);
							if($customPosts) : foreach($customPosts as $post) :setup_postdata( $post ); ?>

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></p>

							<?php endforeach; ?>

							<?php else : //記事がない場合 ?>
								<h3><p>画像はありません</h3>
							<?php endif;
							wp_reset_postdata(); //クエリのリセット ?>

						</section>

						<!-- END サムネイル表示 -->

						<!-- START 記事一覧表示 -->



							<?php $args = array(
								'numberposts' => 5,
								'post_type' => 'special'
							);
							$customPosts = get_posts($args);
							if($customPosts) : foreach($customPosts as $post) :setup_postdata( $post ); ?>

							<section class="kiji">

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo mb_substr(strip_tags($post-> post_content),0,60).'...'; ?></p>
								<a class="button" href="<?php the_permalink(); ?>">もっと見る</a>
							</section>

							<?php endforeach; ?>

							<?php else : //記事がない場合 ?>
								<h3><p>記事はまだありません</h3>
							<?php endif;
							wp_reset_postdata(); //クエリのリセット ?>

						<!-- END 記事一覧表示 -->


					</div>
					<div id="out">

						<!-- START サムネイル表示 -->
						
						<section class="gazou">
							
							<?php $args = array(
								'numberposts' => 1,
								'post_type' => 'fe'
							);
							$customPosts = get_posts($args);
							if($customPosts) : foreach($customPosts as $post) :setup_postdata( $post ); ?>

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></p>

							<?php endforeach; ?>

							<?php else : //記事がない場合 ?>
								<h3><p>画像はありません</h3>
							<?php endif;
							wp_reset_postdata(); //クエリのリセット ?>

						</section>

						<!-- END サムネイル表示 -->

						<!-- START 記事一覧表示 -->



							<?php $args = array(
								'numberposts' => 5,
								'post_type' => 'fe'
							);
							$customPosts = get_posts($args);
							if($customPosts) : foreach($customPosts as $post) :setup_postdata( $post ); ?>

							<section class="kiji">

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo mb_substr(strip_tags($post-> post_content),0,60).'...'; ?></p>
								<a class="button" href="<?php the_permalink(); ?>">もっと見る</a>
							</section>

							<?php endforeach; ?>

							<?php else : //記事がない場合 ?>
								<h3><p>記事はまだありません</h3>
							<?php endif;
							wp_reset_postdata(); //クエリのリセット ?>

						<!-- END 記事一覧表示 -->
				
					</div>


			</div><!--メイン記事終了　-->
	
			<div id="fe-aside"><!-- サイドバー -->

				<div id="blog">
					
						<!-- START サムネイル表示 -->
						
						<section class="gazou2">
							
							<?php $args = array(
								'numberposts' => 1,
								'post_type' => 'days'
							);
							$customPosts = get_posts($args);
							if($customPosts) : foreach($customPosts as $post) :setup_postdata( $post ); ?>

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></p>

							<?php endforeach; ?>

							<?php else : //記事がない場合 ?>
								<h3><p>画像はありません</h3>
							<?php endif;
							wp_reset_postdata(); //クエリのリセット ?>

						</section>

						<!-- END サムネイル表示 -->

						<!-- START 記事一覧表示 -->



							<?php $args = array(
								'numberposts' => 5,
								'post_type' => 'days'
							);
							$customPosts = get_posts($args);
							if($customPosts) : foreach($customPosts as $post) :setup_postdata( $post ); ?>

							<section class="kiji">

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo mb_substr(strip_tags($post-> post_content),0,60).'...'; ?></p>
								<a class="button" href="<?php the_permalink(); ?>">もっと見る</a>
							</section>

							<?php endforeach; ?>

							<?php else : //記事がない場合 ?>
								<h3><p>記事はまだありません</h3>
							<?php endif;
							wp_reset_postdata(); //クエリのリセット ?>

						<!-- END 記事一覧表示 -->
				</div>


			</div><!-- サイドバー終了　</-->

		</div><!--カラム終了--> 


	</div><!-- コンテンツ終了 -->


<?php get_footer(); ?>