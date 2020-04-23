<h3 class='text-light pb-2'>Shipping and payment</h1>

    <form action="order/makeorder" method="post">

        <div class="row ml-2">
            <div class="col-5 bg-warning ml-3 mb-3 cart">
                <h4 class="mt-2">Customer information</h4>
                <form action="<?= site_url('order/makeorder') ?>" method="post">
                    <div class="form-group">
                        <label>*First name:</label>
                        <input name="firstname" maxlength="50" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>*Last name:</label>
                        <input name="lastname" maxlength="100" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>*Address:</label>
                        <input name="address" maxlength="100" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>*Postal code:</label>
                        <input name="postcode" maxlength="5" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>*Post office:</label>
                        <input name="postoffice" maxlength="100" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>*Email:</label>
                        <input name="email" type="email" maxlength="255" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input name="phone" maxlength="20" class="form-control">
                    </div>
                    <button type="button" class="bg-dark btn btn-secondary" onclick="window.location='<?php echo site_url('frontpage'); ?>'">CONTINUE SHOPPING</button>
                    <button type="submit" class="bg-dark btn btn-secondary float-right mb-2">Place order</button>
                    <p>Required fields are marked with *</p>
            </div>

            <!-- seperates the divs -->

            <div class="col-5 bg-warning ml-3 mb-3 cart">
                <h4 class="mt-2">Payment information</h4>
                <?php
                $discount = 0;
                if (count($_POST) > 0) {
                    if ($_POST['code'] == "covid") {
                        $discount = 1;
                    } else {
                        $discount = 0;
                    }
                }
                ?>

                <div class="paymentCont mt-3 mb-3">
                    <div class="paymentWrap bg-light cart">
                        <h4>Select payment method</h4>
                        <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                            <label class="btn paymentMethod active">
                                <div class="method visa"></div>
                                <input type="radio" name="options" checked>
                            </label>
                            <label class="btn paymentMethod">
                                <div class="method master-card"></div>
                                <input type="radio" name="options">
                            </label>
                            <label class="btn paymentMethod">
                                <div class="method paypal"></div>
                                <input type="radio" name="options">
                            </label>
                            <label class="btn paymentMethod">
                                <div class="method bitcoin"></div>
                                <input type="radio" name="options">
                            </label>

                        </div>
                        <h4>Select delivery method</h2>
                            <div class="bg-light">
                                <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                                    <label class="btn paymentMethod">
                                        <div class="method matkahuolto"></div>
                                        <input type="radio" name="options" checked>
                                    </label>
                                    <label class="btn paymentMethod">
                                        <div class="method posti"></div>
                                        <input type="radio" name="options">
                                    </label>
                                </div>
                            </div>

                            <h4>Summary</h4>

                            <div class="cart">
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

                                        </tr>

                                    <?php endforeach; ?>
                               </table>


                                <h2>Total <?php
                                            $total = 0;
                                            $sum = 0;
                                            foreach ($products as $product) {
                                                $sum += $product['price'] * $product['qty'];
                                            }
                                            $total = $sum;
                                            echo $total;

                                            ?> €</h2>
                                <p>Tax is included in the price</p>
                            </div>
                    </div>
                </div>
            </div> <!-- PAYMENT DIV -->
        </div> <!-- CONTACT DIV -->
    </form>