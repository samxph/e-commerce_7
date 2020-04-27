 
                    <h3 class="title"><?= $title ?></h3>
                    &nbsp;&nbsp;<button type="button" class="btn btn-secondary" onclick="window.location='<?php echo site_url('sendreview/'); ?>'">Write new review</button>
                    <hr>

                    <div class="message info text-info">
                    <?php foreach ($reviews as $review) : ?>

                    <h4> <p><?= $review['name'] ?></p></h4>
                    <h4><?= $review['subject'] ?></h4>
                    <p><?= $review['saved'] ?></p>
                    <p><?= $review['message'] ?></p>

                    <?php endforeach; ?>
                    </div>
                </div>