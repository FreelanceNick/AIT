<div class="swiper slide-decor">
    <div class="swiper-wrapper">
        
        <?php if( have_rows('slider') ): ?>
            
            <?php while( have_rows('slider')): the_row(); 
                    $image = get_sub_field('image');  
                    $picture = $image['sizes']['large']; 
                    $description = get_sub_field('text');
            ?>
                <div class="swiper-slide">

                    <img class="swiper-lazy sliderImg" data-src="<?php echo $picture; ?>" data-description="<?php echo $description; ?>" alt="">

                </div>
            <?php endwhile; ?>

        <?php endif; ?>
        
    </div>
</div>