<?php add_theme_support('post-thumbnails'); ?>

<?php
//検索結果で投稿ページだけ表示する
function custom_search($search, $wp_query) {
    //サーチページ以外だったら終了
    if (!$wp_query->is_search) return;
    //投稿記事のみ検索
    $search .= " AND post_type = 'post'";
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);
?>

<?php
//アーカイブページで現在のカテゴリー・タグ・タームを取得する
function get_current_term(){

	$id;
	$tax_slug;

	if(is_category()){
		$tax_slug = "category";
		$id = get_query_var('cat');	
	}else if(is_tag()){
		$tax_slug = "post_tag";
		$id = get_query_var('tag_id');	
	}else if(is_tax()){
		$tax_slug = get_query_var('taxonomy');	
		$term_slug = get_query_var('term');	
		$term = get_term_by("slug",$term_slug,$tax_slug);
		$id = $term->term_id;
	}

	return get_term($id,$tax_slug);
}

?>