<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' ); 
?>

<div id="content" tabindex="-1" class="">

    <div>
        <?php get_template_part('template-parts/sections/section--hero', '' , [
            'title'     => 'Get in Touch',
            'subtitle'  => 'Contact',
            'noScroll'  => false
        ])?>
    </div>

    <div class="row">
        <?php
        // Do the left sidebar check and open div#primary.
        get_template_part( 'global-templates/left-sidebar-check' );
        ?>

        <main class="site-main" id="main">

           <section class="section--contact">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="">
                                <span class="text-primary fw-bold">Email </span><br />
                                <a href="mailto:hello@themodel.com.au" class="text-primary mt-3 td-none">hello@themodel.com.au</a>
                                <div class="mt-6 d-flex justify-content-start">
                                <?php get_template_part( 'template-parts/public/social-media' ) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h4 class="">Thank you for taking the first step.</h4>
                            <p class="content my-5">
                                We are excited to rethink the art and heart of living alongside like-minded partners and pioneers.
                            </p>
                            <p>
                                If you haven’t already, be sure to <a href="" class="text-dark">download ourwhite paper</a> on decarbonising the future now.
                            </p>
                            <p>
                                We look forward to speaking soon, 
                            </p>

                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri() . "/img/rory-hunter-signature.png" ?>" alt="">
                                <p class="fw-bold">Rory Hunter</p>
                                <span>Founder, Model</span>
                            </div>
                        </div>
                    </div>
            </div>
           </section>

        </main>

        <?php
        // Do the right sidebar check and close div#primary.
        get_template_part( 'global-templates/right-sidebar-check');
        ?>
    </div>
    <!-- end row -->

</div>
<!-- end #content-->

<?php 
get_footer();