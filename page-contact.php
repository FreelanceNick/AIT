<?php
/*

Template Name: Contact

*/

get_header();

?>

<div class="jumbotron" style="background-image: url(<?php the_field('jumbotron'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12 margin-block-end-4">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>
            <div class="col-auto">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row justify-content-around padding-block-8">
            <div class="col-md-5 order-2 order-md-1">
                <address class="contact-info margin-block-start-8 flow">
                    <div>
                        <h4>Home Office</h4>
                        <p>
                            20540 HWY 46 W, 
                            <br>Ste. 115 #241
                            <br>Spring Branch, TX 78070
                        </p>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p>sales@automatedintegrationtechnologies.com</p>
                    </div>
                    <div>
                        <h4>Phone</h4>
                        <p><a href="#">(512) 843-2943</a></p>
                    </div>
                </address>
            </div>
            <div class="contact__form col-md-5 order-1 order-md-2">
                <h3>Get in touch with us</h3>
                <p><span class="important">Fields marked with an astrisk (*) are required.</span></p>
                <?php echo do_shortcode('[wpforms id="113" title="false"]'); ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>