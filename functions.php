<?php
/**
 * OnePress Child Theme Functions
 *
 */
/**
 * Enqueue child theme style
 */
add_action( 'wp_enqueue_scripts', 'onepress_child_enqueue_styles', 15 );
function onepress_child_enqueue_styles() {
    wp_enqueue_style( 'onepress-child-style', get_stylesheet_directory_uri() . '/style.css' );
}
/**
 * Hook to add custom section after about section
 *
 * @see wp-content/themes/onepress/template-frontpage.php
 */

    function onepress_site_header(){
        ?>
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="site-branding">
                <?php
                onepress_site_logo();
                ?>
                </div>
            </div>
                <!-- .site-branding -->
            <div class="container">
                <div class="number-wrap">
                    <p class="city">Call for a
                    <br>Free Consultation:</p>
                    <p class="number"><a href="tel:6512000000" class="phone"><font class="number" >(651) 200-0000</font></a>
                    </p>
                </div>
            </div>
                <div class="header-right-wrapper">
                    <a href="#0" id="nav-toggle"><?php _e('Menu', 'onepress'); ?><span></span></a>
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <ul class="onepress-menu">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </nav>
                    <!-- #site-navigation -->
                </div>
        </header><!-- #masthead -->
        <?php
    }
