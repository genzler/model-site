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
            'title'     => 'Beyond the Now',
            'subtitle'  => 'Our VIsion',
            'noScroll'  => true
        ])?>
    </div>

    <div class="row">

        <?php
        // Do the left sidebar check and open div#primary.
        get_template_part( 'global-templates/left-sidebar-check' );
        ?>

        <main class="site-main" id="main">

            <section class="section--content-lg bg-cream" id="next-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <div class="pe-md-3">
                                <h4 class="mb-sm-7 fw-500-w-100">We are one for thinking beyond - beyond today, beyond the conventional, beyond our local markets. </h4>
                                <p class="content mb-0">
                                    Our vision is our guide to reach our goals. They are bold. They are brave. They will change the way rental works. This is your invitation to join us. 
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 offset-sm-1">
                            <img src="<?php echo get_stylesheet_directory_uri(). "/img/vision-content.png" ?>" alt="">
                        </div>
                    </div>
                </div>
                
            </section>

            <section class="section--dates" id="">
                <div class="container">
                    <div class="d-flex">
                        <div class="date-title">
                            <span class="text-primary h2 fw-700">Now</span>
                        </div>
                        <div class="arrow">
                            <svg width="628" height="15" viewBox="0 0 628 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M627.707 8.20705C628.098 7.81653 628.098 7.18336 627.707 6.79284L621.343 0.428878C620.953 0.0383535 620.319 0.0383536 619.929 0.428878C619.538 0.819402 619.538 1.45257 619.929 1.84309L625.586 7.49995L619.929 13.1568C619.538 13.5473 619.538 14.1805 619.929 14.571C620.319 14.9615 620.953 14.9615 621.343 14.571L627.707 8.20705ZM8.74228e-08 8.5L627 8.49995L627 6.49995L-8.74228e-08 6.5L8.74228e-08 8.5Z" fill="#CB6959"/>
                            </svg>
                        </div>
                        <div class="right-title text-end">
                            <span class="h2 text-primary fw-700">December 2024</span>
                        </div>
                    </div>

                    <div class="row align-items-center mt-8">
                        <div class="col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri(). '/img/december-2024-elipsis.png'?>" />
                        </div>
                        <!-- end col -->

                        <div class="col-sm-5 ps-md-4">
                            <div class="pe-md-3">
                                <p class="fs--base-lg fw-500-w-100 lh--md">Model will be focusing on building a pipeline of 1,000 apartments in Melbourne with a development value of $500million.</p>
                            </div>
                            <div class="mt-60px">
                                <div class="fs-110px text-primary mb-1 pb-1"><span class="border-bottom border-primary border-2">1,000 &nbsp;&nbsp;</span></div>
                                <div class="text-primary"><h4>Apartments</h4></div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </section>

            <section class="section--dates section--dates-with-bg" id="">
                <div class="container">

                    <div class="d-flex align-items-center">
                        <div class="date-title-lg">
                            <span class="text-white h2 fw-700">December 2024</span>
                        </div>
                        <div class="arrow mt-1">
                            <svg width="511" height="15" viewBox="0 0 511 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M510.707 8.20706C511.098 7.81654 511.098 7.18337 510.707 6.79285L504.343 0.428888C503.953 0.0383637 503.319 0.0383638 502.929 0.428888C502.538 0.819413 502.538 1.45258 502.929 1.8431L508.586 7.49996L502.929 13.1568C502.538 13.5473 502.538 14.1805 502.929 14.571C503.319 14.9615 503.953 14.9615 504.343 14.571L510.707 8.20706ZM8.74228e-08 8.5L510 8.49996L510 6.49996L-8.74228e-08 6.5L8.74228e-08 8.5Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="right-title text-end">
                            <span class="h2 text-white fw-700">Onwards</span>
                        </div>
                    </div>

                    

                    <div class="row align-items-center mt-215px">
                        <div class="col-sm-6">
                            <div class="pe-md-5">
                                <p class="text-white h4 fw-500-w-100">After establishing our foothold in Melbourne, our focus will extend to developments in Sydney and the eastern seaboard.</p>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-sm-5">
                            
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </section>

            <section class="section--dates section--dates-lg bg-cream" id="">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-sm-8 mt-2">
                            <svg width="1028" height="15" viewBox="0 0 1028 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1027.71 8.20706C1028.1 7.81654 1028.1 7.18337 1027.71 6.79285L1021.34 0.428889C1020.95 0.0383643 1020.32 0.0383644 1019.93 0.428889C1019.54 0.819413 1019.54 1.45258 1019.93 1.8431L1025.59 7.49996L1019.93 13.1568C1019.54 13.5473 1019.54 14.1805 1019.93 14.571C1020.32 14.9615 1020.95 14.9615 1021.34 14.571L1027.71 8.20706ZM8.74228e-08 8.50005L1027 8.49996L1027 6.49996L-8.74228e-08 6.50005L8.74228e-08 8.50005Z" fill="#CB6959"/>
                            </svg>
                        </div>
                    <div class="col-sm-4 text-end">
                            <span class="h2 text-primary text-end fw-700">By 2030</span>
                        </div>
                    </div>

                    <div class="row align-items-center mt-155px">
                        <div class="col-sm-5">
                            <div>
                                <div class="fs-110px text-primary mb-2">
                                    <span class="border-bottom border-primary bottom-2">5,000 &nbsp;&nbsp;</span>
                                </div>
                                <div class="text-primary"><h4>Apartments</h4></div>
                                <div class="width-300">
                                    <p class="text-primary fw-300 fs--base-lg lh--md">In operation and/or under development by 2030</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-sm-7 mt-4">
                            <p class="lh--md fs--base-lg fw-500-w-100">To have 5,000 apartments in operation and/or under development across Australia - all of which will be pioneering global exemplars of decarbonised, connected communities.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section--dates section--dates-lg" id="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="h2 text-primary fw-700">Plans for expansion</p>
                        </div>
                        <div class="col-sm-7 text-end mt-1">
                            <svg width="730" height="15" viewBox="0 0 730 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M729.707 8.2071C730.098 7.81658 730.098 7.18341 729.707 6.79289L723.343 0.42893C722.953 0.0384056 722.319 0.0384057 721.929 0.42893C721.538 0.819455 721.538 1.45262 721.929 1.84314L727.586 7.5L721.929 13.1569C721.538 13.5474 721.538 14.1805 721.929 14.5711C722.319 14.9616 722.953 14.9616 723.343 14.5711L729.707 8.2071ZM8.74228e-08 8.50006L729 8.5L729 6.5L-8.74228e-08 6.50006L8.74228e-08 8.50006Z" fill="#CB6959"/>
                            </svg>

                        </div>
                    </div>

                    <div class="row align-items-center mt-36px">
                        <div class="col-sm-6">
                            <div class="border-bottom border-2 border-primary pb-5 pe-md-5">
                                <p class="fw-500-w-100 lh--md fs--base-lg">As both a developer and operator, Model will be creating a strong customer-focussed service ethic and brand. </p>

                                <p class="fw-500-w-100 lh--md fs--base-lg">Over time, we will look to scale out our operations platform and partner with other developers in the same way hotel managers do today.</p>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-sm-6 text-end">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/plans-for-expansion.png" ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section--dates section--dates-lg bg-black" id="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="h2 text-primary fw-700">Beyond Australia</p>
                        </div>
                        <div class="col-sm-7 text-end mt-2">
                            <svg width="730" height="15" viewBox="0 0 730 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M729.707 8.2071C730.098 7.81658 730.098 7.18341 729.707 6.79289L723.343 0.42893C722.953 0.0384056 722.319 0.0384057 721.929 0.42893C721.538 0.819455 721.538 1.45262 721.929 1.84314L727.586 7.5L721.929 13.1569C721.538 13.5474 721.538 14.1805 721.929 14.5711C722.319 14.9616 722.953 14.9616 723.343 14.5711L729.707 8.2071ZM8.74228e-08 8.50006L729 8.5L729 6.5L-8.74228e-08 6.50006L8.74228e-08 8.50006Z" fill="#CB6959"/>
                            </svg>

                        </div>
                    </div>

                    <div class="row align-items-center mt-75px">
                        <div class="col-sm-6">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/img/beyond-australia.png" ?>" alt="">
                        </div>
                        <div class="col-sm-6 mt-4 ps-md-8 pe-md-6">
                            <div class="border-bottom border-2 border-primary pb-5">
                                <p class="text-white fw-500-w-100 lh--md fs--base-lg">Once we have grown in reach and impression in Australia, we plan to launch in other key markets including New Zealand, United Kingdom and the United States.</p>
                            </div>
                        </div>
                        <!-- end col -->

                        
                    </div>
                </div>
            </section>

                <!-- call to action -->
            <?php get_template_part( 'template-parts/sections/section--call-to-action' ) ?>

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