<?php 

/*

Template Name: FAQs

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
                Frequently Asked Questions (FAQs)
            </h1>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row justify-content-center padding-block-8 flow">
            <h2>Commonly Asked...</h2>
            <div class="accordion col-sm-10 col-md-8 col-lg-8">
                <div class="accordion__item">
                    
                    <button class="accordion__question" aria-expanded="false">
                        What can be automated in my organization?

                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion__collapse">
                        <div class="accordion__content">
                            Automation through AIT replicates the actions of staff in order to complete routine administrative and clerical tasks without user intervention. AIT can automate preauthorization's, insurance verification, claim status retrieval, secondary billing and more. Contact us to see how we can help with your specific needs.

                        </div>
                    </div>
                </div>
                <div class="accordion__item">
                    
                    <button class="accordion__question" aria-expanded="false">
                        How does RPA work?

                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion__collapse">
                        <div class="accordion__content">
                            AIT uses Bot and artificial intelligence to replicate the actions of staff in order to complete routine administrative and clerical tasks without user intervention. AIT can automate preauthorization's, insurance verification, claim status retrieval, secondary billing and more. Contact us to see how we can help with your specific needs.

                        </div>
                    </div>
                </div>

                <div class="accordion__item">
                    
                    <button class="accordion__question" aria-expanded="false">
                        How long does it take to set-up (RPA)?

                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion__collapse">
                        <div class="accordion__content">
                            Set-up can be completed in days for existing process and a few weeks for custom solutions.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>