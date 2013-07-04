<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Shape
 * @since Shape 2.0
 */
?>
     <header id="masthead" class="site-header" role="banner">
          <hgroup>
               <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
               <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
          </hgroup>
          <nav role="navigation" class="site-navigation main-navigation">
              <h1 class="assistive-text"><?php _e( 'Menu', 'shape' ); ?></h1>
              <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', 'shape' ); ?></a></div>
              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </nav><!-- .site-navigation .main-navigation -->


     </header><!-- #masthead .site-header -->