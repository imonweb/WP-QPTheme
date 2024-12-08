 <?php 

 // silence is golden...
get_header();?>

<?php 
  if(have_posts()) :
    while(have_posts()) :
      the_post();
      ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>
        <hr>
      <?php
    endwhile;
  endif;
?>

<?php get_footer(); ?>