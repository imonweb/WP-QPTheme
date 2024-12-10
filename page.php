 <?php get_header();?>

<?php get_template_part('template-parts/nav'); ?>
<?php
 if(is_home()){
   get_template_part('template-parts/slider'); 
 }  
?>

<!-- <div class="card m-4"> -->
<div class="m-4">
  <?php the_post_thumbnail('post-preview'); ?>
  <div class="card-body">
    <h4 class="card-title"><?php the_title(); ?></h4>
    <p class="card-text"><?php the_content() ?></p>
  </div>
</div>





<?php get_footer(); ?>