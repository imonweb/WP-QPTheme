<?php 
  $slider_activate = get_theme_mod('qp_slider_activate', 1);
?>

<?php if ($slider_activate) : ?>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?php 
        $image = get_template_directory_uri() . './images/slider1-1000x200.jpg';
        if(get_theme_mod('qp_slider_image_1','') != ""){
          $image = wp_get_attachment_url(get_theme_mod('qp_slider_image_1',''));
        }
      ?>
      <?php // print_r($wp_query); ?>
      <img src="<?= $image; ?>"   class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <?php 
          
          $slider_header_text = get_theme_mod('qp_slider_header_text_1','');
          $slider_content_text = get_theme_mod('qp_slider_content_text_1','');
          
        ?>
        <h5><?= $slider_header_text; ?></h5>
        <p><?= $slider_content_text; ?></p>
      </div>
    </div>
    <div class="carousel-item">
      <?php 
        $image = get_template_directory_uri() . './images/slider2-1000x200.jpg';
        if(get_theme_mod('qp_slider_image_2','') != ""){
          $image = wp_get_attachment_url(get_theme_mod('qp_slider_image_2',''));
        }
      ?>
      <img src="<?= $image; ?>"   class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <?php 
          
          $slider_header_text = get_theme_mod('qp_slider_header_text_2','');
          $slider_content_text = get_theme_mod('qp_slider_content_text_2','');
          
        ?>
        <h5><?= $slider_header_text; ?></h5>
        <p><?= $slider_content_text; ?></p>
      </div>
    </div>
    <div class="carousel-item">
      <?php 
        $image = get_template_directory_uri() . './images/slider3-1000x200.jpg';
        if(get_theme_mod('qp_slider_image_3','') != ""){
          $image = wp_get_attachment_url(get_theme_mod('qp_slider_image_3',''));
        }
      ?>
      <img src="<?= $image; ?>"   class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <?php 
          
          $slider_header_text = get_theme_mod('qp_slider_header_text_3','');
          $slider_content_text = get_theme_mod('qp_slider_content_text_3','');
          
        ?>
        <h5><?= $slider_header_text; ?></h5>
        <p><?= $slider_content_text; ?></p>
      </div>
    </div>
    <div class="carousel-item">
      <?php 
        $image = get_template_directory_uri() . './images/slider4-1000x200.jpg';
        if(get_theme_mod('qp_slider_image_4','') != ""){
          $image = wp_get_attachment_url(get_theme_mod('qp_slider_image_4',''));
        }
      ?>
      <img src="<?= $image; ?>"   class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <?php 
          
          $slider_header_text = get_theme_mod('qp_slider_header_text_4','');
          $slider_content_text = get_theme_mod('qp_slider_content_text_4','');
          
        ?>
        <h5><?= $slider_header_text; ?></h5>
        <p><?= $slider_content_text; ?></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php endif; ?>