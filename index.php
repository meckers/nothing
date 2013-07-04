<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
  ?>

<!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
/*
* Print the <title> tag based on what is being viewed.
*/
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );

?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

<?php
    get_header();
?>

     <div id="main" class="site-main">
          <div id="primary" class="content-area">
               <div id="content" class="site-content">

                    <?php if ( have_posts() ) : ?>
                        <?php shape_content_nav( 'nav-above' ); ?>
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php
                            /* Include the Post-Format-specific template for the content.
                            * If you want to overload this in a child theme then include a file
                            * called content-___.php (where ___ is the Post Format name) and    that will be used instead.
                            */
                            get_template_part( 'content', get_post_format() );
                            ?>
                        <?php endwhile; ?>
                        <?php shape_content_nav( 'nav-below' ); ?>
                    <?php else : ?>
                             <?php get_template_part( 'no-results', 'index' ); ?>
                    <?php endif; ?>

               </div><!-- #content .site-content -->
          </div>
          <!-- #primary .content-area -->
          <div id="secondary" class="widget-area">
          </div><!-- #secondary .widget-area -->
          <div id="tertiary" class="widget-area">
          </div><!-- #tertiary .widget-area -->


            <?php get_sidebar(); ?>
            <?php get_footer(); ?>

      </div>
     <!-- #main .site-main -->

</div> <!-- #page .hfeed .site -->

</body>
</html>