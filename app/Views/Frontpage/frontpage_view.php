<div class="col-lg-12">

<div class="row">
<div id="carouselExampleIndicators" class="carousel slide my-4 ad1" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="carousel slide my-4 ad2">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="">
            </div>
        </div>
</div>

<h2 class="text-light">New releases</h2>
<div class="row">
<?php foreach($products as $product): ?>
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="<?php echo base_url('images/' . $product['picture']); ?>" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><?= $product['title']?></a>
        </h4>
        <h5>
          <?= $product['price']?> €
        </h5>
        <p class="card-text"><?= $product['description']?></p>
      </div>
      <button>Add to cart</button>
    </div>
  </div>

<?php endforeach; ?>


</div>
<!-- /.row -->

</div>
<!-- /.col-lg-9 -->