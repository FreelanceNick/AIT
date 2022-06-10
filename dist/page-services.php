<?php 

/*

Template Name: Services

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
                Services
            </h1>
        </div>
    </div>
</div>


<main>
    
    <div class="grid-services">
        <?php if( have_rows('content')): ?>
    
            <?php while( have_rows('content')): the_row(); ?>
                
                <?php if( get_row_layout() == 'text_and_image' ):
    
                    $title = get_sub_field('title');
                    $content = get_sub_field('description');
                    $image = get_sub_field('image');
                    $pictureLg = $image['sizes']['large'];
                    $uniqueID = get_sub_field('unique_id');
                    $side = get_sub_field('image_side');
    
                ?>
                    
                    <div class="service-wrapper">
                        <div class="container-xl">
                            <div id="<?php echo $uniqueID; ?>" class="row justify-content-around align-items-center flow">
                                
                                <?php if($side == 'left'): ?>
            
                                    <img loading="lazy" class="col-11 col-md-5 order-2 order-md-1" src="<?php echo $pictureLg; ?>" alt="">
                                    <div class="flow col-11 col-md-5 order-md-2">
                                        <h3><?php echo $title; ?></h3>
                                        <p><?php echo $content; ?></p>
                                    </div>
            
                                <?php else: ?>
                                    
                                    <div class="flow col-11 col-md-5">
                                        <h3><?php echo $title; ?></h3>
                                        <p><?php echo $content; ?></p>
                                    </div>
                                    <img loading="lazy" class="col-11 col-md-5" 
                                        src="<?php echo $pictureLg; ?>" 
                                        alt="">
            
                                <?php endif; ?>
            
                            </div>
                        </div>
                    </div>
    
                <?php endif; ?>
    
            <?php endwhile; ?>
    
        <?php endif; ?>
    </div>
    
</main>


<?php get_footer(); ?>