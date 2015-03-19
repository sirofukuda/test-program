<?php get_header(); ?>

<div id="warapper"><!-- コンテンツスタート -->

	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->

		<?php if(!is_home()): ?>
		<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
		<?php endif; ?>

		<h2><?php the_title();?></h2>
		<section id="singlemain" class="clearfix">
			<div id="singlefigure">
				<?php the_post_thumbnail('medium'); ?>
			</div>
			<div id="singleinformation">

				<section class="table clearfix">
					<section class="dif">資格or検定</section>
						<section class="number">
							<?php
							$type = get_post_meta($post->ID, 'type' ,true);
							if($type == shikaku){
							echo '<a href="http://www.imashimaro.jp/stepup">資格</a>';
							} else if($type == kentei){
							echo '<a href="http://www.imashimaro.jp/expert">検定</a>';
							} else {
							echo '<a href="http://www.imashimaro.jp/expert">検定</a>';
							}
							;?>
						</section>			
				</section>	

				<section class="table clearfix">
					<section class="dif">難易度</section>
						<section class="number">					
					<?php 
						$star = get_post_meta($post->ID, 'difficult' ,true);
						if( $star == 5){
							echo '<a href="http://www.imashimaro.jp/difficult#5"><font color="orange">★★★★★</font></a>';
						}elseif( $star == 4){
							echo '<a href="http://www.imashimaro.jp/difficult#4"><font color="orange">★★★★☆</font></a>';
						}elseif( $star == 3){
							echo '<a href="http://www.imashimaro.jp/difficult#3"><font color="orange">★★★☆☆</font></a>';
						}elseif( $star == 2){
							echo '<a href="http://www.imashimaro.jp/difficult#2"><font color="orange">★★☆☆☆</font></a>';
						}elseif( $star == 1){
							echo '<a href="http://www.imashimaro.jp/difficult#1"><font color="orange">★☆☆☆☆</font></a>';
						}else{
							echo "その他";
						}
					?>
					</section>
				</section>

				<section class="table clearfix">
					<section class="dif">取得期間</section>
					<section class="number"><?php the_field('meyasu',$post->ID); ?></section>			
				</section>

				<section class="table clearfix">
					<section class="dif">受験費用</section>
					<section class="number"><?php the_field('keihi',$post->ID); ?></section>
				</section>

				<section class="table clearfix">
					<section class="dif">合格率</section>
					<section class="number"><?php the_field('kakuritu',$post->ID); ?></section>
				</section>

				<section class="table clearfix">
					<section class="dif">試験回数</section>
					<section class="number"><?php the_field('jiki',$post->ID); ?></section>
				</section>

				<section class="categorylast clearfix">
					<section class="dif">主催</section>
					<section class="number"><?php the_field('syusai',$post->ID); ?></section>
				</section>

			</div>
		</section>
			
			<h3><span><?php the_title(); ?>ってどんな資格？</span></h3>

				<?php the_content(); ?>

			<div id="work">
						<?php
						$title = get_the_title();
						$work = get_post_meta( get_the_ID(), 'work1', true);
						if( $work != NULL){
							echo '<h3><span>';
							echo $title;
							echo 'を取得すると出来る仕事</span></h3>';
							echo wpautop($work);
						}
						?>
			</div>
			<div id="feature">
						<?php
						$title = get_the_title();
						$feature = get_post_meta( get_the_ID(), 'feature', true);
						if ( $feature != NULL){
							echo '<h3><span>';
							echo $title;
							echo 'の特徴</span></h3>';
							echo wpautop($feature);
						}
						?>
			</div>

					
				<?php

				if( in_array( 'その他', get_field('agency'))){
					echo '';
				} else {
					echo '<h3><span>'.$title.'の取得ができる機関</span></h3>';
					echo '<div id="ad2"><ul>';
				}

				;?>
		
				<?php if( in_array( 'ユーキャン', get_field('agency') ) ){
				    echo '<li><a href="http://h.accesstrade.net/sp/cc?rk=0100fl2x00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100fl2x00ddpb" alt="生涯学習のユーキャン　教材購入プロモーション" border="0" /></a></li>';
				}
				?>
				<?php if ( in_array( '大原', get_field('agency') ) ){
				    echo '<li><a href="http://h.accesstrade.net/sp/cc?rk=010010wl00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=010010wl00ddpb" alt="資格の大原" border="0" /></a></li> ';
				}
				?>
				<?php if ( in_array( 'TAC', get_field('agency') ) ){
				    echo '<li><a href="http://h.accesstrade.net/sp/cc?rk=0100dpea00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100dpea00ddpb" alt="" border="0" /></a></li>';
				}
				?>
				<?php if ( in_array( 'ヒューマン', get_field('agency') ) ){
				    echo '<li><a href="http://h.accesstrade.net/sp/cc?rk=01008d0r00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=01008d0r00ddpb" alt="" border="0" /></a></li>';
				}
				?>
				<?php if ( in_array( 'KENスクール', get_field('agency') ) ){
				    echo '<li><a href="http://h.accesstrade.net/sp/cc?rk=0100h0jq00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100h0jq00ddpb" alt="" border="0" /></a></li>';
				}
				?> 
				<?php if ( in_array( 'アビバ', get_field('agency') ) ){
				    echo '<li><a href="http://h.accesstrade.net/sp/cc?rk=0100gyaz00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100gyaz00ddpb" alt="" border="0" /></a></li>';
				}
				?> 
				<?php if ( in_array( 'アビダス', get_field('agency') ) ){
				    echo '<li><a href="http://h.accesstrade.net/sp/cc?rk=0100fjvk00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100fjvk00ddpb" alt="" border="0" /></a></li>';
				}
				?> 
				<?php if ( in_array( 'その他', get_field('agency') ) ){
				    echo '';
				}
				?> 

				<?php

				if( in_array( 'その他', get_field('agency'))){
					echo '';
				} else {
					echo '</ul></div>';
				}

				;?>

			<div id="exam">
						<?php
						$exam = get_post_meta( get_the_ID(), 'exam', true);
						$title = '<h3 id="heading3"><span>受験内容</span></h3>';
						if($exam != NULL){
							echo $title;
							echo wpautop($exam);
						}
						else{
						echo null;
						}
						?>
			</div>

		</div><!--メイン-->
		<div id="aside"><!--サイド-->

		<?php get_sidebar(); ?>

			<section class="step">
				<h3>
					<?php $cat = get_the_category(); ?>
					<?php $cat = $cat[0]; ?>
					<?php echo get_cat_name($cat->term_id); ?>の資格一覧
				</h3>
			</section>
			<?php
				$post_id = get_the_ID();
				foreach((get_the_category()) as $cat) {
				$cat_id = $cat->cat_ID ;
				break ;
				}
				query_posts(
					array(
						'cat' => $cat_id,
//						'showposts' => 5,
						'post__not_in' => array($post_id)
						)
				);
				if(have_posts()) :
			?>
			<ul>
				<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
			</ul>


			<?php endif; ?>
			<?php wp_reset_query(); ?>

	<!-- タグ -->

		<?php require_once('template/sidebar/tag_list.php');?>

	<!-- 五十音順 -->

		<?php require_once('template/sidebar/az_list.php');?>

	<!-- 診断テスト -->

		<?php require_once('template/sidebar/test_list.php');?>

	<!-- 学校一覧 -->

		<?php require_once('template/sidebar/school_list.php');?>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 資格300×250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-1941656524240097"
     data-ad-slot="6770572940"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


		</div><!--サイド-->
	</div>

	</div><!-- wrapper コンテンツ終了 -->


<?php get_footer(); ?>