	<!--検索窓-->

<div class="frame">

	<section class="searchstep">
			<h3>条件を絞り込んで検索！</h3>
	</section>

	<div id="searchform">

		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">


		  <div class="select">

				<!-- カテゴリー -->
			  	<p class="control-label"><b>カテゴリ</b></p>

    			<select name="catnum" class="categoryarea">

			    	    <option value="" selected>カテゴリ</option>
    			    	<?php
        				$categories = get_categories();
        				foreach($categories as $category) :
        				?>
        		    <option value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>
  
       			<?php endforeach; ?>

				</select>

				<!-- 取得期間 -->
				<br><br>
				<p class="control-label"><b>取得期間目安</b></p>

				    <select name="period" class="categoryarea">
  
        				<option value="" selected>取得期間</option>
        				<option value="1">1ヶ月以内</option>
     				    <option value="2">3ヶ月以内</option>
        				<option value="3">半年以内</option>
        				<option value="4">1年以内</option>
        				<option value="5">3年以内</option>
  
    				</select>

		  </div>
				<!-- 難易度 -->

		 	 	<div class="difficult">

      			<p class="control-label"><b>難易度</b></p>
      				<div class="radio">
      					<input type="radio" value="1" name="difficult[]" id="woman">
     				    <label for="woman">易しい</label>
			        </div>
      				<div class="radio">
        				<input type="radio" value="2" name="difficult[]" id="woman">
        				<label for="woman">やや易しい</label>
    				</div>
    				<div class="radio">
				        <input type="radio" value="3" name="difficult[]" id="woman">
				        <label for="woman">普通</label>
				    </div>
       				<div class="radio">
    				    <input type="radio" value="4" name="difficult[]" id="woman">
    				    <label for="woman">難関</label>
    			    </div>
       				<div class="radio">
    				    <input type="radio" value="5" name="difficult[]" id="woman">
   					    <label for="woman">最難関</label>
      				</div>
	
				</div>


					    <label for="s" class="assistive-text"></label>
					    <input type="text" name="s" id="tops" placeholder="資格を探す" />
    				    <input type="image" value="検索" id ="topsearchsubmit" src="<?php bloginfo ('url'); ?>/wp-content/themes/kensaku/img/feature/glass003.png"/> 

				
		</form>

	</div>

</div>

	<!--検索窓-->