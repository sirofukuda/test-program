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