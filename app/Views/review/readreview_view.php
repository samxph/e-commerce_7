<div class="container">
            <div class="row">
                <div class="col-lg-12 text-light">
                    <h3 class="title"><?= $title ?></h3>
                    <?php foreach ($reviews as $review) : ?>

                    <h5> <p><?= $review['name'] ?></p></h5>
                    <?= $review['subject'] ?>
                    <p><?= $review['saved'] ?></p>
                    <p><?= $review['message'] ?></p>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>