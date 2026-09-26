<?php

/**
 * Template Name: Home Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package justg
 */
// phpinfo();
get_header();
$container         = velocitytheme_option('justg_container_type', 'container');
?>
<div class="wrapper" id="archive-wrapper">

    <div class="<?php echo esc_attr($container); ?> p-0" id="content" tabindex="-1">

        <?php require_once(get_stylesheet_directory() . '/inc/home-slider.php'); ?>
        <div class="home-content">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            } ?>
        </div>
        <div class="row m-0">
            <!-- Do the left sidebar check -->
            <?php do_action('justg_before_content'); ?>

            <main class="site-main col order-2" id="main">
                <?php
                // echo get_option('blogname') . ' - ' . get_option('blogdescription');
                echo '<h6 class="heading-home position-relative text-center fw-bold color-theme">PRODUK TERBARU</h6>';
                require_once(get_stylesheet_directory() . '/inc/home-products.php');
                echo '<h6 class="heading-home position-relative text-center fw-bold color-theme">KERANJANG BELANJA</h6>';
                // require_once(get_stylesheet_directory() . '/inc/home-blogs.php');
                ?>
                <div class="py-3">
                    <?php echo do_shortcode('[store_cart]'); ?>
                </div>

            </main><!-- #main -->

            <!-- Do the right sidebar check. -->
            <?php do_action('justg_after_content'); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #archive-wrapper -->
<?php
get_footer();
