<div class="row ml-2">
    <div class="col-6 bg-warning ml-3 mb-3 cart">
        <h4 class="mt-2">Shopping cart</h3>
        <?= anchor('shoppingcart/empty', 'Empty cart'); ?>

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
            <td>
                Total
            </td>
            <td>
                <p><?php
                    $total = 0;
                    foreach ($products as $product) {
                        $total += $product['price'] * $product['qty'];
                    }
                    echo $total;

                    ?> €</p>
            </td>
            <td>
            </td>
            <td>
            </td>
        </table>
        <button class="bg-dark btn btn-secondary text-light float-right mb-2" onclick="window.location='<?php echo site_url('checkout'); ?>'">Proceed to checkout</button>
    </div>
</div>

