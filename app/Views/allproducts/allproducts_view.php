<div class="col-lg-12">

<div class="text-center col-12">
<h2 class="text-light"><?= $title ?></h2>
</div>

<div class="row">

  <?php foreach ($products as $product) : ?>
    <div class="col-lg-3 col-md-6 mb-4 opacity-100g">
      <div class="card h-100 bg-warning">
        <a href="#"><img class="card-img-top kuvat" src="<?php echo base_url('images/' . $product['picture']); ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#" class="text-dark"><?= $product['title'] ?></a>
          </h4>
          <h5>
            <?= $product['price'] ?> €
          </h5>
          <p class="card-text"><?= $product['description'] ?></p>
        </div class="bg-dark">
        <form method="post" action="">
          <button class="bg-dark text-light">Add to cart</button>
        </form>
      </div>
    </div>

  <?php endforeach; ?>

</div>
<!-- /.row -->

</div>
<!-- /.col-lg-9 -->