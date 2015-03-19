<?php get_header(); ?>


	<div id="warapper"><!-- コンテンツ終了 -->
	<section class="main clearfix">
		<div class="figure">
			<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>" />
		</div>
		<div class="information">

			<h2><?php
				$category = get_the_category(); 
				echo $category[0]->cat_name;
				?>
			</h2>
			<p><?php echo category_description(); ?>

			</p>		
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



	<section id="list">
		<ul>
			<li>資格名</li>
			<li>取得期間</li>
			<li>難易度</li>
			<li>段階</li>
			<li>取得可能な機関</li>
		</ul>
	</section>

<?php query_posts($query_string.'&posts_per_page=100'); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>

     	<section class="name">
     		<ul>
  			<li><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>20) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;} else {echo $post->post_title;}?></a></li>    
            <li>

            	<?php 
            	$meyasu =the_field('meyasu',$post->ID); 
            	if(!$meyasu =""){
            		echo $meyasu;
            	} elseif($meyasu = "") {
            		echo "その他";
            	} else{
            		echo "その他";
            	}
            	;?>

            </li>
            <li>

				<?php 
					$star = get_post_meta($post->ID, 'difficult' ,true);
					if( $star == 5){
						echo '<a href="#"><font color="orange">★★★★★</font></a>';
					}elseif( $star == 4){
						echo '<a href="#"><font color="orange">★★★★☆</font></a>';
					}elseif( $star == 3){
						echo '<a href="#"><font color="orange">★★★☆☆</font></a>';
					}elseif( $star == 2){
						echo '<a href="#"><font color="orange">★★☆☆☆</font></a>';
					}elseif( $star == 1){
						echo '<a href="#"><font color="orange">★☆☆☆☆</font></a>';
					}else{
						echo "その他";
					}
				?>
				
            </li>
            <li>
				
            	<?php 
            	$type = the_field('type',$post->ID);
            	if(!$type = ""){
            		echo $type;
            	} else {
            		echo "その他";
            	}
            	;?>

            </li>
            <li>
            
						<?php if( in_array( 'ユーキャン', get_field('agency') ) ){
						    echo '<a href="http://h.accesstrade.net/sp/cc?rk=01007h4500ddpb" target="_blank">生涯学習のユーキャン<img src="http://h.accesstrade.net/sp/rr?rk=01007h4500ddpb" width="1" height="1" border="0" alt="" /></a>/';
						}
						?>
						<?php if ( in_array( '大原', get_field('agency') ) ){
						    echo '<a href="http://h.accesstrade.net/sp/cc?rk=0100127300ddpb" target="_blank">資格の大原<img src="http://h.accesstrade.net/sp/rr?rk=0100127300ddpb" width="1" height="1" border="0" alt="" /></a>/';
						}
						?>
						<?php if ( in_array( 'TAC', get_field('agency') ) ){
						    echo '<a href="http://h.accesstrade.net/sp/cc?rk=010020no00ddpb" target="_blank">資格の学校ＴＡＣ<img src="http://h.accesstrade.net/sp/rr?rk=010020no00ddpb" width="1" height="1" border="0" alt="" /></a>/';
						}
						?>
						<?php if ( in_array( 'ヒューマン', get_field('agency') ) ){
						    echo '<a href="http://h.accesstrade.net/sp/cc?rk=01008d0000ddpb" target="_blank">たのまな<img src="http://h.accesstrade.net/sp/rr?rk=01008d0000ddpb" width="1" height="1" border="0" alt="" /></a>/';
						}
						?>
						<?php if ( in_array( 'KENスクール', get_field('agency') ) ){
						    echo '<a href="http://h.accesstrade.net/sp/cc?rk=0100h0k500ddpb" target="_blank">資格取得ならＫＥＮスクール<img src="http://h.accesstrade.net/sp/rr?rk=0100h0k500ddpb" width="1" height="1" border="0" alt="" /></a>/';
						}
						?> 
						<?php if ( in_array( 'その他', get_field('agency') ) ){
						    echo '';
						}
						?> 
						
            
            </li>
          </ul>
		</section>

  <?php endwhile; ?>
<?php else : ?>
  <h2>Not Found</h2>
   <p>ごめんなさい ... 記事がありませんでした ...</p>
<?php endif; ?>





	</div><!-- コンテンツ終了 -->

<?php get_footer(); ?>