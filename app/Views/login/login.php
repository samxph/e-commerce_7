<h3 class="title ml-3"><?= $title ?></h3>
<form action="/login/check">
    <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
    </div>

    <div class="form-group col-4">
        <label class="text-light">Username</label>
        <input class="form-control" name="user" placeholder="Enter username" maxlength="30">
        <label class="text-light">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter password" maxlength="30">

        <hr>

        <button type="submit" class="btn btn-warning">Login</button>
        <button type="button" class="btn btn-secondary" onclick="window.location='<?php echo site_url('login/register'); ?>'">Register</button>
    </div>
</form>