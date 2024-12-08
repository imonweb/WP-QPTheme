<div class="card m-4 shadow border">
  <!-- <img src="<?php //echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="..."> -->
  <?php the_post_thumbnail('post-preview'); ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php echo substr(get_the_excerpt(),0,50) ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
  </div>
</div>