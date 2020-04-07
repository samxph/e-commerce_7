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
                    Amount
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
                        <?= $product['amount'] ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>

    </div>
</div>