<div class="container">
            <div class="row">
                <div class="col-lg-12 text-light">
                    <h3 class="title"><?= $title ?></h3>
                    <?php foreach ($reviews as $review) : ?>

                    <h5><?= $review['subject'] ?></h5>
                    <p><?= $review['message'] ?></p>
                    <p><?= $review['name'] ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>