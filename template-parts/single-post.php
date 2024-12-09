<div class="card m-4 text-center pt-4">
  <div style="text-align:center">
  <?php // the_post_thumbnail('post-thumbnal'); ?>
  <?php the_post_thumbnail('post-thumbnail',[
    'style' => 'width:60%; height:100%;'
  ]); ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php echo substr(get_the_excerpt(),0,50) ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
  </div>
</div>