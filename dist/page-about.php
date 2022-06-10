<?php

/*

Template Name: About

*/

get_header();

?>

<div class="jumbotron" style="background-image: url(<?php the_field('jumbotron'); ?>);">
    <div class="container">
        <div class="jumbotron__breadcrumb">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
        </div>
        <div class="jumbotron__title">
            <h1>
                About Us
            </h1>
        </div>
    </div>
</div>

<main>
    <section>
        <div class="container padding-block-inline-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12">
                    <p>Created by a leadership team that has over 150 Years of combined revenue cycle management (RCM) Experience. Automated Integration Technologies (AIT) provides technology solutions to complete routine administrative and clerical tasks without user intervention. AIT's technology can run continuously in the background, making sure predictable, repetitive tasks get performed without the need for human intervention. Creating a 24/7 virtual workforce Eliminates human error and increases standardization. AIT's solutions allow our clients to reduce or redeploy existing staff and improve job satisfaction.</p>
                
                    <p>AIT's solution can often be integrated with existing electronic health records (EHR), practice management systems, and personal health records (PHR) solutions to integrate the data into existing workflows. AIT is here to help no matter how large or small your organization is.</p>
                </div>
            </div>
        </div>
    </section>

    <p></p>
</main>


<?php get_footer(); ?>