<?php
   $title = "Sparna Fashion"; 
   include ('header.php') ;
  ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="car/img1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="car/img2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="car/img3.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="car/img4.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container"></div>

<section class="container trending">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 hidden-xs">
        <a href="#" class="thumbnail">
          <img src="img/gift2.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="#" class="thumbnail">
          <img src="img/trend2.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <a href="#" class="thumbnail">
          <img src="img/policy.jpg" alt="..." class="">
        </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 visible-xs">
        <a href="#" class="thumbnail">
          <img src="img/gift2.jpg" alt="...">
        </a>
      </div>

    </div>
</section>

<section class="container trending">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="tops.php" class="thumbnail">
          <img src="img/tops.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="western.php" class="thumbnail">
          <img src="img/western.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="tshirts.php" class="thumbnail">
          <img src="img/tshirts.jpg" alt="...">
        </a>
      </div>
    </div>
</section>


	
<?php include ('footer.php') ?>