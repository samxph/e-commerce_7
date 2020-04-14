<h1 class='text-light'>Shipping and payment</h1>
<div class="container">
	<div class="row">
			<div class="form-group col-md-6 col-12">
				<h3 class="text-light">Shipping details</h3>
       				<label class="text-light">First name</label>
        			<input class="form-control" name="fname" placeholder="Enter First name" maxlength="30">
        			<label class="text-light">Last name</label>
       	 			<input class="form-control" name="lname" placeholder="Enter Last name" maxlength="30">
        			<label class="text-light">Email</label>
        			<input class="form-control" name="usermail" placeholder="Enter Email" maxlength="30">
        			<label class="text-light">Address</label>
        			<input class="form-control" name="useraddress" placeholder="Enter Address" maxlength="30">
        			<label class="text-light">Postcode</label>
        			<input class="form-control" name="userpostcode" placeholder="Enter Postcode" maxlength="30">
        			<label class="text-light">City</label>
        			<input class="form-control" name="userpostoffice" placeholder="Enter city" maxlength="30">
        			<label class="text-light">Phone number</label>
        			<input class="form-control" name="userphone" placeholder="Enter Phone number" maxlength="30">
			</div>
			<div class="paymentCont">
						<div class="headingWrap">
								<h3 class="headingTop text-center text-light">Select Your Payment Method</h3>	
						</div>
						<div class="paymentWrap bg-light col-12">
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
                            <h2>Summary</h2>
                            <div class="row">
                                <div class="col-12 ml-3 mb-3 cart">

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
                                    <div class="footerNavWrap clearfix">
							<div class="btn btn-success float-left btn-fyi"><span  class="glyphicon glyphicon-chevron-left"><a class="text-light" href='/'> CONTINUE SHOPPING</a></span></div>
							<div class="btn btn-success float-right btn-fyi"><a class="text-light" href='#'> PLACE ORDER</a><span class="glyphicon glyphicon-chevron-right"></span></div>  
                             </div>
                        </div>
                        
					</div>
		
			</div>
</div>