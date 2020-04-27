<form method="post" action="/review/addreview">

            <div class="row">
                <div class="col-lg-12"> 

                    <h3 class="title"><?= $title ?></h3>
                    
                        <div class="form-group col-4">
                            <label class="text-light">Name:</label>
                            <input name="name" placeholder="Enter Name" class="form-control" maxlength="100">
                        </div>
                        <div class="form-group col-5">
                            <label class="text-light">Subject:</label>
                            <input name="subject" placeholder="Enter Subject" class="form-control" maxlength="100">
                        </div>
                        <div class="form-group col-5">
                            <label class="text-light">Message:</label>
                            <textarea type="text" name="message" placeholder="&nbsp;&nbsp;Enter Review" rows="10" cols="85" maxlength="500"></textarea>
                            <button type="submit" class="btn btn-warning">Send</button>
                        </div>
   
        </div>
</div>
</form>