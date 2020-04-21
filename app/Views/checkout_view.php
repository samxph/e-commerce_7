<h3 class='text-light pb-2'>Shipping and payment</h1>

    <form action="order/makeorder" method="post">
    
        <div class="row ml-2">
            <div class="col-6 bg-warning ml-3 mb-3 cart">
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
                    <button class="bg-dark text-light btn btn-secondary float-right mb-2">Place order</button>
                    <p>Required fields are marked with *</p>
            </div>
        </div>
    </form>