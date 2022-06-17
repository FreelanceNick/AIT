<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<header class="header">
        <div class="wrapper nav nav-wrapper">

            <div class="logo">
                <?php /* LOGO */
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }  
                ?>
            </div>
    
            <span class="hamburger material-icons" id="ham" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
            </span>
    
            <nav class="nav-menu">
                <?php /* NAVIGATION - Primary */
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="primary-nav" class="nav-links">%3$s</ul>'
                        )
                    );
                ?>
            </nav>
            
            <!-- <a class="hidden-m btn" href="#contact">Contact Us</a> -->
            <a href="/contact" class="cta">
                <span>Contact Us</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>

        </div>
    </header>