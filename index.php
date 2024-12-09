 <?php 

 // silence is golden...
get_header();?>

<?php get_template_part('template-parts/nav'); ?>
<?php
 if(is_home()){
   get_template_part('template-parts/slider'); 
 }  
?>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 text-center">
      <!-- <div class="p-4 card-group justify-content-center text-center"> -->
    <?php 
      if(have_posts()) :
        while(have_posts()) :
          the_post();
          get_template_part('template-parts/post');    
        endwhile;
      endif;

      
    ?>   
  </div>
 </div>
      <?php get_template_part('template-parts/pagination'); ?>
  

<?php get_footer(); ?>