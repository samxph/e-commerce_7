<h3 class="title"><?= $title ?></h3>

<form action="/contact/check">

    <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
    </div>

    <div class="form-group col-4">

        <label class="text-light">Email:</label>
        <input class="form-control" type="email" name="email" placeholder="Example@email.com" maxlength="30">

        <label class="text-light">Subject:</label>
        <input class="form-control" name="subject" placeholder="Enter subject" maxlength="30">

        <label class="text-light">Message:</label>
        <textarea rows="10" cols="30"></textarea>

        <hr>
        <button class="btn btn-primary">Send</button>
    </div>
</form>