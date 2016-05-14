<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

  <main id="main" class="site-main" role="main">
    <div class="home-top">      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>    
    <div class="container">        
      <div class="row">
        <div class="col-three">
          <img src="<?php echo get_template_directory_uri(); ?>/images/blog.png" alt="">
            <?php
            if (function_exists('dynamic_sidebar')) {
                dynamic_sidebar("home-left");
            } ?>
        </div>
        <div class="col-three">
          <img src="<?php echo get_template_directory_uri(); ?>/images/apps.png" alt="">
            <?php
            if (function_exists('dynamic_sidebar')) {
                dynamic_sidebar("home-middle");
             } ?>
        </div>
        <div class="col-three">
          <img src="<?php echo get_template_directory_uri(); ?>/images/calendar.png" alt="">
            <?php
            if (function_exists('dynamic_sidebar')) {
                dynamic_sidebar("home-right");
            } ?>
        </div>
      </div>
    </div>                  

  </main>
  <?php get_sidebar( 'content-bottom' ); ?>

<?php get_footer(); ?>
