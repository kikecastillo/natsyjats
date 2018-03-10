<?php wp_reset_query(); ?>

<?php if(cpotheme_show_title()): ?>

<?php $header_image = cpotheme_header_image(); ?>
<?php if($header_image != '') $header_image = 'style="background-image:url('.esc_url($header_image).');"'; ?>
<?php do_action('cpotheme_before_title'); ?>
<section id="pagetitle" class="pagetitle dark" <?php echo $header_image; ?>>
		<?php do_action('cpotheme_title'); ?>
		<?php cpotheme_post_media( get_the_ID(), 'image' ); ?>
</section>
<?php do_action('cpotheme_after_title'); ?>

<?php endif; ?>
