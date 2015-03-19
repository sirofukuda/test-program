<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name') ;?></title>

		<!-- DNS Prefetch -->
		<meta http-equiv="x-dns-prefetch-control" content="on" />
		<link href="//www.google.com" rel="dns-prefetch" />
		<link href="//www.google-analytics.com" rel="dns-prefetch" />
		<link href="//stats.g.doubleclick.net" rel="dns-prefetch" />
		<link href="//pagead2.googlesyndication.com" rel="dns-prefetch" />
		<link href="//googleads.g.doubleclick.net" rel="dns-prefetch" />
		<link href="//www.gstatic.com" rel="dns-prefetch" />
		<link href="//www.facebook.com" rel="dns-prefetch" />
		<link href="//static.ak.facebook.com" rel="dns-prefetch" />
		<link href="//connect.facebook.net" rel="dns-prefetch "/>
		<link href="//profile.ak.fbcdn.net" rel="dns-prefetch" />
		<link href="//static.ak.fbcdn.net" rel="dns-prefetch" />
		<link href="//twitter.com" rel="dns-prefetch" />
		<link href="//cdn.api.twitter.com" rel="dns-prefetch" />
		<link href="//cdn.syndication.twitter.com" rel="dns-prefetch" />
		<link href="//syndication.twitter.com" rel="dns-prefetch" />
		<link href="//platform.twitter.com" rel="dns-prefetch" />
		<link href="//code.jquery.com" rel="dns-prefetch" />
		<link href="//b.st-hatena.com" rel="dns-prefetch" />
		<link href="//cdn-ak.b.st-hatena.com" rel="dns-prefetch" />
		<link href="//cdn.api.b.hatena.ne.jp" rel="dns-prefetch" />
		<link href="//widgets.getpocket.com" rel="dns-prefetch" />
		<!-- //DNS Prefetch -->
		<!-- モバイル用viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<!-- css START -->	
		<style>
		  @import url(http://fonts.googleapis.com/earlyaccess/notosansjapanese.css);
		</style>
		<?php if(is_front_page()): ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php elseif(is_single()) : ?>	
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/single.css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-single.css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-single.css" />
		<?php elseif(is_page('type' )) : ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/qualifying.css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-qualifying.css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-qualifying.css" />
		<?php elseif(is_page('feature' )) : ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/feature.css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-feature.css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-feature.css" />
		<?php elseif(is_page('school' )) : ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/school.css" type="text/css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-school.css" type="text/css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-school.css" type="text/css" />
		<?php elseif(is_page('cheacktest' )) : ?>
			<link rel="stylesheet" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/cheacktest.css" type="text/css" />
			<script type="text/javascript" language="javascript" src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/js/cheacktest.js"></script>
		<?php elseif(is_page('difficult' )) : ?>
			<link rel="stylesheet" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/difficult.css" type="text/css" />
		<?php elseif(is_page( array('stepup','expert','cragtsman','private') )) : ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/step.css" type="text/css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-step.css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-step.css" />
		<?php elseif(is_category()) : ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/archive.css" type="text/css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-archive.css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-archive.css" />	
		<?php elseif(is_search()) : ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/search.css" type="text/css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-search.css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-search.css" />	
		<?php elseif(is_tag()) : ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/search.css" type="text/css" />
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-search.css" />
			<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-search.css" />	
		<?php endif; ?>
			<link rel="stylesheet" media="screen and (min-width: 769px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/common.css" />	
			<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-common.css" />	
			<link rel="stylesheet" media="screen and (max-width: 640px)" href="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/css/sp/sp-common.css" />


<!-- css END -->	

		

<!-- OGP用のコード -->
<meta property="fb:admins" content="772944746103041" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:type" content="blog" />
<?php
if (is_single()){//単一記事のとき
     if(have_posts()): while(have_posts()): the_post();
          echo '<meta property="og:description" content="'.get_post_meta($post->ID,'_aioseop_description', true).'">';echo "\n";//抜粋を表示させる
     endwhile; endif;
     echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//単一記事のタイトルを表示する
     echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//単一記事のURLを表示する
} else {//単一記事ページ以外のとき（アーカイブやホームなど）
     echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログの説明文を表示させる
     echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのタイトルを表示させる
     echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのURLを表示させる
}
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<?php
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿に画像があるかをチェックする
if (is_single()){//単一記事ページの場合
if (has_post_thumbnail()){//サムネイル画像があるとき
     $image_id = get_post_thumbnail_id();
     $image = wp_get_attachment_image_src( $image_id, 'full');
     echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
} else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {//記事にサムネイル画像はないけど他に画像があるとき
     echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
} else {//サムネイル画像も他の画像もないとき
     echo '<meta property="og:image" content="http://www.imashimaro.jp/wp-content/uploads/2014/09/ogp.png">';echo "\n";
}
} else {//単一記事ページページ以外のとき（アーカイブやホームなど）
     echo '<meta property="og:image" content="http://www.imashimaro.jp/wp-content/uploads/2014/09/ogp.png">';echo "\n";
}
?>
<!-- ここまで -->

		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<!--多言語化-->		
		<script src="//j.wovn.io/0" data-wovnio="key=8J9Pb"></script>
<!-- user heat START -->	
		<script src="http://f1.nakanohito.jp/lit/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">try { var lb = new Vesicomyid.Bivalves("129056"); lb.init(); } catch(err) {} </script>
<!-- user heat END -->	

<!-- twitter Tracking -->

<script>
(function(){
var twitterWidgets = document.createElement('script');
twitterWidgets.type = 'text/javascript';
twitterWidgets.async = true;
twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
// Setup a callback to track once the script loads.
twitterWidgets.onload = _ga.trackTwitter;
document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
})();
</script>

<!-- Google Analytics Social Button Tracking -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53195186-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

<!-- Google Analytics Social Button Tracking -->
<script type="text/javascript" src="<?php bloginfo ('url'); ?>/wp-content/themes/shikaku/js/ga_social_tracking.js">
</script>

 <script type="text/javascript" src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/js/modernizr.js"></script>

<script>
	$(function(){
		  $("#toggle").click(function(){
		    $("#menu").slideToggle();
		    return false;
		  });
		  $(window).resize(function(){
		    var win = $(window).width();
		    var p = 480;
		    if(win > p){
		      $("#menu").show();
		    } else {
		      $("#menu").hide();
		    }
		  });
	});	

</script>

	<?php wp_head(); ?>	
</head>
<body><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=772944746103041&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<header id="topbelt" class="clearfix">
		<div id="title"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/glass003.png"><?php bloginfo('name'); ?></a></div>
		<ul id="outline">
			<li><a href="<?php bloginfo ('url'); ?>/difficult">難易度別資格一覧</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/what"><?php bloginfo('name'); ?>とは</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/about">会社概要</a></li>
			<li><a href="<?php bloginfo ('url'); ?>/inquiry">問い合わせ</a></li>
		</ul>
	</header>

	<header id="menu-box">		
		<div id="toggle"><a href="#">menu</a></div>
		<nav>
			<ul id="menu" class="">
				<li><a href="<?php echo home_url('/'); ?>/#article">業種から探す</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/type">なんとなく探す</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/feature">特集から探す</a></li>
				<li><a href="<?php bloginfo ('url'); ?>/school">学校一覧</a></li>
			</ul>
		</nav>
		<div class="headerBottom">
			<div class="headerBottomInr">
			<?php if(is_singular( array('special','fe','days','school') )) :?>
				<h1><?php the_title();?>【資格のケンサク】</h1>
			<?php elseif(is_single()) :?>
				<h1><?php the_title();?>の難易度/取得期間/受験費用の情報</h1>		
			<?php elseif(is_front_page()): ?>
				<h1>資格の難易度/取得期間/受験費用などの情報を掲載！【資格のケンサク】</h1>
			<?php else : ?>
				<h1><?php the_title();?>【資格のケンサク】</h1>
			<?php endif; ?>
			</div>			
		</div>
	</header><!-- ヘッダー終了 -->