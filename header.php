<!DOCTYPE html>

<html>

    <head>
        <title>
            <?php echo get_the_title(); ?>
        </title>
        <?php wp_head(); ?>
    </head>

    <body>

    <!--   old code for reference
        <nav>
            <?php wp_nav_menu( array(
                'theme_location' => 'main_menu'
                 ) );
            ?>



        </nav>
        
-->

<header class="header">

    <div class="logo">

        </div>

            <input class="menu-btn" type="checkbox" id="menu-btn" />

            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

            <ul class="menu" role="navigation">
              <li><a href="./index.html">HOME</a></li>
              <li><a href="./pages/menu.html">MENU</a></li>
              <li><a href="./pages/about.html">ABOUT</a></li>
              <li><a href="./pages/contact&location.html">CONTACT & LOCATION</a></li>
            </ul>
        
</header>

    