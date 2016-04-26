<?php
/**
 * Template Name: Top-level page
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
      
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><?php the_title();?></h1>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>                  

  </main>
  <?php get_sidebar( 'content-bottom' ); ?>
</div>
<aside id="secondary" class="sidebar">
 <?php
$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
	<ul class="submenu">
		<?php echo $children; ?>
	</ul>
<?php } ?>
</aside>
<?php get_footer(); ?>
