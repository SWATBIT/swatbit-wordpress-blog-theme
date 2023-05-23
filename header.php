<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo_Swatbit_Seogram_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	
	<header id="header" class="site-header">


	<nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <!-- Inputs in ACF
        Theme General Settings
        Header
        Website Title: SEO<span class="text-primary">Gram.</span> 
        -->
      <a href="#" class="navbar-brand"><?php $website_title = get_field( 'header_website_title', 'option' );
        if($website_title){ ?>
          <?php echo $website_title;?><?php the_field( 'header_website_sub_title', 'option' ); ?></a>
        <?php }else{
          echo '<a href="'.home_url().'/wp-admin/admin.php?page=acf-options-theme-settings">Please Add  Website Title</a>';
        }
        ?>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <!-- <div class="ml-auto"> ..</div> CMBM(change made by me)  -->
        <div class="ml-auto">
                <?php
                    wp_nav_menu( array(
                      'theme_location'  => 'primary',
                      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                      'menu_class'      => 'navbar-nav',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                  ) );
    
                ?>
                </div>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Let's Check and Optimize your website!</h1>
            <p class="text-lg text-grey mb-5">Ignite the most powerfull growth engine you have ever built for your company</p>
            <a href="#" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="../assets/img/banner_image_1.svg" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
	</header><!-- #masthead -->
