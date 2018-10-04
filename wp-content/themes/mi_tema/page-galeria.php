<?php get_header(); ?>
<!-- Template Name:galeria -->
<div>
<h1 class="text-center display-4 my-4">Galería de Imágenes</h1>
<div class="card-deck">
  <div class="card">
    <img class="img-fluid" src="<?php echo get_theme_file_uri('/assets/img/1.jpeg') ?>" alt="Card image cap">
    <div class="card-body">
    </div>
  </div>
  <div class="card">
    <img class="img-fluid" src="<?php echo get_theme_file_uri('/assets/img/2.jpeg') ?>" alt="Card image cap">
    <div class="card-body">
      </div>
  </div>
  <div class="card">
    <img class="img-fluid" src="<?php echo get_theme_file_uri('/assets/img/3.jpeg') ?>" alt="Card image cap">
    <div class="card-body">
      </div>
  </div>
</div>
<?php get_footer(); ?>