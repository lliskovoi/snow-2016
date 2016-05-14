<?php
/**
 * Template Name: Top-level page
 */

get_header(); ?>

<?php
$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0"); ?>

<?php if ($children) { ?>
<aside id="secondary" class="sidebar">
  <h3>Sub-navigation</h3>
  <ul class="submenu">
      <?php echo $children; ?>
  </ul>
</aside>

<div id="primary" class="content-area">
<?php } ?>  
  <main id="main" class="site-main" role="main">
      
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h2><?php the_title();?></h2>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>                  

  </main>
  <?php get_sidebar( 'content-bottom' ); ?>
<?php if ($children) { ?></div><?php } ?>

<?php get_footer(); ?>
