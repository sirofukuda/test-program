<?php get_header(); ?>

<div id="warapper"><!-- コンテンツスタート -->



<div id="contents" class="clearfix">



<div id="article">

  <section class="title"><h2><?php the_search_query();?>:検索結果</h2></section>


<?php
$s = $_GET['s'];
$catnum = $_GET['catnum'];
$difficult = $_GET['difficult'];
$period = $_GET['period'];

//tax_query用
if($catnum){
    $taxquerysp[] = array(
            'taxonomy'=>'category',
            'terms'=> $catnum,
            'include_children'=>false,
            'field'=>'term_id',
            'operator'=>'AND'
            );
}

//meta_query用
if($difficult){
    foreach($difficult as $val){
        $metaquerysp[] = array(
                'key'=>'difficult',
                'value'=> $val,
                );
    }
}

if($period){
    $metaquerysp[] = array(
            'key'=>'period',
            'value'=> $period,
            );
}

$metaquerysp['relation'] = 'AND';

?>

<?php
query_posts( array(
    'tax_query' => $taxquerysp,
    'meta_query' => $metaquerysp,
    's' => $s,
    )
);
?>

  <section id="list">
    <ul>
      <li>資格名</li>
      <li>取得期間</li>
      <li>難易度</li>
    </ul>
  </section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <section class="name"> 
      <ul>

        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
        <li>
          
        <?php 
          $period = get_post_meta($post->ID, 'period' ,true);
          if( $period == 1){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=1&s=&x=19&y=11" target="_blank">1ヶ月以内</a>';
          }elseif( $period == 2){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=2&s=&x=18&y=10" target="_blank">3ヶ月以内</a>';
          }elseif( $period == 3){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=3&s=&x=14&y=8" target="_blank">半年以内</a>';
          }elseif( $period == 4){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=4&s=&x=28&y=2" target="_blank">1年以内</a>';
          }elseif( $period == 5){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=5&s=&x=26&y=8" target="_blank">3年以内</a>';
          }else{
            echo "選択なし";
          }
        ?>        

        </li>
        <li>
          
        <?php 
          $star = get_post_meta($post->ID, 'difficult' ,true);
          if( $star == 5){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=&difficult%5B%5D=5&s=&x=11&y=12" target="_blank"><font color="orange">★★★★★</font></a>';
          }elseif( $star == 4){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=&difficult%5B%5D=2&s=&x=11&y=7" target="_blank"><font color="orange">★★★★☆</font></a>';
          }elseif( $star == 3){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=&difficult%5B%5D=3&s=&x=17&y=12" target="_blank"><font color="orange">★★★☆☆</font></a>';
          }elseif( $star == 2){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=&difficult%5B%5D=2&s=&x=9&y=13" target="_blank"><font color="orange">★★☆☆☆</font></a>';
          }elseif( $star == 1){
            echo '<a href="http://www.imashimaro.jp/?catnum=&period=&difficult%5B%5D=1&s=&x=15&y=21" target="_blank"><font color="orange">★☆☆☆☆</font></a>';
          }else{
            echo "その他";
          }
        ?>

        </li>

        </ul>
    </section>

<?php endwhile; else : ?>
 
<p>指定された検索結果は見つかりませんでした。</p>
<p>お手数お掛けしますが、再度他のキーワードを入力し、検索し直してください。</p>

 
<?php endif;
wp_reset_query(); ?>

</div>


<div id="aside">

<?php get_sidebar(); ?>
  <div id="gyoukai">
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

  </div>
    </div><!--サイド-->


</div>

</div>


</div>

<?php get_footer(); ?>