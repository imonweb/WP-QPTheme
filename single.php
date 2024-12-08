 <?php 
/*  
* Template: Single Post
*/
get_header();?>

<?php get_template_part('template-parts/nav'); ?>
<?php get_template_part('template-parts/slider'); ?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4">
        
   
    <?php 
      if(have_posts()) :
        while(have_posts()) :
          the_post();
          ?>

      <?php get_template_part('template-parts/post'); ?>

      <?php     
        endwhile;
      endif;
    ?>
  
      
     
  </div>
 </div>
</div>
<?php get_footer(); ?>