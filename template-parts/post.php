<div class="card m-4 p-2 shadow border">
  <!-- <img src="<?php //echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="..."> -->
  <?php the_post_thumbnail('post-preview'); ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="text-muted">
      <?php 
        $cats = get_the_category(); 
        if(is_array($cats))
        {
          foreach($cats as $cat){
            echo '<span class="dashicons dashicons-welcome-write-blog"></span><a href="'.$cat->taxononmy.'/'.$cat->slug.'">'. $cat->name .'</a>';
          }
        }
      ?>
      <pre><?php // print_r($wp_query) ?></pre>
 
    </p>
    <p class="text-muted"><?php the_time("F jS, Y"); ?> | <?php the_author() ?></p>
    <p class="card-text"><?php echo substr(get_the_excerpt(),0,50) ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
  </div>
</div>