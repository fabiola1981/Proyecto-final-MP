<?php get_header(); ?>
<!-- Template Name:quienes somos -->
<center><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img id="gol" class="d-block w-50" src="<?php echo get_theme_file_uri('/assets/img/foto2.jpg') ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img id="gol" class="d-block w-50" src="<?php echo get_theme_file_uri('/assets/img/salida-plantel.jpg') ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img id="gol" class="d-block w-50" src="<?php echo get_theme_file_uri('/assets/img/partido-final.jpg') ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
</div></center>
<!--Real Chile-->   
<div class="jumbotron1" style="background-color:blue;  font-family: Monoton;"> <center><h2 style="font-size: 3.0em;color:white;">  REAL CHILE</h2></center></div>
<div class="card-group">
  <div class="card">
    <img id="nacional" class="card-img-top" src="<?php echo get_theme_file_uri('assets/img/estadio-nacional.jpg') ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nuestra Historia</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img id="nacional" class="card-img-top" src="assets/img/sanramon.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Visión</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img id="nacional" class="card-img-top" src="assets/img/elite.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Misión</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<?php get_footer(); ?>