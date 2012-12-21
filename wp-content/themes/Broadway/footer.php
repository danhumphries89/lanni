	<div id="design_navigation">
		<span class="designs navigation-title">Designs</span>
		<ul class="design-list">
			<?php wp_list_categories( array(
						'orderby' => 'ASC',
						'use_desc_for_title' => 0,
						'child_of' => 5,
						'title_li' => '',
						'show_count' => 0,
						'hide_empty' => 0
					)
				); 
			?>
		</ul>
	</div>
</div>

</body>
</html>