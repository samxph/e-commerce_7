 
                    <h3 class="title"><?= $title ?></h3>
                    &nbsp;&nbsp;<button type="button" class="btn btn-secondary" onclick="window.location='<?php echo site_url('sendreview/'); ?>'">Write new review</button>
                    <hr>

                    <div class="message info text-info">
                    <?php foreach ($reviews as $review) : ?>

                        <dl>
                    <dt><?= $review['name'] ?></dt>
                    <h4 class="lead"><?= $review['subject'] ?></h4>
                    <p class="font-italic"><?= $review['saved'] ?></p>
                    <p class="font-weight-light"><?= $review['message'] ?></p>
                    </dl>

                    <?php endforeach; ?>
                    </div>
                </div>
            
