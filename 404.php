 <?php 
/*  Page: 404 */
get_header();
get_template_part('template-parts/nav'); ?>
 
    <div class="container">
      <div class="p-4 justify-content-center mx-auto" style="max-width: 750px;">
       
      <h2>Sorry, We can't find what you're looking for.</h2> 
      <h3>Please try to search for something below.</h3> 
      <form class="d-flex" role="search" active="<?php home_url() ?>">
        <input autofocus name="s" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
 </div>
      <?php get_template_part('template-parts/pagination'); ?>
  

<?php get_footer(); ?>