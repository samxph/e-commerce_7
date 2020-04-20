<h3 class="title"><?= $title ?></h3>

<form method="post" action="/contact/send">

    <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
    </div>

    <div class="form-group col-4">

        <label class="text-light">Name:</label>
        <input class="form-control" name="name" placeholder="Enter your full name" maxlength="100">

        <label class="text-light">Email:</label>
        <input class="form-control" type="email" name="email" placeholder="Example@email.com" maxlength="100">

        <label class="text-light">Subject:</label>
        <input class="form-control" name="subject" placeholder="Enter subject" maxlength="50">

        <label class="text-light">Message:</label> <br>
        <textarea type="text" name="message" placeholder="Enter Message" rows="10" cols="85" maxlength="500"></textarea>

        <button class="btn btn-warning mt-1">Send</button>
    </div>
</form>