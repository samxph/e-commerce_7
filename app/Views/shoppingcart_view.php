<div class="row ml-2">
    <div class="col-6 bg-warning ml-3 mb-3 cart">
        <h4 class="mt-2">Shopping cart</h3>


            <table class="table">
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Qty.
                    </th>
                </tr>

                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td>
                            <?= $product['title'] ?>
                        </td>

                        <td>
                            <?= $product['price'] ?> €
                        </td>

                        <td>
                            <?= $product['qty'] ?>
                        </td>

                        <td>
                            <?= anchor('shoppingcart/remove/' . $product['id'], 'Remove item from cart'); ?>

                        </td>
                    </tr>

                <?php endforeach; ?>
                <th>
                   Total
                </th>
                <th>
                    <?php
                        $total = 0;
                        foreach ($products as $product) {
                            $total += $product['price'] * $product['qty'];
                        }
                        echo $total;

                    ?> €
                </th>
                <td>
                </td>
                <td>
                </td>
            </table>
            <?php if (sizeof($products) == 0) {
                echo "<h4 class='text-right'>Your shopping cart is empty</h4>";
            } else { ?>
                <button class="bg-dark btn btn-secondary text-light float-left mb-2" onclick="window.location='<?php echo site_url('shoppingcart/empty'); ?>'">Empty cart </button>
                <button class="bg-dark btn btn-secondary text-light float-right mb-2" onclick="window.location='<?php echo site_url('checkout'); ?>'">Proceed to checkout </button>
            <?php
            }
            ?>
    </div>
</div>