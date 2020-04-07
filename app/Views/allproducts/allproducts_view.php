<div class="col-lg-12">

<div class="text-center col-12">
<h2>All Games</h2>
</div>

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
        
      </div>
      <button>Add to cart</button>
    </div>
  </div>

<?php endforeach; ?>


</div>
<!-- /.row -->

</div>
<!-- /.col-lg-9 -->