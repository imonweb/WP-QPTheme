<?php 

$pag = get_the_posts_pagination();
$pag = str_replace('div', 'ul', $pag); 
$pag = str_replace('nav-links', 'pagination', $pag); 
$pag  = str_replace('page-numbers', 'page-link', $pag);
$pag  = str_replace('<a', '<li class="page-item"><a', $pag);
$pag  = str_replace('<span', '<li class="page-item active"><span', $pag);
$pag  = str_replace('</a>', '</a></li>', $pag);
$pag  = str_replace('</span>', '</span></li>', $pag);

?>

<div class="d-flex align-items-center justify-content-center">
      <?php //the_posts_pagination( ) ?>
      <?= $pag; ?>
  </div>

<!-- <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> -->