<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>
    
    <?php if( get_row_layout() == 'textarea_with_image' ):

        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $icon = get_sub_field('icon');
        $image = get_sub_field('image');
        $pictureLg = $image['sizes']['large'];
        $pictureMd = $image['sizes']['medium'];
        $side = get_sub_field('image_side');

    ?>
        
        <div class="row justify-content-between align-items-center flow">
            
            <?php if($side == 'left'): ?>

                <img loading="lazy" class="lazy col-lg-5 order-2 order-md-1" src="<?php echo $pictureLg; ?>" alt="">
                <div loading="lazy" class="icon col-auto col-1 order-md-2">
                    <i class="fa-solid fa-house-medical-circle-check fa-3x"></i>
                </div>
                <div class="flow col-lg-5 order-1 order-md-3">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>

            <?php else: ?>
                
                <div class="flow col-lg-5">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
                <div class="icon col-auto col-1">
                    <i class="fa-solid fa-house-medical-circle-check fa-3x"></i>
                </div>
                <img loading="lazy" class="lazy col-lg-5" src="<?php echo $pictureLg; ?>" alt="">

            <?php endif; ?>



        </div>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>