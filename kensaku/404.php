<?php get_header(); ?>

	<div id="warapper"><!-- コンテンツスタート -->
	<section class="main clearfix">
		<div class="figure">
			<img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/top2.jpg">
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

	<div id="article" ><!--記事一覧スタート-->
<p>大変申し訳ございませんが、御指定のページは見つかりませんでした。</p>

<p>ページが削除された、もしくは工事中で公開されていない可能性がございます。</p>

<p>お手数、御面倒をおかけいたしますが、トップページにお進みになられるか、<br>検索欄よりお探しのページを検索してくださいますよう御願い申し上げます。</p>

<h3><a href="http://www.imashimaro.jp">⇒トップページへ戻る</a></h3>

<script type="text/javascript">
  var GOOG_FIXURL_LANG = 'ja';
  var GOOG_FIXURL_SITE = 'http://www.imashimaro.jp/'
</script>
<script type="text/javascript"
  src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js">
</script>
	</div><!--category　記事一覧終了　-->

	<div id="aside">

		<?php get_sidebar(); ?>

	<!--段階-->
	<section class="step">
			<h3>段階別に資格を探す！</h3>
	</section>

		<section id="stepup">

			<section class="kari">
				
				<a href="<?php bloginfo ('url'); ?>/stepup"><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/stepup.jpg"></a>

			</section>

		</section>
		<section id="expert">		
			<section class="kari">
				
				<a href="<?php bloginfo ('url'); ?>/expert"><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/sigyou2.jpg"></a>

			</section>			

		</section>
		<section id="cragtsman">
		
			<section class="kari">
				
				<a href="<?php bloginfo ('url'); ?>/cragtsman"><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/senmon.jpg"></a>

			</section>

		</section>

		<section id="private">

			<section class="kari">
				
				<a href="<?php bloginfo ('url'); ?>/private"><img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/minkan2.jpg"></a>

			</section>
		</section>
		
		<!-- 段階別　-->

	</div>
	</div><!--contents カラム終了-->

	</div><!-- wrapper コンテンツ終了 -->

<?php get_footer(); ?>