<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/cancha.jpg);">

  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
 <div>
  <nav class="navbar navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.html">Home</a><img id="bandera" src="<?php echo get_theme_file_uri('/assets/img/bandera.jpg') ?>">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        <a class="nav-link" href="quienessomos.html"> Quienes Somos <span class="sr-only">(current)</span></a>

        </li>
        <li class="nav-item">
        <a class="nav-link" href="contacto.html">Contacto</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="campeonatos.html">Campeonato</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="galeria.html">Galeria</a>
        </li>
        </ul>
  </div>
</nav>
</div>
