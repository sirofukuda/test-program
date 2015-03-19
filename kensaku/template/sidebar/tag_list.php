	<section class="step">
			<h3>関連タグ一覧</h3>
	</section>

		<?php if(has_tag()): ?>
            <?php the_tags('<ul class="tag"><li>', '</li><li>', '</li></ul>'); ?>
        <?php endif; ?>