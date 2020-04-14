<h3 class="text-light">Shopping cart</h3>

<div class="row">
    <div class="col-6 bg-warning ml-3 mb-3 cart">

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
                    <?= anchor('shoppingcart/remove', 'Remove item from cart'); ?>
                    </td>
                </tr>

            <?php endforeach; ?>
                    <td>
                        Total
                    </td>
                    <td>
                    <p><?php
                                    $total = 0;
                                     foreach($products as $product) {
                                         $total += $product['price'];
                                     }
                                    echo $total;
                                    
                                    ?> €</p>
                    </td>
                    <td>
                    </td>
                    <td>
                     </td>
                    
        </table>
          <form method="post" action="<?= site_url('shoppingcart/checkout'); ?>">
          <button class="bg-dark text-light float-right">Checkout</button>
          </form>
    </div>
</div>