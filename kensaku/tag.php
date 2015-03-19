<?php get_header(); ?>
<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2>
		<span id="cate-icon2">
<?php
     $term = get_current_term(); 
     echo $term->name;
?>
の資格の種類一覧</span>
	</h2>

  <section id="list">
    <ul>
      <li>資格名</li>
      <li>取得期間</li>
      <li>難易度</li>
    </ul>
  </section>

<!--ul id="ul2"-->
<?php query_posts($query_string.'&posts_per_page=100'); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>


	<section class="name">
     <ul>

    	<li><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>20) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;
		} else {echo $post->post_title;}?></a></li>

        <li>
          
        <?php 
          $period = get_post_meta($post->ID, 'period' ,true);
          if( $period == 5){
            echo '<a href="http://www.yahoo.jp" target="_blank">1ヶ月以内</a>';
          }elseif( $period == 4){
            echo '<a href="http://www.yahoo.jp" target="_blank">3ヶ月以内</a>';
          }elseif( $period == 3){
            echo '<a href="http://www.yahoo.jp" target="_blank">半年以内</a>';
          }elseif( $period == 2){
            echo '<a href="http://www.yahoo.jp" target="_blank">1年以内</a>';
          }elseif( $period == 1){
            echo '<a href="http://www.yahoo.jp" target="_blank">3年以内</a>';
          }else{
            echo "選択なし";
          }
        ?>        
        <p><?php echo $label; ?></p>

        </li>
        <li>
          
        <?php 
          $star = get_post_meta($post->ID, 'difficult' ,true);
          if( $star == 5){
            echo '<a href="http://www.yahoo.jp" target="_blank"><font color="orange">★★★★★</font></a>';
          }elseif( $star == 4){
            echo '<a href="http://www.yahoo.jp" target="_blank"><font color="orange">★★★★☆</font></a>';
          }elseif( $star == 3){
            echo '<a href="http://www.yahoo.jp" target="_blank"><font color="orange">★★★☆☆</font></a>';
          }elseif( $star == 2){
            echo '<a href="http://www.yahoo.jp" target="_blank"><font color="orange">★★☆☆☆</font></a>';
          }elseif( $star == 1){
            echo '<a href="http://www.yahoo.jp" target="_blank"><font color="orange">★☆☆☆☆</font></a>';
          }else{
            echo "その他";
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