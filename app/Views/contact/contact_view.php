<h3 class="title"><?= $title ?></h3>

<form method="post" action="/contact/send">

    <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
    </div>

    <div class="form-group col-4">

        <label class="text-light">Email:</label>
        <input class="form-control" type="email" name="email" placeholder="Example@email.com" maxlength="30">

        <label class="text-light">Subject:</label>
        <input class="form-control" name="subject" placeholder="Enter subject" maxlength="30">

        <label class="text-light">Message:</label> <br>
        <textarea type="text"  rows="10" placeholder="Enter Message" cols="85"></textarea>

        <button class="btn btn-primary mt-1">Send</button>
    </div>
</form>