<div class="container header-top p-0 d-flex align-items-center justify-content-between">
    <?php $sitelogo = velocitytheme_option('custom_logo'); ?>
    <div class="">
        <?php if ($sitelogo) : ?>
            <a href="<?php get_home_url(); ?>">
                <img src="<?php echo wp_get_attachment_image_url($sitelogo, 'full'); ?>" alt="Site Logo" loading="lazy">
            </a>
        <?php endif;  ?>
    </div>
    <div class="profile-icons px-2 order-1">
        <div class="d-flex justify-content-center justify-content-md-end align-items-center">
            <div class="p-2"><?php echo do_shortcode('[profile]'); ?></div>
            <div class="p-2"><?php echo do_shortcode('[cart]'); ?></div>
        </div>
    </div>
</div>