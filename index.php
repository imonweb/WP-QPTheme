 <?php 

 // silence is golden...
get_header();?>

<?php get_template_part('template-parts/nav'); ?>
<?php get_template_part('template-parts/slider'); ?>

<?php 
  if(have_posts()) :
    while(have_posts()) :
      the_post();
      ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink( ); ?>">read more</a>
        <hr>
      <?php
    endwhile;
  endif;
?>

<?php get_footer(); ?>