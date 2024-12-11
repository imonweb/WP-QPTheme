 <?php 

 // silence is golden...
get_header();?>

<?php get_template_part('template-parts/nav'); ?>
<?php  echo get_theme_mod('setting_id', ''); ?>
<?php
 if(is_home()){
   get_template_part('template-parts/slider'); 
 }  
?> 
<div class="container-fluid">
  <div class="row">
    <!-- <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 text-center"> -->
    <div class="col p-4 card-group justify-content-center" style="align-items: flex-start;">
    
   
    <?php 
      if(have_posts()) :
        while(have_posts()) :
          the_post();
          get_template_part('template-parts/post');    
        endwhile;
      endif;
      
      
    ?>   
    
  </div>
  <div class="col-md-3 bg-light p-2">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </div>
 </div>
 </div>
 
      <?php get_template_part('template-parts/pagination'); ?>
  

<?php get_footer(); ?>