<div class="card m-2 p-2 shadow border text-center">
  <div style="display:flex;">
    <div style="flex: 1;">
      <?php the_post_thumbnail('post-preview-small'); ?>
    </div>
    <div class="card-body" style="flex: 2;">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <a href="<?php the_permalink(); ?>" class="btn btn-success btn-sm">Read more</a>
    </div>
  </div>
</div>
