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
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <?php /* LOGO */
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }  
                    ?>
                </div>
                <span class="nav-hamburger material-icons" id="toggler" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                </span>
                <nav class="nav" aria-label="Main navigation" role="navigation">
                    
                    <?php /* NAVIGATION - Primary */
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="nav-items">%3$s</ul>'
                            )
                        );
                    ?>
                </nav>
                <ul class="nav-items">
                    <li class="menu-item btn btn--large btn--orange"><a href="/contact">Request a demo</a></li>
                </ul>
                
            </div>
        </div>
    </header>