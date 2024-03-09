<footer class="site-footer container p-0" id="colophon">
    <?php if (is_active_sidebar('footer-widget-1') || is_active_sidebar('footer-widget-2') || is_active_sidebar('footer-widget-3') || is_active_sidebar('footer-widget-4')) : ?>
        <div class="footer-sidebar bg-white">
            <div class="row p-3 mx-auto">
                <?php
                for ($x = 1; $x <= 4; $x++) :
                    if (is_active_sidebar('footer-widget-' . $x)) :
                        echo '<div class="col-md-3">';
                        dynamic_sidebar('footer-widget-' . $x);
                        echo '</div>';
                    endif;
                endfor;
                ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="kontak-seller bg-theme p-2 text-center"><?php echo do_shortcode('[kontak style="false"]'); ?></div>
    <div class="site-info text-center py-3">
        <small>
            © <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved.
            <br>
            Design by <a class="opacity-50 text-dark" href="https://velocitydeveloper.com" target="_blank" rel="noopener noreferrer"> Velocity Developer </a>
        </small>
    </div>
    <!-- .site-info -->

</footer>