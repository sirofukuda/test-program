<?php
/*
Template Name:  タイプ別資格一覧
*/

 get_header(); ?>

	<div id="warapper"><!-- コンテンツスタート -->
	<section class="main clearfix">
		<div class="figure">
			<img src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/top/top2.jpg">
		</div>
		<div class="information">
			<h2>これから資格を探そうとしている方へ</h2>
			<p>基礎的な資格はあなたの可能性を広げ、技術的な資格や専門性の高い資格を取得すると、それを仕事にできる場合もあります。</p></br>
			<p>あなたが将来やりたいことやなりたいものから逆算してみて、今、欲しい資格を決めてみませんか？</p>

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

	<div id="article" ><!--タイプ別スタート-->

	<section class="business">
			<h3>タイプ別に資格を探す！</h3>
	</section>
	<section class="stage clearfix">
		<section id="stepup"><!-- 段階スタート -->
				<a href="<?php bloginfo ('url'); ?>/stepup"><h3>資格一覧</h3></a>		

			<section id="stepcontents"><!-- 白枠スタート -->
				<section class="bunkei">

				<ul>

					<?php $my_query = new WP_Query(array(
					'posts_per_page' => '13',//件数指定の場合
					'meta_query' => array(
   	 						array(
        					'key' => 'type',
      	 					'value' => 'shikaku',
        					'compare' => 'LIKE'
    						),
    						array(
    						'key' => 'difficult',
    						'value' => '2',
    						'compare' => '<='
    						),
    						'relation'=>'AND'
							)
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>

					<?php endwhile;wp_reset_query(); ?>

				</ul>

				</section>

				<section class="bunkei">


				<ul>

					<?php $my_query = new WP_Query(array(
					'posts_per_page' => '13',//件数指定の場合
					'meta_query' => array(
   	 						array(
        					'key' => 'type',
      	 					'value' => 'shikaku',
        					'compare' => 'LIKE'
    						),
    						array(
    						'key' => 'difficult',
    						'value' => '2',
    						'compare' => '>'
    						),
    						'relation'=>'AND'
							)
						)
					); ?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>

					<?php endwhile;wp_reset_query(); ?>

				</ul>


				</section>

	
			</section><!-- 白枠終了 -->

			<section class="explain">
				<h4>"資格"って？</h4>
				<p>あるジャンルにおいて、基礎的な分野、幅広い分野をカバーしていると見られる資格としました。
					その業界が自分に向いているのかどうか、ちょっとした腕試しをしたい人や、今後難しい資格にチャレンジしたい人などは、まずこの資格から取得すると良いでしょう。</p>

			</section>	

		</section><!-- 段階終了 -->
		<section id="expert">
			<a href="<?php bloginfo ('url'); ?>/expert"><h3>検定一覧</h3></a>			
			<section id="shigyocontents"><!-- 白枠スタート -->
				<section class="bunkei">

				<ul>

					<?php $my_query = new WP_Query(array(
					'posts_per_page' => '13',//件数指定の場合
					'meta_query' => array(
   	 						array(
        					'key' => 'type',
      	 					'value' => 'kentei',
        					'compare' => 'LIKE'
    						),
    						array(
    						'key' => 'difficult',
    						'value' => '2',
    						'compare' => '<='
    						),
    						'relation'=>'AND'
							)
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>


					<?php endwhile;wp_reset_query(); ?>

				</ul>

				</section>

				<section class="bunkei">

				<ul>

					<?php $my_query = new WP_Query(array(
					'posts_per_page' => '13',//件数指定の場合
					'meta_query' => array(
   	 						array(
        					'key' => 'type',
      	 					'value' => 'kentei',
        					'compare' => 'LIKE'
    						),
    						array(
    						'key' => 'difficult',
    						'value' => '2',
    						'compare' => '>'
    						),
    						'relation'=>'AND'
							)
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>

					<?php endwhile;wp_reset_query(); ?>

				</ul>

				</section>

			</section><!-- 白枠スタート -->

			<section class="explain">
				<h4>"検定"って？</h4>
				<p>士業（しぎょう）とは、日本における「-士」という名称の専門資格職業の俗称です。</br>
				これらの資格は、難易度も高く、資格取得までの時間もかかりますが、取得することで、手に職を持つことができる資格となります。</p>

			</section>	

		</section>

		<section id="cragtsman">
			<a href="<?php bloginfo ('url'); ?>/cragtsman"><h3>国家資格・公的資格</h3></a>			
			<section id="excontents"><!-- 白枠スタート -->
				<section class="bunkei">

				<ul>

					<?php $my_query = new WP_Query(array(					
					'posts_per_page' => '13',//件数指定の場合
					'tag' => '国家資格,公的資格',
					'meta_query' => array(
   	 						array(
        					'key' => 'difficult',
      	 					'value' => '2',
        					'compare' => '<='
    						),					
						)
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<?php if(get_post_meta($post->ID,'difficult',compare) <= '3') :?>	
						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>
						<?php endif; ?>

					<?php endwhile;wp_reset_query(); ?>

				</ul>

				</section>

				<section class="bunkei">

				<ul>

					<?php $my_query = new WP_Query(array(
					'posts_per_page' => '13',//件数指定の場合
					'tag' => '国家資格,公的資格',
					'meta_query' => array(
   	 						array(
        					'key' => 'difficult',
      	 					'value' => '2',
        					'compare' => '>'
    						),					
						)					
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>


					<?php endwhile;wp_reset_query(); ?>

				</ul>

				</section>


			</section><!-- 白枠スタート -->

			<section class="explain">
				<h4>"専門・職人系資格"って？</h4>
				<p>専門性の高い仕事、技術職系の資格としました。<br>
					これらの資格を取得することで、所謂「手に職がある」人となります。高度な専門知識を要する場合、会社に雇われずに生活していくこともできるかもしれません。</p>

			</section>	

		
		</section>

		<section id="private">
			<a href="<?php bloginfo ('url'); ?>/private"><h3>民間資格</h3></a>					
			<section id="prvcontents"><!-- 白枠スタート -->
				<section class="bunkei">

				<ul>

					<?php $my_query = new WP_Query(array(
					'tag' => '民間資格',
					'posts_per_page' => '13',//件数指定の場合,
					'meta_query' => array(
   	 						array(
        					'key' => 'difficult',
      	 					'value' => '2',
        					'compare' => '<='
    						),					
						)					
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<?php if(get_post_meta($post->ID,'difficult',compare) <= '2') :?>	
						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>
						<?php endif; ?>
					<?php endwhile;wp_reset_query(); ?>

				</ul>

				</section>

				<section class="bunkei">

				<ul>

					<?php $my_query = new WP_Query(array(
					//'category_name' => 'other',//カテゴリ指定の場合
					'posts_per_page' => '13',//件数指定の場合
					'tag' => '民間資格',
					'meta_query' => array(
   	 						array(
        					'key' => 'difficult',
      	 					'value' => '2',
        					'compare' => '>'
    						),					
						)					
					)); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<?php if(get_post_meta($post->ID,'difficult',compare) >= '3') :?>	
						<li>
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen($post->post_title)>10) 
							{ $title= mb_substr($post->post_title,0,10) ; echo $title. ･･ ;} 
							else {echo $post->post_title;}?>
							</a>
						</li>
						<?php endif; ?>

					<?php endwhile;wp_reset_query(); ?>

				</ul>

				</section>



			</section><!-- 白枠スタート -->

			<section class="explain">
				<h4>"民間・実践系資格"って？</h4>
				<p>民間系の資格、実務で役立つ資格としました。
					民間の資格は主に実務や、職場で役立つものが多く、普段の自分よりワンステップ成長したい。業界の知識をもっと知りたい、他の人に差をつけたいという人にオススメです。</p>

			</section>	

		</section>
		
	</div><!--type　タイプ別終了　-->
	
	<div id="aside"><!-- サイドバー -->

		<?php get_sidebar(); ?>

		<div id="gyousyu">
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
	</div>


	</div><!-- サイドバー終了　-->


	

	

	</div><!--contents コンテンツ終了--> 

	</stage>
	</section>
	</div><!-- コンテンツ終了 -->

<?php get_footer(); ?>