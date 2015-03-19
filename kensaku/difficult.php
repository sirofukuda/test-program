<?php
/*
Template Name:  難易度一覧
*/

 get_header(); ?>
<div id="warapper"><!-- コンテンツスタート -->
	<div id="contents" class="clearfix">

	<div id="main"><!--メイン-->
	<h2><?php the_title();?></h2>


<article>

<ul class="move">
 <li><a href="#5">▼難易度５</a></li>
 <li><a href="#4">▼難易度４</a></li>
 <li><a href="#3">▼難易度３</a></li>
 <li><a href="#2">▼難易度２</a></li>
 <li><a href="#1">▼難易度１</a></li>
</ul>

<div class="difficult">

<div id="5"><h2>資格難易度５　<font color="#ffcc00">★★★★★</font>（最難関）</h2></div>


<?php
    $cat_all = get_terms( "category", "fields=all&get=all" );
    foreach($cat_all as $value):
?>



<?php $my_query = new WP_Query(array(
'category_name' => $value->slug,
'meta_key' => 'difficult', 'meta_value' => '5','meta_compare' => '='
))?>

            <?php if($my_query->have_posts()): ?>
<section class="job">
       <ul>
            <h4><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></h4>

            <?php while($my_query->have_posts()): $my_query->the_post();?>
            <a href="<?php the_permalink(); ?>">
                    <?php if(mb_strlen($post->post_title)>12) 
                    { $title= mb_substr($post->post_title,0,12) ; echo $title. ･･ ;} 
                    else {echo $post->post_title;}?>
                    </a>/


                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

        </ul>

</section>

<?php endforeach; ?>

<ul class="move">
 <li><a href="#5">▼難易度５</a></li>
 <li><a href="#4">▼難易度４</a></li>
 <li><a href="#3">▼難易度３</a></li>
 <li><a href="#2">▼難易度２</a></li>
 <li><a href="#1">▼難易度１</a></li>
</ul>

<div id="4"><h2>難易度４<font color="#ffcc00">★★★★☆</font>（難関）</h2></div>

<?php
    $cat_all = get_terms( "category", "fields=all&get=all" );
    foreach($cat_all as $value):
?>



<?php $my_query = new WP_Query(array(
'category_name' => $value->slug,
'meta_key' => 'difficult', 'meta_value' => '5','meta_compare' => '='
))?>

            <?php if($my_query->have_posts()): ?>
<section class="job">
       <ul>
            <h4><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></h4>

            <?php while($my_query->have_posts()): $my_query->the_post();?>
            <a href="<?php the_permalink(); ?>">
                    <?php if(mb_strlen($post->post_title)>12) 
                    { $title= mb_substr($post->post_title,0,12) ; echo $title. ･･ ;} 
                    else {echo $post->post_title;}?>
                    </a>/


                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

        </ul>

</section>

<?php endforeach; ?>

<ul class="move">
 <li><a href="#5">▼難易度５</a></li>
 <li><a href="#4">▼難易度４</a></li>
 <li><a href="#3">▼難易度３</a></li>
 <li><a href="#2">▼難易度２</a></li>
 <li><a href="#1">▼難易度１</a></li>
</ul>

<div id="3"><h2>難易度３<font color="#ffcc00">★★★☆☆</font>（普通）</h2></div>

<?php
    $cat_all = get_terms( "category", "fields=all&get=all" );
    foreach($cat_all as $value):
?>



<?php $my_query = new WP_Query(array(
'category_name' => $value->slug,
'meta_key' => 'difficult', 'meta_value' => '5','meta_compare' => '='
))?>

            <?php if($my_query->have_posts()): ?>
<section class="job">
       <ul>
            <h4><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></h4>

            <?php while($my_query->have_posts()): $my_query->the_post();?>
            <a href="<?php the_permalink(); ?>">
                    <?php if(mb_strlen($post->post_title)>12) 
                    { $title= mb_substr($post->post_title,0,12) ; echo $title. ･･ ;} 
                    else {echo $post->post_title;}?>
                    </a>/


                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

        </ul>

</section>

<?php endforeach; ?>

<ul class="move">
 <li><a href="#5">▼難易度５</a></li>
 <li><a href="#4">▼難易度４</a></li>
 <li><a href="#3">▼難易度３</a></li>
 <li><a href="#2">▼難易度２</a></li>
 <li><a href="#1">▼難易度１</a></li>
</ul>

<div id="2"><h2>難易度２<font color="#ffcc00">★★☆☆☆</font>（やや易しめ）</h2></div>

<?php
    $cat_all = get_terms( "category", "fields=all&get=all" );
    foreach($cat_all as $value):
?>



<?php $my_query = new WP_Query(array(
'category_name' => $value->slug,
'meta_key' => 'difficult', 'meta_value' => '5','meta_compare' => '='
))?>

            <?php if($my_query->have_posts()): ?>
<section class="job">
       <ul>
            <h4><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></h4>

            <?php while($my_query->have_posts()): $my_query->the_post();?>
            <a href="<?php the_permalink(); ?>">
                    <?php if(mb_strlen($post->post_title)>12) 
                    { $title= mb_substr($post->post_title,0,12) ; echo $title. ･･ ;} 
                    else {echo $post->post_title;}?>
                    </a>/


                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

        </ul>

</section>

<?php endforeach; ?>

<ul class="move">
 <li><a href="#5">▼難易度５</a></li>
 <li><a href="#4">▼難易度４</a></li>
 <li><a href="#3">▼難易度３</a></li>
 <li><a href="#2">▼難易度２</a></li>
 <li><a href="#1">▼難易度１</a></li>
</ul>

<div id="1"><h2>難易度１<font color="#ffcc00">★☆☆☆☆</font>（易しめ）</h2></div>

<?php
    $cat_all = get_terms( "category", "fields=all&get=all" );
    foreach($cat_all as $value):
?>
<section class="job">
<h4><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></h4>

<?php $my_query = new WP_Query(array(
'category_name' => $value->slug,
'meta_key' => 'difficult', 'meta_value' => '4','meta_compare' => '='
))?>

        <ul>
            <?php if($my_query->have_posts()): ?>
            <?php while($my_query->have_posts()): $my_query->the_post();?>

                    <a href="<?php the_permalink(); ?>">
                    <?php if(mb_strlen($post->post_title)>12) 
                    { $title= mb_substr($post->post_title,0,12) ; echo $title. ･･ ;} 
                    else {echo $post->post_title;}?>
                    </a>/

                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

        </ul>

</section>


<?php endforeach; ?>

</div>


</article>
			
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