<?php $query = new WP_Query('post_type=cpo_service&order=ASC&orderby=menu_order'); ?>
<?php if($query->posts): $feature_count = 0; ?>
<div id="services" class="services dark">
	<div class="container">
		<?php cpotheme_block('home_services', 'services-heading section-heading'); ?>
		<?php cpotheme_grid($query->posts, 'element', 'service', 3); ?>
	</div>
</div>
<?php endif; ?>
