<div class="card m-4 text-center pt-4">
  <div style="text-align:center">
    <?php 
      $post_id = get_the_ID();
      $views = (int)get_post_meta($post_id, 'views', true);
      // $views = $views = '' ? 0 : $views; 
      update_post_meta($post_id, 'views', $views + 1);
      $views = get_post_meta($post_id, 'views', true);
      echo "Views: <span class='dashicons dashicons-welcome-view-site'></span>" . $views . "<br />";
    
    ?>
  <?php // the_post_thumbnail('post-thumbnal'); ?>
  <?php 
  the_post_thumbnail('post-thumbnail',[
    'style' => 'width:60%; height:100%;'
  ]); 
  ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php echo substr(get_the_excerpt(),0,50) ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
  </div>
</div>